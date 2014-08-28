<?php
/**
 * Implements hook_form_system_theme_settings_alter().
 *
 * @param $form
 *   Nested array of form elements that comprise the form.
 * @param $form_state
 *   A keyed array containing the current state of the form.
 */
function tnc_form_system_theme_settings_alter(&$form, &$form_state, $form_id = NULL)  {
  // Work-around for a core bug affecting admin themes. See issue #943212.
  if (isset($form_id)) {
    return;
  }

  // Create the form using Forms API: http://api.drupal.org/api/7
  //
  $form['tnc_headers_img'] = array(
    '#type'          => 'fieldset',
    '#title'         => t('Custom image headers'),
    '#collapsible'   => TRUE,
    '#collapsed'     => FALSE,
  );
  $form['tnc_headers_img']['tnc_cal_img'] = array(
    '#type'     => 'managed_file',
    '#title'    => t('Calendar header'),
    '#required' => FALSE,
    '#upload_location' => file_default_scheme() . '://theme/capcaleres/',
    '#default_value' => theme_get_setting('tnc_cal_img'), 
    '#upload_validators' => array(
      'file_validate_extensions' => array('gif png jpg jpeg'),
    ),
  );
  $form['tnc_headers_img']['tnc_tem_img'] = array(
    '#type'     => 'managed_file',
    '#title'    => t('Season header'),
    '#required' => FALSE,
    '#upload_location' => file_default_scheme() . '://theme/capcaleres/',
    '#default_value' => theme_get_setting('tnc_tem_img'), 
    '#upload_validators' => array(
      'file_validate_extensions' => array('gif png jpg jpeg'),
    ),
  );
 
 
  $form['tnc_titles'] = array(
    '#type'          => 'fieldset',
    '#title'         => t('Titles for custom pages'),
    '#collapsible'   => TRUE,
    '#collapsed'     => FALSE,
  );
  $form['tnc_titles']['tnc_tit_tem'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Title temporada'),
    '#default_value' => theme_get_setting('tnc_tit_tem'),
  );
  $form['tnc_titles']['tnc_tit_cal'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Title calendar'),
    '#default_value' => theme_get_setting('tnc_tit_cal'),
  );

  $form['tnc_frontlink_1'] = array(
    '#type'          => 'fieldset',
    '#title'         => t('Links for first front links row'),
    '#collapsible'   => TRUE,
    '#collapsed'     => FALSE,
  );
  $form['tnc_frontlink_1']['tnc_frontlink_1_enable'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Enable first links row on front page'),
    '#default_value' => theme_get_setting('tnc_frontlink_1_enable'),
    '#description'   => t(""),
  );
  for ($i = 0; $i < 4; $i++) {
    $form['tnc_frontlink_1']['tnc_t_frontlink_1_'.$i] = array(
      '#type'          => 'textfield',
      '#title'         => t('Link text '. $i .' for first link row'),
      '#default_value' => theme_get_setting('tnc_t_frontlink_1_'.$i),
    );
    $form['tnc_frontlink_1']['tnc_l_frontlink_1_'.$i] = array(
      '#type'          => 'textfield',
      '#title'         => t('Link link '. $i .' for first link row'),
      '#default_value' => theme_get_setting('tnc_l_frontlink_1_'.$i),
    );
  }

  $form['tnc_frontlink_2'] = array(
    '#type'          => 'fieldset',
    '#title'         => t('Links for first front links row'),
    '#collapsible'   => TRUE,
    '#collapsed'     => FALSE,
  );
  $form['tnc_frontlink_2']['tnc_frontlink_2_enable'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Enable second links row on front page'),
    '#default_value' => theme_get_setting('tnc_frontlink_2_enable'),
    '#description'   => t(""),
  );
  for ($i = 0; $i < 4; $i++) {
    $form['tnc_frontlink_2']['tnc_t_frontlink_2_'.$i] = array(
      '#type'          => 'textfield',
      '#title'         => t('Link text '. $i .' for first link row'),
      '#default_value' => theme_get_setting('tnc_t_frontlink_2_'.$i),
    );
    $form['tnc_frontlink_2']['tnc_l_frontlink_2_'.$i] = array(
      '#type'          => 'textfield',
      '#title'         => t('Link link '. $i .' for first link row'),
      '#default_value' => theme_get_setting('tnc_l_frontlink_2_'.$i),
    );
  }

  $form['tnc_xxss'] = array(
    '#type'          => 'fieldset',
    '#title'         => t('Social networks'),
    '#collapsible'   => TRUE,
    '#collapsed'     => FALSE,
  );
  $form['tnc_xxss']['tnc_xxss_fb'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Facebook'),
    '#default_value' => theme_get_setting('tnc_xxss_fb'),
    '#description'   => t("Enter url to link"),
  );
  $form['tnc_xxss']['tnc_xxss_inst'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Instagram'),
    '#default_value' => theme_get_setting('tnc_xxss_inst'),
    '#description'   => t("Enter url to link"),
  );
  $form['tnc_xxss']['tnc_xxss_twt'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Twitter'),
    '#default_value' => theme_get_setting('tnc_xxss_twt'),
    '#description'   => t("Enter url to link"),
  );
  $form['tnc_xxss']['tnc_xxss_you'] = array(
    '#type'          => 'textfield',
    '#title'         => t('Youtube'),
    '#default_value' => theme_get_setting('tnc_xxss_you'),
    '#description'   => t("Enter url to link"),
  );
  /** 4 links fixes del menu superior **/
  $form['tnc_toplinks'] = array(
    '#type'          => 'fieldset',
    '#title'         => 'Fixed links for top megamenu',
    '#collapsible'   => TRUE,
    '#collapsed'     => FALSE,
  );
  for ($i = 0; $i < 4; $i++) {
    $form['tnc_toplinks']['tnc_'.$i.'_text'] = array(
      '#type'          => 'textfield',
      '#title'         => 'Text to display for link '.$i,
      '#default_value' => theme_get_setting('tnc_'.$i.'_text'),
      '#description'   => t("Enter text to display"),
    );
    $form['tnc_toplinks']['tnc_'.$i.'_url'] = array(
      '#type'          => 'textfield',
      '#title'         => 'URL to link to for link '.$i,
      '#default_value' => theme_get_setting('tnc_'.$i.'_url'),
      '#description'   => t("Enter url to link"),
    );
  }

  // Remove some of the base theme's settings.
  /* -- Delete this line if you want to turn off this setting.
  unset($form['themedev']['zen_wireframes']); // We don't need to toggle wireframes on this site.
  // */

  // We are editing the $form in place, so we don't need to return anything.
}
