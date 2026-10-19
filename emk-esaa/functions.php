<?php

// theme features
function esaa_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'main-menu' => 'Main Menu'
    ));
}
add_action('after_setup_theme', 'esaa_setup');

//  CSS
function esaa_styles() {
    wp_enqueue_style(
        'esaa-style',
        get_stylesheet_uri()
    );
}
add_action('wp_enqueue_scripts', 'esaa_styles');