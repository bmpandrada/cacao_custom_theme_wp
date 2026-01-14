<?php

function cacao_customizer($wp_customize)
{
  // Copyright Section
  $wp_customize->add_section('sec_cacao', array(
    'title' => 'Copyright Settings',
    'description' => 'Copyright section'
  ));
  // Copyright Settings
  $wp_customize->add_setting('set_cacao', array(
    'type' => 'theme_mod',
    'default' => '© 2024 Cacao Theme. All Rights Reserved.',
    'sanitize_callback' => 'sanitize_text_field'
  ));
  //Copyright Control
  $wp_customize->add_control('ctrl_cacao', array(
    'label' => 'Copyright Text',
    'section' => 'sec_cacao',
    'settings' => 'set_cacao',
    'type' => 'text'
  ));
}


add_action('customize_register', 'cacao_customizer');
