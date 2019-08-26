<?php

function so_enqueue() {
    $uri = get_theme_file_uri();
    $ver = SO_DEV_MODE ? time() : false;

    //Register Stylesheets & Load Stylesheets
    wp_register_style('so_bootstrap', $uri . '/assets/css/bootstrap.min.css', [], $ver);
    wp_register_style('so_fontawesome', 'https://use.fontawesome.com/releases/v5.0.7/css/all.css');
    wp_register_style('so_swiper', $uri . '/assets/css/swiper.min.css', [], $ver);
    wp_register_style('so_main', $uri . '/assets/css/main.css', [], $ver);

    wp_enqueue_style('so_bootstrap');
    wp_enqueue_style('so_fontawesome');
    wp_enqueue_style('so_swiper');
    //wp_enqueue_style('so_main');
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    //Register Scripts & Load Scripts
    wp_register_script('so_popper', $uri . '/assets/js/popper.min.js', [], $ver, true);
    wp_register_script('so_bootstrap', $uri . '/assets/js/bootstrap.min.js', [], $ver, true);
    wp_register_script('so_swiper', $uri . '/assets/js/swiper.min.js', [], $ver, true);
    wp_register_script('so_swiper_init', $uri . '/assets/js/swiper-init.js', [], $ver, true);
    wp_register_script('so_main', $uri . '/assets/js/main-min.js', [], $ver, true);

    wp_enqueue_script('jquery');
    wp_enqueue_script('so_popper');
    wp_enqueue_script('so_bootstrap');
    wp_enqueue_script('so_swiper');
    wp_enqueue_script('so_swiper_init');
    wp_enqueue_script('so_main');
}
