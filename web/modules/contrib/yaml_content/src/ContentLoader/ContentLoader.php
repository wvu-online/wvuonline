<?php

namespace Drupal\yaml_content\ContentLoader;

use Drupal\Core\Config\ConfigValueException;
use Drupal\Core\Entity\EntityFieldManagerInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Extension\ModuleHandlerInterface;
use Drupal\Core\Field\EntityReferenceFieldItemList;
use Drupal\Core\Field\FieldException;
use Drupal\Core\TypedData\Exception\MissingDataException;
use Symfony\Component\Yaml\Parser;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Drupal\yaml_content\Event\YamlContentEvents;
use Drupal\yaml_content\Event\ContentParsedEvent;
use Drupal\yaml_content\Event\EntityPreSaveEvent;
use Drupal\yaml_content\Event\EntityPostSaveEvent;
use Drupal\yaml_content\Event\FieldImportEvent;
use Drupal\yaml_content\Event\EntityImportEvent;

/**
 * ContentLoader class for parsing and importing YAML content.
 *
 * @todo Refactor to implement ContainerInjectionInterface.
 * @todo Refactor to use a separate static helper service.
 */
class ContentLoader implements ContentLoaderInterface {

  /**
   * The entity type manager interface.
   *
   * @var \Drupal\Core\Entity\EntityTypeManagerInterface
   */
  protected $entityTypeManager;

  /**
   * The entity field manager service.
   *
   * @var \Drupal\Core\Entity\EntityFieldManagerInterface
   */
  protected $entityFieldManager;

  /**
   * The module handler interface for invoking any hooks.
   *
   * @var \Drupal\Core\Extension\ModuleHandlerInterface
   */
  protected $moduleHandler;

  /**
   * Event dispatcher service to report events throughout the loading process.
   *
   * @var \Symfony\Component\EventDispatcher\EventDispatcherInterface
   */
  protected $dispatcher;

  /**
   * YAML parser.
   *
   * @var \Symfony\Component\Yaml\Parser
   */
  protected $parser;

  /**
   * The parsed content.
   *
   * @var mixed
   */
  protected $parsedContent;

  /**
   * Boolean value of whether other not to update existing content.
   *
   * @var bool
   */
  protected $existenceCheck;

  /**
   * The directory path where content and assets may be found for import.
   *
   * @var string
   */
  protected $path;

  /**
   * The file path for the content file currently being loaded.
   *
   * @var string
   */
  protected $contentFile;

  /**
   * ContentLoader constructor.
   *
   * @param \Drupal\Core\Entity\EntityTypeManagerInterface $entity_type_manager
   *   Entity type manager.
   * @param \Drupal\Core\Entity\EntityFieldManagerInterface $entity_field_manager
   *   Entity field manager service.
   * @param \Drupal\Core\Extension\ModuleHandlerInterface $module_handler
   *   Drupal module handler service.
   * @param \Symfony\Component\EventDispatcher\EventDispatcherInterface $dispatcher
   *   An event dispatcher service to publish events throughout the process.
   *
   * @todo Fetch parser via dependency injection.
   */
  public function __construct(EntityTypeManagerInterface $entity_type_manager, EntityFieldManagerInterface $entity_field_manager, ModuleHandlerInterface $module_handler, EventDispatcherInterface $dispatcher) {
    $this->parser = new Parser();
    $this->entityTypeManager = $entity_type_manager;
    $this->entityFieldManager = $entity_field_manager;
    $this->moduleHandler = $module_handler;
    $this->dispatcher = $dispatcher;

    // Default to creating new entities on import.
    $this->existenceCheck = FALSE;
  }

  /**
   * {@inheritdoc}
   */
  public function setContentPath($path) {
    $this->path = $path;
  }

  /**
   * Returns whether or not the system should check for previous demo content.
   *
   * @return bool
   *   The true/false value of existence check.
   */
  public function existenceCheck() {
    return $this->existenceCheck;
  }

  /**
   * Set the whether or not the system should check for previous demo content.
   *
   * @param bool $existence_check
   *   The true/false value of existence check. Defaults to true if no value
   *   is provided.
   *
   * @return $this
   */
  public function setExistenceCheck($existence_check = TRUE) {
    $this->existenceCheck = $existence_check;

    return $this;
  }

  /**
   * {@inheritdoc}
   */
  public function parseContent($content_file) {
    $file = $this->path . '/content/' . $content_file;
    // @todo Handle missing files gracefully.
    $this->parsedContent = $this->parser->parse(file_get_contents($file));

    // Never leave this as null, even on a failed parsing process.
    // @todo Output a warning for empty content files or failed parsing.
    $this->parsedContent = isset($this->parsedContent) ? $this->parsedContent : [];

    // Dispatch the event notification.
    $content_parsed_event = new ContentParsedEvent($this, $this->contentFile, $this->parsedContent);
    $this->dispatcher->dispatch(YamlContentEvents::CONTENT_PARSED, $content_parsed_event);

    return $this->parsedContent;
  }

  /**
   * {@inheritdoc}
   */
  public function loadContent($content_file, $skip_existence_check = TRUE) {
    $this->setExistenceCheck($skip_existence_check);
    $content_data = $this->parseContent($content_file);

    $loaded_content = [];

    // Create each entity defined in the yml content.
    foreach ($content_data as $content_item) {
      $entity = $this->buildEntity($content_item['entity'], $content_item);

      // Dispatch the pre-save event.
      $entity_pre_save_event = new EntityPreSaveEvent($this, $entity, $content_item);
      $this->dispatcher->dispatch(YamlContentEvents::ENTITY_PRE_SAVE, $entity_pre_save_event);

      $entity->save();

      // Dispatch the post-save event.
      $entity_post_save_event = new EntityPostSaveEvent($this, $entity, $content_item);
      $this->dispatcher->dispatch(YamlContentEvents::ENTITY_POST_SAVE, $entity_post_save_event);

      $loaded_content[] = $entity;
    }

    // Trigger a hook for post-import processing.
    $this->moduleHandler->invokeAll('yaml_content_post_import',
      [$content_file, &$loaded_content, $content_data]);

    return $loaded_content;
  }

  /**
   * Identify data keys as properties, fields, or other.
   *
   * @param \Drupal\Core\Entity\EntityTypeInterface $entity_definition
   *   The entity type definition for the entity being imported.
   * @param string $key
   *   The data key being identified.
   *
   * @return string
   *   The type of attribute being identified. This value may be one of:
   *
   *   - property
   *     All values defined as entity keys will be indicated as properties.
   *   - field
   *     Defined fields for the entity type not indicated as entity keys will
   *     be indicated as fields.
   *   - other
   *     All other values will be categorized here.
   *
   * @todo Use entity type information to more accurately identify attributes.
   * @todo Potentially move this into a separate helper service class.
   */
  protected function identifyAttributeType(EntityTypeInterface $entity_definition, $key) {
    // Load the list of fields defined for the entity type.
    // @todo Add validation that the entity type is listed here.
    $field_map = $this->entityFieldManager->getFieldMap();
    $field_list = $field_map[$entity_definition->id()];

    if ($entity_definition->hasKey($key)) {
      $attribute_type = 'property';
    }
    elseif (array_key_exists($key, $field_list)) {
      $attribute_type = 'field';
    }
    else {
      $attribute_type = 'other';
    }

    return $attribute_type;
  }

  /**
   * Build an entity from the provided content data.
   *
   * @param string $entity_type
   *   The entity type.
   * @param array $content_data
   *   The array of content data to be parsed.
   *
   * @return \Drupal\Core\Entity\EntityInterface
   *   The created entity from the parsed content data.
   */
  public function buildEntity($entity_type, array $content_data) {
    // Load entity type definition.
    $entity_definition = $this->entityTypeManager->getDefinition($entity_type);

    // Load entity type handler.
    $entity_handler = $this->entityTypeManager->getStorage($entity_type);

    // Dispatch the entity import event.
    $entity_import_event = new EntityImportEvent($this, $entity_definition, $content_data);
    $this->dispatcher->dispatch(YamlContentEvents::IMPORT_ENTITY, $entity_import_event);

    // Parse properties for creation and fields for processing.
    $attributes = [
      'property' => [],
      'field' => [],
      'other' => [],
    ];
    foreach ($content_data as $key => $data) {
      $type = $this->identifyAttributeType($entity_definition, $key);

      // Process simple values as properties for initial creation.
      if ($type == 'field' && !is_array($data)) {
        $type = 'property';
      }

      $attributes[$type][$key] = $data;
    }

    // If it is a 'user' entity, append a timestamp to make the username unique.
    if ($entity_type == 'user' && isset($attributes['property']['name'][0]['value'])) {
      $attributes['property']['name'][0]['value'] .= '_' . time();
    }
    // Create the entity only if we do not want to check for existing nodes.
    if (!$this->existenceCheck()) {
      $entity = $entity_handler->create($attributes['property']);
    }
    else {
      $entity = $this->entityExists($entity_type, $content_data);

      // Create the entity if no existing one was found.
      if ($entity === FALSE) {
        $entity = $entity_handler->create($attributes['property']);
      }
    }

    // Populate fields.
    foreach ($attributes['field'] as $field_name => $field_data) {
      try {
        if ($entity->hasField($field_name)) {
          $field_instance = $entity->get($field_name);

          // Dispatch field import event prior to populating fields.
          $field_import_event = new FieldImportEvent($this, $entity, $field_instance, $field_data);
          $this->dispatcher->dispatch(YamlContentEvents::IMPORT_FIELD, $field_import_event);

          $this->populateField($field_instance, $field_data);
        }
        else {
          throw new FieldException('Undefined field: ' . $field_name);
        }
      }
      catch (MissingDataException $exception) {
        watchdog_exception('yaml_content', $exception);
      }
      catch (ConfigValueException $exception) {
        watchdog_exception('yaml_content', $exception);
      }
    }

    return $entity;
  }

  /**
   * Populate field content into the provided field.
   *
   * @param object $field
   *   The entity field object.
   * @param array $field_data
   *   The field data.
   *
   * @todo Handle field data types more dynamically with typed data.
   */
  public function populateField($field, array &$field_data) {
    // Get the field cardinality to determine whether or not a value should be
    // 'set' or 'appended' to.
    $cardinality = $field->getFieldDefinition()
      ->getFieldStorageDefinition()
      ->getCardinality();

    // Gets the count of the field data array.
    $field_data_count = count($field_data);

    // If the cardinality is 0, throw an exception.
    if (!$cardinality) {
      throw new \InvalidArgumentException("'{$field->getName()}' cannot hold any values.");
    }

    // If the number of field content is greater than allowed, throw exception.
    if ($cardinality > 0 && $field_data_count > $cardinality) {
      throw new \InvalidArgumentException("'{$field->getname()}' cannot hold more than $cardinality values. $field_data_count values were parsed from the YAML file.");
    }

    // If we're updating content in-place, empty the field before population.
    if ($this->existenceCheck() && !$field->isEmpty()) {
      // Trigger delete callbacks on each field item.
      $field->delete();

      // Special handling for non-reusable entity reference values.
      if ($field instanceof EntityReferenceFieldItemList) {
        // Test if this is a paragraph field.
        $target_type = $field->getFieldDefinition()->getSetting('target_type');
        if ($target_type == 'paragraph') {
          /** @var \Drupal\Core\Entity\EntityInterface[] $entities */
          $entities = $field->referencedEntities();
          foreach ($entities as $entity) {
            $entity->delete();
          }
        }
      }

      // Empty out the field's list of items.
      $field->setValue([]);
    }

    // Iterate over each field data value and process it.
    foreach ($field_data as &$item_data) {
      // Preprocess the field data.
      $this->preprocessFieldData($field, $item_data);

      // Check if the field is a reference field. If so, build the entity ref.
      $is_reference = isset($item_data['entity']);
      if ($is_reference) {
        // Build the reference entity.
        $field_item = $this->buildEntity($item_data['entity'], $item_data);
      }
      else {
        $field_item = $item_data;
      }

      // If the cardinality is set to 1, set the field value directly.
      if ($cardinality == 1) {
        $field->setValue($field_item);

        // @todo Warn if additional item data is available for population.
        break;
      }
      else {
        // Otherwise, append the item to the multi-value field.
        $field->appendItem($field_item);
      }
    }
  }

  /**
   * Run any designated preprocessors on the provided field data.
   *
   * Preprocessors are expected to be provided in the following format:
   *
   * ```yaml
   *   '#process':
   *     callback: '<callback string>'
   *     args:
   *       - <callback argument 1>
   *       - <callback argument 2>
   *       - <...>
   * ```
   *
   * The callback function receives the following arguments:
   *
   *   - `$field`
   *   - `$field_data`
   *   - <callback argument 1>
   *   - <callback argument 2>
   *   - <...>
   *
   * The `$field_data` array is passed by reference and may be modified directly
   * by the callback implementation.
   *
   * @param object $field
   *   The entity field object.
   * @param array|string $field_data
   *   The field data.
   */
  protected function preprocessFieldData($field, &$field_data) {
    // Break here if the field data is not an array since there can be no
    // processing instructions included.
    if (!is_array($field_data)) {
      return;
    }

    // Check for a callback processor defined at the value level.
    if (isset($field_data['#process']) && isset($field_data['#process']['callback'])) {
      $callback_type = $field_data['#process']['callback'];
      $process_method = $callback_type . 'EntityLoad';
      if (isset($field_data['#process']['dependency'])) {
        $dependency = $field_data['#process']['dependency'];
        // @todo Implement ContainerInjectionInterface to statically instantiate a new loader.
        $process_dependency = new ContentLoader($this->entityTypeManager, $this->entityFieldManager, $this->moduleHandler, $this->dispatcher);
        $process_dependency->setContentPath($this->path);
        $process_dependency->loadContent($dependency, $this->existenceCheck());
      }
      // Check to see if this class has a method in the format of
      // '{fieldType}EntityLoad'.
      if (method_exists($this, $process_method)) {
        // Append callback arguments to field object and value data.
        $args = array_merge([$field, &$field_data], isset($field_data['#process']['args']) ? $field_data['#process']['args'] : []);
        // Pass in the arguments and call the method.
        call_user_func_array([$this, $process_method], $args);
      }
      // If the method does not exist, throw an exception.
      else {
        throw new ConfigValueException('Unknown type specified: ' . $callback_type);
      }
    }
  }

  /**
   * Processor function for querying and loading a referenced entity.
   *
   * @param object $field
   *   The entity field object.
   * @param array $field_data
   *   The field data.
   * @param string $entity_type
   *   The entity type.
   * @param array $filter_params
   *   The filters for the query conditions.
   *
   * @return array|int
   *   The entity id.
   *
   * @throws \Drupal\Core\TypedData\Exception\MissingDataException
   *   Error for missing data.
   *
   * @see ContentLoader::preprocessFieldData()
   */
  protected function referenceEntityLoad($field, array &$field_data, $entity_type, array $filter_params) {
    // Use query factory to create a query object for the node of entity_type.
    $query = \Drupal::entityQuery($entity_type);

    // Apply filter parameters.
    foreach ($filter_params as $property => $value) {
      $query->condition($property, $value);
    }

    $entity_ids = $query->execute();

    if (empty($entity_ids)) {
      $entity = $this->entityTypeManager->getStorage($entity_type)->create($filter_params);
      $entity_ids = [$entity->id()];
    }

    if (empty($entity_ids)) {
      // Build parameter output description for error message.
      $error_params = [
        '[',
        '  "entity_type" => ' . $entity_type . ',',
      ];
      foreach ($filter_params as $key => $value) {
        $error_params[] = sprintf("  '%s' => '%s',", $key, $value);
      }
      $error_params[] = ']';
      $param_output = implode("\n", $error_params);

      throw new MissingDataException(__CLASS__ . ': Unable to find referenced content: ' . $param_output);
    }

    // Use the first match for our value.
    $field_data['target_id'] = array_shift($entity_ids);

    // Remove process data to avoid issues when setting the value.
    unset($field_data['#process']);

    return $entity_ids;
  }

  /**
   * Processor function for processing and loading a file attachment.
   *
   * @param object $field
   *   The entity field object.
   * @param array $field_data
   *   The field data.
   * @param string $entity_type
   *   The entity type.
   * @param array $filter_params
   *   The filters for the query conditions.
   *
   * @return array|int
   *   The entity id.
   *
   * @throws \Drupal\Core\TypedData\Exception\MissingDataException
   *   Error for missing data.
   *
   * @see ContentLoader::preprocessFieldData()
   */
  protected function fileEntityLoad($field, array &$field_data, $entity_type, array $filter_params) {
    $filename = $filter_params['filename'];
    $directory = '/data_files/';
    // If the entity type is an image, look in to the /images directory.
    if ($entity_type == 'image') {
      $directory = '/images/';
    }
    $output = file_get_contents($this->path . $directory . $filename);
    if ($output !== FALSE) {
      // Save the file data. Do not overwrite files if they already exist.
      $file = file_save_data($output, 'public://' . $filename, FILE_EXISTS_RENAME);
      // Use the newly created file id as the value.
      $field_data['target_id'] = $file->id();

      // Remove process data to avoid issues when setting the value.
      unset($field_data['#process']);

      return $file->id();
    }
    else {
      // Build parameter output description for error message.
      $error_params = [
        '[',
        '  "entity_type" => ' . $entity_type . ',',
      ];
      foreach ($filter_params as $key => $value) {
        $error_params[] = sprintf("  '%s' => '%s',", $key, $value);
      }
      $error_params[] = ']';
      $param_output = implode("\n", $error_params);

      throw new MissingDataException(__CLASS__ . ': Unable to process file content: ' . $param_output);
    }
  }

  /**
   * Query if a target entity already exists and should be updated.
   *
   * @param string $entity_type
   *   The type of entity being imported.
   * @param array $content_data
   *   The import content structure representing the entity being searched for.
   *
   * @return \Drupal\Core\Entity\EntityInterface|false
   *   Return a matching entity if one is found, or FALSE otherwise.
   *
   * @todo Potentially move this into a separate helper class.
   */
  public function entityExists($entity_type, array $content_data) {
    // Some entities require special handling to determine if it exists.
    switch ($entity_type) {
      // Always create new paragraphs since they're not reusable.
      // @todo Should new revisions be incorporated here?
      case 'paragraph':
        break;

      case 'media':
        // @todo Add special handling to check file name or path.
        break;

      default:
        // Load entity type handler.
        $entity_handler = $this->entityTypeManager->getStorage($entity_type);

        // @todo Load this through dependency injection instead.
        $query = \Drupal::entityQuery($entity_type);
        foreach ($content_data as $key => $value) {
          if ($key != 'entity' && !is_array($value)) {
            $query->condition($key, $value);
          }
        }
        $entity_ids = $query->execute();

        if ($entity_ids) {
          $entity_id = array_shift($entity_ids);
          $entity = $entity_handler->load($entity_id);
        }
    }

    return isset($entity) ? $entity : FALSE;
  }

}
