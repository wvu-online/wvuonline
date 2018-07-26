<?php

namespace Drupal\wvu_custom_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'WvuBlock' block.
 *
 * @Block(
 *  id = "wvu_block",
 *  admin_label = @Translation("Wvu block"),
 * )
 */
class WvuBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $build = [];
    $build['wvu_block']['#markup'] = 'Implement WvuBlock.';

    return $build;
  }

}
