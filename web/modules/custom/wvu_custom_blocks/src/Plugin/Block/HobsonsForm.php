<?php

namespace Drupal\wvu_custom_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'HobsonsForm' block.
 *
 * @Block(
 *  id = "hobsons_form",
 *  admin_label = @Translation("Hobsons form"),
 * )
 */
class HobsonsForm extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['hobsons_form']['#markup'] = 'Implement HobsonsForm.';

    return $build;
  }

}
