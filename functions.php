<?php

function blog_assets() {
    wp_enqueue_style('main-style', get_template_directory_uri() . '/style/main.css', microtime());

}

add_action('wp_enqueue_scripts', 'blog_assets');

function blog_theme_support(){
    add_theme_support('post-thumbnails');
    add_theme_support( 'custom-logo' );
    add_theme_support( 'menus' );

    register_nav_menu('header_menu', 'Header Menu');
    register_nav_menu('footer_menu', 'Footer Menu');
}

add_action('after_setup_theme','blog_theme_support');