<?php

// Setup
define('SO_DEV_MODE',true);

// Includes
include(get_theme_file_path('includes/front/enqueue.php'));
include(get_theme_file_path('includes/front/bootstrap-navwalker.php'));
include(get_theme_file_path('includes/setup.php'));
include(get_theme_file_path('includes/widgets.php'));
include(get_theme_file_path('includes/theme-customizer.php'));
include(get_theme_file_path('includes/customizer/social.php'));
include(get_theme_file_path('includes/customizer/background.php'));
// Hooks
add_action('wp_enqueue_scripts','so_enqueue');
add_action('after_setup_theme','so_setup_theme');
add_action('widgets_init','so_widgets');
add_action('customize_register','so_customize_register');
// Shortcodes