<?php 

function philoshopy_bootstraping(){
    load_theme_textdomain('philoshopy');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    register_nav_menu( 'topmenu', __('Top Menu','philoshopy'));
    register_nav_menu( 'footermenu', __('Footer Menu','philoshopy'));
}
add_action( 'after_setup_theme', 'philoshopy_bootstraping');

function philoshopy_assets(){
    wp_enqueue_style( 'philoshopy-style', get_stylesheet_uri());
    wp_register_style('base', get_template_directory_uri().'/assets/css/base.css', array(),'1.0.2','all');
    wp_register_style('vendor', get_template_directory_uri().'/assets/css/vendor.css', array(),'1.0.2','all');
    wp_register_style('main', get_template_directory_uri().'/assets/css/main.css', array(),'1.0.2','all');

    wp_enqueue_style('main');
    wp_enqueue_style('base');
    wp_enqueue_style('vendor');

    //theme js file added
    wp_enqueue_script('jquery');
    wp_enqueue_script('modernizr', get_template_directory_uri().'/assets/js/modernizr.js', array(),'4.0.2','true');
    wp_enqueue_script('pace', get_template_directory_uri().'/assets/js/pace.min.js', array(),'4.0.2','true');
    wp_enqueue_script('jsplugins', get_template_directory_uri().'/assets/js/jsplugins.js', array(),'4.0.2','true');
    wp_enqueue_script('jsmain', get_template_directory_uri().'/assets/js/jsmain.js', array(),'4.0.2','true');
}

add_action('wp_enqueue_scripts','philoshopy_assets');