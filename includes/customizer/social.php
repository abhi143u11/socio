<?php

function so_social_customizer($wp_customize) {
    //For Facebook


    $wp_customize->add_section('so_social_setion', [
        'title' => __('Socio Settings', 'socio'),
        'priority' => 30
    ]);
    $wp_customize->add_setting('so_facebook_handle', [
        'default' => ''
    ]);
    $wp_customize->add_control(new WP_Customize_Color_Control(
       $wp_customize, 'so_social_facebook_input', array(
        'label' => __('Facebook url', 'socio'),
        'section' => 'so_social_setion',
        'settings' => 'so_facebook_handle',
        'priority' => 2,
        'type' => 'text'
            )
    ));

    //For Twitter
    $wp_customize->add_setting('so_twitter_handle', [
        'default' => ''
    ]);



    $wp_customize->add_control(new WP_Customize_Color_Control(
       $wp_customize, 'so_social_twitter_input', array(
        'label' => __('Twitter url', 'socio'),
        'section' => 'so_social_setion',
        'settings' => 'so_twitter_handle',
        'priority' => 3,
        'type' => 'text'
            )
    ));


    //For Instagram
    $wp_customize->add_setting('so_instagram_handle', [
        'default' => ''
    ]);


    $wp_customize->add_control(new WP_Customize_Color_Control(
       $wp_customize, 'so_social_instagram_input', array(
        'label' => __('Instagram url', 'socio'),
        'section' => 'so_social_setion',
        'settings' => 'so_instagram_handle',
        'priority' => 4,
        'type' => 'text'
            )
    ));

    //For Linkedin
    $wp_customize->add_setting('so_linkedin_handle', [
        'default' => ''
    ]);


    $wp_customize->add_control(new WP_Customize_Color_Control(
       $wp_customize, 'so_social_linkedin_input', array(
        'label' => __('Linkedin url', 'socio'),
        'section' => 'so_social_setion',
        'settings' => 'so_linkedin_handle',
        'priority' => 5,
        'type' => 'text'
            )
    ));

    //For Email
    $wp_customize->add_setting('so_email_handle', [
        'default' => ''
    ]);


    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize, 'so_social_email_input', array(
        'label' => __('Email', 'socio'),
        'section' => 'so_social_setion',
        'settings' => 'so_email_handle',
        'priority' => 6,
        'type' => 'email'
            )
    ));

    //For Whatsapp
    $wp_customize->add_setting('so_whatsapp_handle', [
        'default' => ''
    ]);


    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize, 'so_social_whatsapp_input', array(
        'label' => __('Whatsapp No With Country Code', 'socio'),
        'section' => 'so_social_setion',
        'settings' => 'so_whatsapp_handle',
        'priority' => 7,
        'type' => 'number'
            )
    ));
}
