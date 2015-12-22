<?php

/**
 * @file
 * Contains \Drupal\demo\Form\demoForm.
 */

namespace Drupal\demo\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityTypeInterface;
use Drupal\Core\Url;

/**
 * Class demoForm
 *
 * Form class for adding/editing demo config entities.
 */
class demoForm extends EntityForm {
  /**
   * {@inheritdoc}
   */
  public function form(array $form, array &$form_state) {
    $form = parent::form($form, $form_state);
    $demo = $this->entity;

    // Change page title for the edit operation
    if ($this->operation == 'edit') {
      $form['#title'] = $this->t('Edit demo: @name', array('@name' => $demo->name));
    }

    // The demo name.
    $form['name'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Name'),
      '#maxlength' => 255,
      '#default_value' => $demo->name,
      '#description' => $this->t("demo name."),
      '#required' => TRUE,
    );

    // The unique machine name of the demo.
    $form['id'] = array(
      '#type' => 'machine_name',
      '#maxlength' => EntityTypeInterface::BUNDLE_MAX_LENGTH,
      '#default_value' => $demo->id,
      '#disabled' => !$demo->isNew(),
      '#machine_name' => array(
        'source' => array('name'),
        'exists' => 'demo_load'
      ),
    );

    // The sex.
    $form['sex'] = array(
      '#type' => 'select',
      '#options' => array(
        'Man' => 'Man',
        'Woman' => 'Woman',
      ),
      '#title' => $this->t('Sex'),
      '#maxlength' => 255,
      '#default_value' => $demo->sex,
      '#description' => $this->t("sex"),
      '#required' => TRUE,
    );
    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, array &$form_state) {
    $demo = $this->entity;
    $status = $demo->save();

    if ($status) {
      // Setting the success message.
      drupal_set_message($this->t('Saved the demo: @label.', array(
        '@label' => $demo->name,
      )));
    }
    else {
      drupal_set_message($this->t('The @label demo was not saved.', array(
        '@label' => $demo->name,
      )));
    }

    $url = new Url('demo.list');
    $form_state['redirect'] = $url->toString();
  }
} 