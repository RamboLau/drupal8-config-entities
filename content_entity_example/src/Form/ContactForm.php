<?php

/**
 * @file
 * Contains \Drupal\content_entity_example\Form\ContactForm.
 */

namespace Drupal\content_entity_example\Form;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class ContactForm.
 *
 * @package Drupal\content_entity_example\Form
 */
class ContactForm extends EntityForm {
  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    $contact = $this->entity;
    $form['label'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#default_value' => $contact->label(),
      '#description' => $this->t("Label for the Contact."),
      '#required' => TRUE,
    );

    $form['id'] = array(
      '#type' => 'machine_name',
      '#default_value' => $contact->id(),
      '#machine_name' => array(
        'exists' => '\Drupal\content_entity_example\Entity\Contact::load',
      ),
      '#disabled' => !$contact->isNew(),
    );

    /* You will need additional form elements for your custom properties. */

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $contact = $this->entity;
    $status = $contact->save();

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Contact.', [
          '%label' => $contact->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Contact.', [
          '%label' => $contact->label(),
        ]));
    }
    $form_state->setRedirectUrl($contact->urlInfo('collection'));
  }

}
