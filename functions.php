<?php

function ninoweb_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    register_nav_menus([
        'primary' => __('Primary Menu', 'ninoweb'),
    ]);
}
add_action('after_setup_theme', 'ninoweb_setup');

wp_enqueue_style(
    'ninoweb-fonts',
    'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap',
    [],
    null
);

function ninoweb_enqueue_assets() {
    wp_enqueue_style(
        'ninoweb-style',
        get_stylesheet_uri(),
        [],
        filemtime(get_template_directory() . '/style.css')
    );
}
add_action('wp_enqueue_scripts', 'ninoweb_enqueue_assets');