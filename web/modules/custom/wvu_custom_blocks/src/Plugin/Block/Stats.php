<?php

namespace Drupal\wvu_custom_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Stats' block.
 *
 * @Block(
 *  id = "stats",
 *  admin_label = @Translation("Stats"),
 * )
 */
class Stats extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['stats']['#markup'] = 'Implement Stats.';

    return $build;
  }

}
