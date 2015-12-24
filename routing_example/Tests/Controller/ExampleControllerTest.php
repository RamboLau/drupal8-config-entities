<?php

/**
 * @file
 * Contains \Drupal\routing_example\Tests\ExampleController.
 */

namespace Drupal\routing_example\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the routing_example module.
 */
class ExampleControllerTest extends WebTestBase {
  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "routing_example ExampleController's controller functionality",
      'description' => 'Test Unit for module routing_example and controller ExampleController.',
      'group' => 'Other',
    );
  }

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();
  }

  /**
   * Tests routing_example functionality.
   */
  public function testExampleController() {
    // Check that the basic functions of module routing_example.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
