<?php

/**
 * @file
 * Contains \Drupal\demo\Entity\DemoEntity.
 */

namespace Drupal\demo\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBase;
use Drupal\Core\Config\Entity\ConfigEntityInterface;
use Drupal\demo\DemoInterface;

/**
 * Defines a demo configuration entity class.
 *
 * @ConfigEntityType(
 *   id = "demo",
 *   label = @Translation("Demo"),
 *   fieldable = FALSE,
 *   controllers = {
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
 *     "edit-form" = "demo.edit",
 *     "delete-form" = "demo.delete"
 *   }
 * )
 */
class DemoEntity extends ConfigEntityBase implements DemoInterface {

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
