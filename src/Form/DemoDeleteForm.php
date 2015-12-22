<?php

/**
 * @file
 * Contains \Drupal\demo\Form\DemoDeleteForm.
 */

namespace Drupal\demo\Form;

use Drupal\Core\Entity\EntityConfirmFormBase;
use Drupal\Core\Url;
use Drupal\Core\Form\FormStateInterface;


/**
 * Form that handles the removal of demo entities.
 */
class DemoDeleteForm extends EntityConfirmFormBase {

  /**
   * {@inheritdoc}
   */
  public function getQuestion() {
    return $this->t('Are you sure you want to delete this demo: @name?', array('@name' => $this->entity->name));
  }

  /**
   * {@inheritdoc}
   */
  public function getCancelUrl() {
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
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Delete and set message
    $this->entity->delete();
    drupal_set_message($this->t('The demo @name has been deleted.', array('@name' => $this->entity->name)));

    $form_state->setRedirectUrl($this->getCancelUrl());
  }
}
