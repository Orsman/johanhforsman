<?php

//
// Basic Theme Setup
//
function theme_setup() {
    //Enable support for post formats
    add_theme_support( 'post-formats', array( 'image', 'video', 'link' ) );

    //Enable Thumbnails in posts
    add_theme_support('post-thumbnails');
    add_image_size('top-feature', 600, 300, true);
    add_image_size('book', 150, 220);
}

add_action('after_setup_theme', 'theme_setup');

//
// Load JS Modernizr
//
function load_scripts() {
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr.custom.js');
}

add_action ('wp_enqueue_scripts', 'load_scripts');