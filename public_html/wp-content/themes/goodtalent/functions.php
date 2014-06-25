<?php

// Enqueue CSS and scripts
function load_cornerstone_child_scripts() {
	wp_enqueue_style(
		'cornerstone_child_css',
		get_stylesheet_directory_uri() . '/style.css',
		array('foundation_css'),
		false,
		'all'
	);
	wp_enqueue_style(
		'foundation-icons',
		get_stylesheet_directory_uri() . '/css/foundation-icons.css',
		array('foundation_css'),
		false,
		'all'
	);
}

add_action('wp_enqueue_scripts', 'load_cornerstone_child_scripts',50);


$wpgt_settings=array();
$wpgt_settings=get_option('wpgoodtalent_settings');

add_editor_style(get_stylesheet_directory_uri() . '/css/editor.css');
add_editor_style(get_stylesheet_directory_uri() . '/css/foundation-icons.css');


add_action( 'wp_enqueue_scripts', 'themename_scripts' );
/*
function themename_scripts() {
    wp_enqueue_style( 'themename-style', get_stylesheet_uri(), array( 'dashicons' ), '1.0' );
}
*/


?>