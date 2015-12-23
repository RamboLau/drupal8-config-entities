<?php

/**
 * @file
 * Contains \Drupal\controller_example\Controller\DefaultController.
 */

namespace Drupal\controller_example\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class DefaultController.
 *
 * @package Drupal\controller_example\Controller
 */
class DefaultController extends ControllerBase {
  /**
   * Index.
   *
   * @return string
   *   Return Hello string.
   */
  public function index($name) {
    return [
        '#type' => 'markup',
        '#markup' => $this->t("Implement method: index with parameter(s): $name")
    ];
  }

  /**
   * Default_page.
   *
   * @return string
   *   Return Hello string.
   */
  public function default_page($name) {
    return [
        '#type' => 'markup',
        '#markup' => $this->t("Implement method: default_page with parameter(s): $name")
    ];
  }

}
