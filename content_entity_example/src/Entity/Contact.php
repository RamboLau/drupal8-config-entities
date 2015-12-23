<?php

/**
 * @file
 * Contains \Drupal\content_entity_example\Entity\Contact.
 */

namespace Drupal\content_entity_example\Entity;

use Drupal\Core\Config\Entity\ConfigEntityBundleBase;
use Drupal\content_entity_example\ContactInterface;

use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\Core\Field\BaseFieldDefinition;
use Drupal\Core\Entity\ContentEntityBase;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\content_entity_example\ContactInterface;
use Drupal\user\UserInterface;


/**
 * Defines the Contact entity.
 *
 * @ConfigEntityType(
 *   id = "contact",
 *   label = @Translation("Contact"),
 *   handlers = {
 *     "list_builder" = "Drupal\content_entity_example\ContactListBuilder",
 *     "form" = {
 *       "add" = "Drupal\content_entity_example\Form\ContactForm",
 *       "edit" = "Drupal\content_entity_example\Form\ContactForm",
 *       "delete" = "Drupal\content_entity_example\Form\ContactDeleteForm"
 *     }
 *   },
 *   config_prefix = "contact",
 *   admin_permission = "administer site configuration",
 *   entity_keys = {
 *     "id" = "id",
 *     "label" = "label",
 *     "uuid" = "uuid"
 *   },
 *   links = {
 *     "canonical" = "/admin/structure/contact/{contact}",
 *     "edit-form" = "/admin/structure/contact/{contact}/edit",
 *     "delete-form" = "/admin/structure/contact/{contact}/delete",
 *     "collection" = "/admin/structure/visibility_group"
 *   }
 * )
 */
class Contact extends ConfigEntityBundleBase implements ContactInterface {
  /**
   * The Contact ID.
   *
   * @var string
   */
  protected $id;

  /**
   * The Contact label.
   *
   * @var string
   */
  protected $label;

}
