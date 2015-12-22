<?php

/**
 * @file
 * Contains \Drupal\demo\Entity\Demo.
 */

namespace Drupal\demo\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;
use Drupal\demo\DemoInterface;

/**
 * Defines the Demo entity.
 *
 * @ConfigEntityType(
 *   id = "demo",
 *   label = @Translation("Demo"),
 *   fieldable = FALSE,
 *   handlers = {
 *     "list_builder" = "Drupal\demo\DemoListBuilder",
 *     "form" = {
 *       "add" = "Drupal\demo\Form\DemoForm",
 *       "edit" = "Drupal\demo\Form\DemoForm",
 *       "delete" = "Drupal\demo\Form\DemoDeleteForm"
 *     }
 *   },
 *   config_prefix = "demo",
 *   admin_permission = "administer site configuration",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "name"
 *   },
 *   links = {
 *     "edit-form" = "/admin/structure/demos/{demo}",
 *     "delete-form" = "/admin/structure/demos/{demo}/delete"
 *   }
 * )
 */
class Demo extends ConfigEntityBase implements DemoInterface {

  /**
   * The ID of the demo.
   *
   * @var string
   */
  public $id;

  /**
   * The demo name.
   *
   * @var string
   */
  public $name;

  /**
   * The demo sex.
   *
   * @var string
   */
  public $sex;

}
