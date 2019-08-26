<?php

function so_header_background_customizer($wp_customize) {
    //For Header Background


  
    $wp_customize->add_setting('so_background_handle', [
        'default' => ''
    ]);
    $wp_customize->add_control(new WP_Customize_Image_Control(
       $wp_customize, 'so_header_background_input', array(
        'label' => __('Header Image', 'socio'),
        'section' => 'so_social_setion',
        'settings' => 'so_background_handle',
        'priority' => 1,
        'type' => 'image'
            )
    ));
}
