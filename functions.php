<?php

// theme features
function esaa_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
 add_theme_support('block-templates');
    add_theme_support('responsive-embeds');
    add_theme_support('align-wide');
    register_nav_menus(array(
        'main-menu' => 'Main Menu'
    ));
}
add_action('after_setup_theme', 'esaa_setup');

//  CSS
function esaa_styles() {
    wp_enqueue_style(
        'esaa-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version'),
         ('wp-block-library')
    );
}
add_action('wp_enqueue_scripts', 'esaa_styles');