<?php

function my_theme_enqueue_styles() {

    wp_enqueue_style('style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'style',
    get_stylesheet_directory_uri() . '/style.css',
    array( 'style' ),
    wp_get_theme()->get('Version'));

    wp_enqueue_style('custom-styling', get_template_directory_uri() . '/style-overrides.css' );
    wp_enqueue_style( 'custom-styling',
    get_stylesheet_directory_uri() . '/style-overrides.css',
    array( 'custom-styling' ),
    wp_get_theme()->get('Version'));

    wp_enqueue_style('custom-widescreen-styling', get_template_directory_uri() . '/style-overrides-widescreen.css' );
    wp_enqueue_style( 'custom-widescreen-styling',
    get_stylesheet_directory_uri() . '/style-overrides-widescreen.css',
    array( 'custom-widescreen-styling' ),
    wp_get_theme()->get('Version'));

    wp_enqueue_style('custom-main-menu-styling', get_template_directory_uri() . '/style-overrides-main-menu.css' );
    wp_enqueue_style( 'custom-main-menu-styling',
    get_stylesheet_directory_uri() . '/style-overrides-main-menu.css',
    array( 'custom-main-menu-styling' ),
    wp_get_theme()->get('Version'));

    wp_enqueue_style('custom-post-styling', get_template_directory_uri() . '/style-overrides-post.css' );
    wp_enqueue_style( 'custom-post-styling',
    get_stylesheet_directory_uri() . '/style-overrides-post.css',
    array( 'custom-post-styling' ),
    wp_get_theme()->get('Version'));

    if(is_front_page())
    wp_enqueue_style( 'custom-home-styling', get_template_directory_uri() . '/style-overrides-home.css' );
    wp_enqueue_style( 'custom-home-styling',
    get_stylesheet_directory_uri() . '/style-overrides-home.css',
    array( 'custom-home-styling' ),
    wp_get_theme()->get('Version'));

    wp_enqueue_style( 'custom-header-styling', get_template_directory_uri() . '/style-overrides-header.css' );
    wp_enqueue_style( 'custom-header-styling',
    get_stylesheet_directory_uri() . '/style-overrides-header.css',
    array( 'custom-header-styling' ),
    wp_get_theme()->get('Version'));

    wp_enqueue_style( 'custom-menu-styling', get_template_directory_uri() . '/style-overrides-menus.css' );
    wp_enqueue_style( 'custom-menu-styling',
    get_stylesheet_directory_uri() . '/style-overrides-menu.css',
    array( 'custom-menu-styling' ),
    wp_get_theme()->get('Version'));

    wp_enqueue_style( 'custom-footer-styling', get_template_directory_uri() . '/style-overrides-footer.css' );
    wp_enqueue_style( 'custom-footer-styling',
    get_stylesheet_directory_uri() . '/style-overrides-footer.css',
    array( 'custom-footer-styling' ),
    wp_get_theme()->get('Version'));

}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

