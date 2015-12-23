<?php

/**
 * @file
 * Contains \Drupal\controller_example\Tests\DefaultController.
 */

namespace Drupal\controller_example\Tests;

use Drupal\simpletest\WebTestBase;

/**
 * Provides automated tests for the controller_example module.
 */
class DefaultControllerTest extends WebTestBase {
  /**
   * {@inheritdoc}
   */
  public static function getInfo() {
    return array(
      'name' => "controller_example DefaultController's controller functionality",
      'description' => 'Test Unit for module controller_example and controller DefaultController.',
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
   * Tests controller_example functionality.
   */
  public function testDefaultController() {
    // Check that the basic functions of module controller_example.
    $this->assertEquals(TRUE, TRUE, 'Test Unit Generated via App Console.');
  }

}
