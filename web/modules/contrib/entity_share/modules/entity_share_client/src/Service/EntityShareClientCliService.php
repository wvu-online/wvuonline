<?php

namespace Drupal\entity_share_client\Service;

use Drupal\Component\Serialization\Json;
use Drupal\Core\StringTranslation\TranslationInterface;
use Drupal\entity_share_client\Entity\Remote;

/**
 * Class EntityShareClientCliService.
 *
 * @package Drupal\entity_share_client
 *
 * @internal This service is not an api and may change at any time.
 */
class EntityShareClientCliService {

  /**
   * Drupal\Core\StringTranslation\TranslationManager definition.
   *
   * @var \Drupal\Core\StringTranslation\TranslationManager
   */
  protected $stringTranslation;

  /**
   * The remote manager.
   *
   * @var \Drupal\entity_share_client\Service\RemoteManagerInterface
   */
  protected $remoteManager;

  /**
   * The jsonapi helper.
   *
   * @var \Drupal\entity_share_client\Service\JsonapiHelperInterface
   */
  protected $jsonapiHelper;

  /**
   * List of messages.
   *
   * @var array
   */
  protected $errors;

  /**
   * Constructor.
   *
   * @param \Drupal\Core\StringTranslation\TranslationInterface $string_translation
   *   The string translation service.
   * @param \Drupal\entity_share_client\Service\RemoteManagerInterface $remote_manager
   *   The remote manager service.
   * @param \Drupal\entity_share_client\Service\JsonapiHelperInterface $jsonapi_helper
   *   The jsonapi helper service.
   */
  public function __construct(
    TranslationInterface $string_translation,
    RemoteManagerInterface $remote_manager,
    JsonapiHelperInterface $jsonapi_helper
  ) {
    $this->stringTranslation = $string_translation;
    $this->remoteManager = $remote_manager;
    $this->jsonapiHelper = $jsonapi_helper;
    $this->errors = [];
  }

  /**
   * Handle the pull interaction.
   *
   * @param string $remote_id
   *   The remote website id to import from.
   * @param string $channel_id
   *   The remote channel id to import.
   * @param \Symfony\Component\Console\Style\StyleInterface|\ConfigSplitDrush8Io $io
   *   The $io interface of the cli tool calling.
   * @param callable $t
   *   The translation function akin to t().
   */
  public function ioPull($remote_id, $channel_id, $io, callable $t) {
    $remotes = Remote::loadMultiple();

    // Check that the remote website exists.
    if (!isset($remotes[$remote_id])) {
      $io->error($t('There is no remote website configured with the id: @remote_id.', ['@remote_id' => $remote_id]));
      return;
    }

    $remote = $remotes[$remote_id];
    $channel_infos = $this->remoteManager->getChannelsInfos($remote);

    // Check that the channel exists.
    if (!isset($channel_infos[$channel_id])) {
      $io->error($t('There is no channel configured or accessible with the id: @channel_id.', ['@channel_id' => $channel_id]));
      return;
    }

    // Import channel content and loop on pagination.
    $this->jsonapiHelper->setRemote($remote);
    $http_client = $this->remoteManager->prepareJsonApiClient($remote);
    $channel_url = $channel_infos[$channel_id]['url'];
    while ($channel_url) {
      $io->text($t('Beginning to import content from URL: @url', ['@url' => $channel_url]));

      $json_response = $http_client->get($channel_url)
        ->getBody()
        ->getContents();
      $json = Json::decode($json_response);
      $imported_entities = $this->jsonapiHelper->importEntityListData($this->jsonapiHelper->prepareData($json['data']));

      $io->text($t('@number entities have been imported.', ['@number' => count($imported_entities)]));

      if (isset($json['links']['next'])) {
        $channel_url = $json['links']['next'];
      }
      else {
        $channel_url = FALSE;
      }
    }

    $io->success($t('Channel successfully pulled.'));
  }

  /**
   * Returns error messages created while running the import.
   *
   * @return array
   *   List of messages.
   */
  public function getErrors() {
    return $this->errors;
  }

}
