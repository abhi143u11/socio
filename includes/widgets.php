<?php

function so_widgets() {
    register_sidebar([
        'name' => __('Blog Sidebar', 'socio'),
        'id' => 'so_sidebar',
        'description' => __('Sidebar for the Blog', 'socio'),
        'before_widget' => '<section id="%1$s" class="widget mb-4 rounded-lg shadow-sm %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title mb-3 text-uppercase">',
        'after_title' => '</h2>'
    ]);
}
