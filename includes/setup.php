<?php

function so_setup_theme(){
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    
    register_nav_menu( 'primary', __( 'Primary Menu', 'socio' ) );
    register_nav_menu( 'footer', __( 'Footer Menu', 'socio' ) );
}

