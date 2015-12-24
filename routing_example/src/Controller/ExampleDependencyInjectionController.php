<?php

/**
 * @file
 * Contains \Drupal\routing_example\Controller\ExampleDependencyInjectionController.
 */

namespace Drupal\routing_example\Controller;

use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Drupal\Core\Database\Connection;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Class ExampleDependencyInjectionController.
 *
 * @package Drupal\routing_example\Controller
 */
class ExampleDependencyInjectionController implements  ContainerInjectionInterface {

  /**
   * The database connection.
   *
   * @var \Drupal\Core\Database\Connection;
   */
  protected $database;

  /**
   * Constructs a \Drupal\routing_example\Controller\ExampleDependencyInjectionController object.
   *
   * @param \Drupal\Core\Database\Connection $database
   *   The database connection.
   */
  public function __construct(Connection $database) {
    $this->database = $database;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static($container->get('database'));
  }

  /**
   * Displays a list of nodes.
   */
  public function index() {
    // query the database
    $result = $this->database->query('SELECT * from {node} WHERE nid = 1')->fetchAll();

    return [
      '#type' => 'markup',
      '#markup' => json_encode($result),
    ];
  }

}
