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


function ninoweb_enqueue_assets() {
    wp_enqueue_style(
        'ninoweb-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'ninoweb-style',
        get_stylesheet_uri(),
        ['ninoweb-fonts'],
        filemtime(get_theme_file_path('/style.css'))
    );

    wp_enqueue_script(
        'font-awesome',
        'https://kit.fontawesome.com/9fa7db7f27.js',
        [],
        null,
        false
    );

    wp_enqueue_script(
        'ninoweb-navigation',
        get_theme_file_uri('/assets/js/navigation.js'),
        [],
        filemtime(get_theme_file_path('/assets/js/navigation.js')),
        true
    );
}

add_action('wp_enqueue_scripts', 'ninoweb_enqueue_assets');