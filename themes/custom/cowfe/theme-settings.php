<?php
/**
 * Created by PhpStorm.
 * User: dexter
 */

// custom theme settings
function cowfe_form_system_theme_settings_alter(&$form, \Drupal\Core\Form\FormStateInterface &$form_state, $form_id = NULL ) {

  if( isset($form_id) ) {
    return;
  }

  $regions = system_region_list('cowfe', REGIONS_VISIBLE);

  //@TODO create dinamic config class

  $form['theme_class'] = array(
    '#type' => 'fieldset',
    '#title' => t('Theme class settings'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
    '#weight' => -100,
  );

  $form['theme_class']['class_content'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Content class:'),
    '#default_value' => theme_get_setting('class_content'),
    '#description'   => t("Add custom class to content."),
  );

  if( isset( $regions['sidebar_first'] ) ) {
    $form['theme_class']['class_sidebar_first'] = array(
      '#type'          => 'textfield',
      '#title'         => t('Sidebar first class:'),
      '#default_value' => theme_get_setting('class_sidebar_first'),
      '#description'   => t("Add custom class to sidebar first."),
    );
  }

  if( isset( $regions['sidebar_second'] ) ) {
    $form['theme_class']['class_sidebar_second'] = array(
      '#type'          => 'textfield',
      '#title'         => t('Sidebar second class:'),
      '#default_value' => theme_get_setting('class_sidebar_second'),
      '#description'   => t("Add custom class to sidebar second."),
    );
  }


}