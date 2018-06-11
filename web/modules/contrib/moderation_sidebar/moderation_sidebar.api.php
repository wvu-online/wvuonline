<?php

/**
 * @file
 * Hooks related to moderation sidebar module.
 */

/**
 * @addtogroup hooks
 * @{
 */

/**
 * Alter the information provided by \Drupal\moderation_sidebar\Controller\ModerationSidebarController::sideBar()
 *
 * @param array $build
 *   The render array for the sidebar.
 * @param \Drupal\Core\Entity\EntityInterface $entity
 *   The default or latest revision of an entity being moderated.
 */
function hook_moderation_sidebar_alter(array &$build, \Drupal\Core\Entity\EntityInterface $entity) {
  if ($entity->getEntityTypeId() === 'my_great_type') {
    $build['fun'] = [
      '#markup' => '<a href="#" class="button">This does nothing, suckers!</a>',
    ];
  }
}
