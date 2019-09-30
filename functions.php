<?php

function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'custom-styling', get_template_directory_uri() . '/style-overrides.css' );
	wp_enqueue_style( 'custom-post-styling', get_template_directory_uri() . '/style-overrides-post.css' );
	wp_enqueue_style( 'custom-header-styling', get_template_directory_uri() . '/style-overrides-header.css' );
	wp_enqueue_style( 'custom-menu-styling', get_template_directory_uri() . '/style-overrides-menus.css' );
    wp_enqueue_style( 'custom-footer-styling', get_template_directory_uri() . '/style-overrides-footer.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css');

}

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
