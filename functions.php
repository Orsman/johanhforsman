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
    //add_image_size('top-feature', 600, 300, true);

	//Make translations avaliable
	load_theme_textdomain('starter', get_template_directory().'/languages');

	//This theme uses wp_nav_menu in one location
	add_theme_support('menus');
	register_nav_menus( array( 
		'main-nav' => __('Main Navigation'),
		'footer-nav' => __('Footer Navigation')
		));
}

add_action('after_setup_theme', 'theme_setup');

/*
| -------------------------------------------------------------------
| Load JS and CSS
| -------------------------------------------------------------------
| */

function load_scripts() {
	wp_register_style('style', get_template_directory_uri() . '/stylesheets/style.css', array(), '', 'all');
	wp_enqueue_style('style');

    wp_register_script( 'modernizr', get_template_directory_uri() . '/js/custom.modernizr.js', array(), '', false );

    // Unregister WordPress built in jQuery
    wp_deregister_script('jquery');
    // Register Google jQuery
    wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js", false, null, true);

	// register jQuery Migrate plugin (from code.jquery.com – "The minified production file is compressed and does not generate console warnings.")
	wp_register_script( 'jquery-migrate', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://code.jquery.com/jquery-migrate-1.1.1.min.js", array('jquery'), '1.1.1', true );

    // register fittext and custom js
    wp_register_script( 'fittext' , get_template_directory_uri() . '/js/fittext.js', array(), '', true);
    wp_register_script( 'custom' , get_template_directory_uri() . '/js/custom.js', array(), '', true);

    wp_enqueue_script( 'modernizr' );
    wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'jquery-migrate' );
    wp_enqueue_script( 'fittext' );
    wp_enqueue_script( 'custom' );
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

/*
| -------------------------------------------------------------------
| Create Book-Menu in WP-Admin and register custom posts
| -------------------------------------------------------------------
| */

function add_bookshelf () {
    add_menu_page ('Bookshelf', 'Books', 'edit_posts', 'Books', '', '', 6);
}

add_action('admin_menu', 'add_bookshelf');

function book_init () {
    $labels = array(
        'name' => _x('Books', 'post type general name'),
        'singular_name' => _x('Book', 'post type singular name'),  
        'add_new' => _x('Add New', 'Book'),  
        'add_new_item' => __('Add New Book'),  
        'edit_item' => __('Edit Book'),  
        'new_item' => __('New Book'),  
        'view_item' => __('View Book'),  
        'search_items' => __('Search Book'),  
        'not_found' =>  __('No Book found'),  
        'not_found_in_trash' => __('No Book found in Trash'),  
        'parent_item_colon' => ''  
     );
        
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => 'Books',
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 6,
        'supports' => array('title','editor','thumbnail','custom-fields')
      );
    register_post_type('Book', $args);
}

add_action('init', 'book_init');

/*
| -------------------------------------------------------------------
| Create TDBID-Menu in WP-Admin and register custom posts
| -------------------------------------------------------------------
| */

function add_tdbid () {
    add_menu_page ('TDBID', 'TDBID', 'edit_posts', 'TDBID', '', '', 7);
}

add_action('admin_menu', 'add_tdbid');

function tdbid_init () {
    $labels = array(
        'name' => _x('TDBID', 'post type general name'),
        'singular_name' => _x('TDBID', 'post type singular name'),  
        'add_new' => _x('Add New', 'TDBID'),  
        'add_new_item' => __('Add New TDBID'),  
        'edit_item' => __('Edit TDBID'),  
        'new_item' => __('New TDBID'),  
        'view_item' => __('View TDBID'),  
        'search_items' => __('Search TDBID'),  
        'not_found' =>  __('No TDBID found'),  
        'not_found_in_trash' => __('No TDBID found in Trash'),  
        'parent_item_colon' => ''  
     );
        
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => 'TDBID',
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 6,
        'supports' => array('title','editor','thumbnail','custom-fields')
      );
    register_post_type('tdbid', $args);
}

add_action('init', 'tdbid_init');


/*
| -------------------------------------------------------------------
| Create Portfolio-Menu in WP-Admin and register custom posts
| -------------------------------------------------------------------
| */

function add_portfolio () {
    add_menu_page ('Portfolio', 'Portfolio', 'edit_posts', 'Portfolio', '', '', 8);
}

add_action('admin_menu', 'add_portfolio');

function portfolio_init () {
    $labels = array(
        'name' => _x('Portfolio Item', 'post type general name'),
        'singular_name' => _x('Portfolio Item', 'post type singular name'),  
        'add_new' => _x('Add New', 'Portfolio Item'),  
        'add_new_item' => __('Add New Portfolio Item'),  
        'edit_item' => __('Edit Portfolio Item'),  
        'new_item' => __('New Portfolio Item'),  
        'view_item' => __('View Portfolio'),  
        'search_items' => __('Search Portfolio Item'),  
        'not_found' =>  __('No Portfolio Item found'),  
        'not_found_in_trash' => __('No Portfolio Item found in Trash'),  
        'parent_item_colon' => ''  
     );
        
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => 'Portfolio',
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'menu_position' => 6,
        'supports' => array('title','editor','thumbnail','custom-fields')
      );
    register_post_type('portfolio-item', $args);
}

add_action('init', 'portfolio_init');

