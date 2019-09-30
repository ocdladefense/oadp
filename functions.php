<?php

/**
  * @function add_parent_stylesheets
  *
  * @description Queue up stylesheets for the parent theme.
  */
function add_parent_stylesheets() {

	$basedir = get_template_directory_uri() .'/style-overrides';
	$styles = array(
		'general-overrides' => 'style.css',
		'header-overrides' => 'header.css',
		'menu-overrides' => 'menu.css',
		'post-overrides' => 'post.css',
		'footer-overrides' => 'footer.css'
	);
	
	wp_enqueue_style( 'parent-styles', get_template_directory_uri() . '/style.css' );
	
	foreach($styles as $id => $uri) {
		wp_enqueue_style($id,$basedir.'/'.$uri);
	}
	
}



/**
  * @function add_parent_stylesheets
  *
  * @description Queue up stylesheets for this theme.
  */
function add_child_stylesheets() {
		
    wp_enqueue_style( 'child-styles',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'parent-styles' ),
        wp_get_theme()->get('Version')
    );
}


add_action( 'wp_enqueue_scripts', 'add_parent_stylesheets' );
add_action( 'wp_enqueue_scripts', 'add_child_stylesheets' );

