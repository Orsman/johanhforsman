<?php

/*
| -------------------------------------------------------------------
| Basic theme setup
| -------------------------------------------------------------------
| */

function theme_setup() {
    //Enable support for post formats
    add_theme_support( 'post-formats', array( 'image', 'video', 'link' ) );

    //Enable Thumbnails in posts
    add_theme_support('post-thumbnails');
    add_image_size('top-feature', 600, 300, true);
    add_image_size('book', 150, 220);
}

add_action('after_setup_theme', 'theme_setup');

/*
| -------------------------------------------------------------------
| Load JS and CSS
| -------------------------------------------------------------------
| */

function load_scripts() {
	wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), '', 'all');
	wp_enqueue_style('style');
	wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', 'jquery');
    wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/modernizr.custom.js');
}

add_action ('wp_enqueue_scripts', 'load_scripts');

/*
| -------------------------------------------------------------------
| Footer Widget
| -------------------------------------------------------------------
| */

function footer_widgets() {

    register_sidebars(1, array(
        'name' => 'Footer',
        'before_title' => '<h4 class="footertitle">',
        'after_title' => '</h4>'
    ));
}

add_action('widgets_init', 'footer_widgets');