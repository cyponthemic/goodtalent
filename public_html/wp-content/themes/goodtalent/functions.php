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

global $wpgt_settings;
$wpgt_settings=array();
$wpgt_settings=get_option('wpgoodtalent_settings');

add_editor_style(get_stylesheet_directory_uri() . '/css/editor.css');
add_editor_style(get_stylesheet_directory_uri() . '/css/foundation-icons.css');

/*
add_action( 'wp_enqueue_scripts', 'themename_scripts' );

function themename_scripts() {
    wp_enqueue_style( 'themename-style', get_stylesheet_uri(), array( 'dashicons' ), '1.0' );
}
*/


if ( ! function_exists( 'load_cornerstone_scripts' ) ) {

	function load_cornerstone_scripts() {

		wp_enqueue_script(
			'foundation_modernizr_js',
			get_template_directory_uri() . '/js/modernizr.js',
			array(),
			'2.7.2',
			false
		);

		wp_enqueue_script(
			'foundation_js',
			get_template_directory_uri() . '/js/foundation.min.js',
			array('jquery'),
			'5.2.2',
			true
		);
		wp_enqueue_script(
			'foundation.topbar.js',
			get_template_directory_uri() . '/js/foundation.topbar.js',
			array('jquery'),
			'5.2.2',
			true
		);
		
		wp_enqueue_script(
			'mail-chimp.js',
			get_stylesheet_directory_uri() . '/inc/mail-chimp.js',
			array('jquery'),
			'1',
			true
		);

	}

}

add_action( 'wp_enqueue_scripts', 'load_cornerstone_scripts', 0 );

add_post_type_support( 'page', 'excerpt' );

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
        set_post_thumbnail_size( 300, 300 ,true);
}

?>