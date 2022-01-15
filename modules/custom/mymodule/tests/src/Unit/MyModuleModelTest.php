<?php
namespace Drupal\Tests\mymodule\Unit;

use Drupal\Core\DependencyInjection\ContainerBuilder;

use Drupal\mymodule\Model\MyModuleModel;
use Drupal\Tests\UnitTestCase;

/**
 * Tests generation of mymodule.
 *
 *
 * Required PHPDoc metadata for test discoverability
 * @link https://www.drupal.org/docs/8/phpunit/phpunit-file-structure-namespace-and-required-metadata
 *
 * @group mymodule
 * @coversDefaultClass \Drupal\mymodule\Model\MyModuleModel
 */
class MyModuleModelTest extends UnitTestCase {


  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();

    $this->container = new ContainerBuilder();

    \Drupal::setContainer($this->container);

    $connection = $this->prophesize('Drupal\Core\Database\Connection');
    // @link https://www.drupal.org/docs/8/phpunit/using-prophecy

    $this->model = new \Drupal\mymodule\Model\MyModuleModel($connection->reveal());
  }

  public function testTest() {
    $result = $this->model->test( ['a','b']);
    $this->assertTrue( is_array( $result ) );
    $this->assertEquals( $result, [ 'b', 'a' ] );
  }
}
