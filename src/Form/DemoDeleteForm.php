<?php

/**
 * @file
 * Contains \Drupal\demo\Form\demoDeleteForm.
 */

namespace Drupal\demo\Form;

use Drupal\Core\Entity\EntityConfirmFormBase;
use Drupal\Core\Url;

/**
 * Form that handles the removal of demo entities.
 */
class demoDeleteForm extends EntityConfirmFormBase {

  /**
   * {@inheritdoc}
   */
  public function getQuestion() {
    return $this->t('Are you sure you want to delete this demo: @name?', array('@name' => $this->entity->name));
  }

  /**
   * {@inheritdoc}
   */
  public function getCancelRoute() {
    return new Url('demo.list');
  }

  /**
   * {@inheritdoc}
   */
  public function getConfirmText() {
    return $this->t('Delete');
  }

  /**
   * {@inheritdoc}
   */
  public function submit(array $form, array &$form_state) {
    // Delete and set message
    $this->entity->delete();
    drupal_set_message($this->t('The demo @name has been deleted.', array('@name' => $this->entity->name)));
    $form_state['redirect_route'] = $this->getCancelRoute();
  }
}
