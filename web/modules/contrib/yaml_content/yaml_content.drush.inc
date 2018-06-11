<?php

/**
 * @file
 * Drush commands for the yaml_content module.
 *
 * @todo Re-implement as universal command compatible with Drupal console.
 */

use Drupal\yaml_content\ContentLoader\ContentLoaderInterface;

/**
 * Implements hook_drush_command().
 */
function yaml_content_drush_command() {
  $items = [];

  $items['yaml-content-import'] = [
    'description' => dt('Import yaml content.'),
    'aliases' => ['yci'],
    'arguments' => [
      'directory' => dt('The directory path where content files may be found.'),
      'file' => dt('(Optional) The name of a content file to be imported.'),
    ],
    'options' => [
      'create-new' => dt('Set this to create content even if it is already in the system.'),
    ],
  ];

  $items['yaml-content-import-module'] = [
    'description' => dt('Import yaml content from a module.'),
    'aliases' => ['ycim'],
    'arguments' => [
      'module' => dt('The machine name of a module to be searched for content.'),
      'file' => dt('(Optional) The name of a content file to be imported.'),
    ],
    'options' => [
      'create-new' => dt('Set this to create content even if it is already in the system.'),
    ],
  ];

  $items['yaml-content-import-profile'] = [
    'description' => dt('Import yaml content from a profile.'),
    'aliases' => ['ycip'],
    'arguments' => [
      'profile' => dt('The machine name of a profile to be searched for content.'),
      'file' => dt('(Optional) The name of a content file to be imported.'),
    ],
    'options' => [
      'create-new' => dt('Set this to create content even if it is already in the system.'),
    ],
  ];

  return $items;
}

/**
 * Import specified yaml content file(s).
 *
 * @param string $directory
 *   The directory path containing the yaml content file(s) to be imported.
 * @param string $file
 *   (Optional) The name of a file to be imported or an array of files to
 *   import. If this argument is not provided then all files in the directory
 *   matching `*.content.yml` are queued for import.
 */
function drush_yaml_content_import($directory, $file = NULL) {
  $loader = \Drupal::service('yaml_content.content_loader');
  $loader->setContentPath($directory);

  // Identify files for import.
  $mask = '/' . (isset($file) ? $file : '.*') . '\.content\.yml/';
  $files = drush_yaml_content_discover_files($directory . '/content', $mask);

  _drush_yaml_content_import_files($loader, $files);
}

/**
 * Import specified yaml content file(s) from a designated module.
 *
 * @param string $module
 *   The module to look for content files within.
 *
 *   This command assumes files will be contained within a `content/` directory
 *   at the top of the module's main directory. Any files within matching the
 *   pattern `*.content.yml` will then be imported.
 * @param string|string[] $file
 *   (Optional) The name of a file to be imported or an array of files to
 *   import. If this argument is not provided then all files in the directory
 *   matching `*.content.yml` are queued for import.
 */
function drush_yaml_content_import_module($module, $file = NULL) {
  $path = drupal_get_path('module', $module);

  $loader = \Drupal::service('yaml_content.content_loader');
  $loader->setContentPath($path);

  // Identify files for import.
  $mask = '/' . (isset($file) ? $file : '.*') . '\.content\.yml/';
  $files = drush_yaml_content_discover_files($path . '/content', $mask);

  _drush_yaml_content_import_files($loader, $files);
}

/**
 * Import specified yaml content file(s) from a designated profile.
 *
 * @param string $profile
 *   The profile to look for content files within.
 *
 *   This command assumes files will be contained within a `content/` directory
 *   at the top of the module's main directory. Any files within matching the
 *   pattern `*.content.yml` will then be imported.
 * @param string|string[] $file
 *   (Optional) The name of a file to be imported or an array of files to
 *   import. If this argument is not provided then all files in the directory
 *   matching `*.content.yml` are queued for import.
 */
function drush_yaml_content_import_profile($profile, $file = NULL) {
  $path = drupal_get_path('profile', $profile);

  $loader = \Drupal::service('yaml_content.content_loader');
  $loader->setContentPath($path);

  // Identify files for import.
  $mask = '/' . (isset($file) ? $file : '.*') . '\.content\.yml/';
  $files = drush_yaml_content_discover_files($path . '/content', $mask);

  _drush_yaml_content_import_files($loader, $files);
}

/**
 * Scan and discover content files for import.
 *
 * The scanner assumes all content files will follow the naming convention of
 * '*.content.yml'.
 *
 * @param string $path
 *   The directory path to be scanned for content files.
 * @param string $mask
 *   (Optional) A file name mask to limit matches in scanned files.
 *
 * @return array
 *   An associative array of objects keyed by filename with the following
 *   properties as returned by file_scan_directory():
 *
 *   - 'uri'
 *   - 'filename'
 *   - 'name'
 *
 * @see file_scan_directory()
 */
function drush_yaml_content_discover_files($path, $mask = '/.*\.content\.yml/') {
  // Identify files for import.
  $files = file_scan_directory($path, $mask, [
    'key' => 'filename',
    'recurse' => FALSE,
  ]);

  return $files;
}

/**
 * Import content files using a Content Loader.
 *
 * @param \Drupal\yaml_content\ContentLoader\ContentLoaderInterface $loader
 *   The content loader to use to import the referenced files.
 * @param array $files
 *   An array of file descriptors as loaded by file_scan_directory() keyed by
 *   filename. Each of the listed files will be imported.
 */
function _drush_yaml_content_import_files(ContentLoaderInterface $loader, array $files) {
  // @todo Verify files before loading for import.
  foreach ($files as $filename => $file) {
    drush_print(dt('Importing content: @file', [
      '@file' => $filename,
    ]));
    $loaded = $loader->loadContent($filename);
    drush_print(dt('Imported @count items', [
      '@count' => count($loaded),
    ]));
  }
}
