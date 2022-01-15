<?php

namespace Drupal\mymodule\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;

/**
 * Provides a 'TestModuleBlock' Block.
 *
 * @link https://www.drupal.org/docs/8/creating-custom-modules/create-a-custom-block
 *
 * @Block(
 *   id = "test_module_block",
 *   admin_label = @Translation("Test Module Block"),
 *   category = @Translation("Test Module Block"),
 * )
 */
class TestModuleBlock extends BlockBase implements BlockPluginInterface {

  /**
   * {@inheritdoc}
   */
  public function build() {

    return [
      '#theme' => 'test_module_block',
    ];
  }
}