<?php

/**
 * @file
 * Contains \Drupal\day19\Plugin\Block\MyBlock.
 */

namespace Drupal\day19\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'MyBlock' block.
 *
 * @Block(
 *  id = "my_block",
 *  admin_label = @Translation("Day19 Block"),
 * )
 */
class MyBlock extends BlockBase {


  /**
   * {@inheritdoc}
   */
  public function build() {

    $some_array = array(
      1 => array('a'=>'mango', 'b'=>'guava', 'c'=>'jack fruit'),
      2 => array('d'=>'banana', 'e'=>'orange', 'f'=>'pine apple'),
      3 => array('g'=>'water melon', 'h'=>'brinjal', 'i'=>'potato'),
    );

    return array(
      '#theme' => 'day19_twig_test',
      '#title' => $this->t('Day19 Block'),
      '#var1' => $this->t('Test Description'),
      '#var2' => $some_array,
      '#classes' => [ 'aaa_1', 'bbb-2' ],
      '#myclasscount' => 11,
    );
  }

}
