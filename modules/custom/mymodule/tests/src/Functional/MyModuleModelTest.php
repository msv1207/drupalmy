<?php

namespace Drupal\Tests\mymodule\Functional;

use Drupal\Tests\BrowserTestBase;
use Drupal\Core\Database\Database;
use Drupal\mymodule\Model\MyModuleModel;

/**
 * @group mymodule
 */
class MyModuleModelTest extends BrowserTestBase {

  public function testGet() {
    $items = (new MyModuleModel( $this->getDatabaseConnection()))->get();
    $this->assertTrue( is_array( $items ) );
    $this->assertNotEmpty( $items );
  }
}
