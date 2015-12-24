<?php
/**
 * @file
 * Contains \Drupal\routing_example\Routing\ExampleRoutes.
 */

namespace Drupal\routing_example\Routing;

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

/**
 * Defines dynamic routes.
 */
class ExampleRoutes {

  /**
   * {@inheritdoc}
   */
  public function routes() {
    $route_collection = new RouteCollection();

    // Dynamically routing.
    $route = new Route(
      'routing_example/add/dynamic_route',
      array(
        '_controller' => '\Drupal\routing_example\Controller\ExampleDependencyInjectionController::index',
        '_title' => 'Hello'
      ),
      // Route requirements:
      array(
        '_permission'  => 'access content',
      )
    );

    // Add the route under the name 'example.content'.
    $route_collection->add('routing_example.add.dynamic_route', $route);
    return $route_collection;
  }

}
