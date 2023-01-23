<?php

function add_theme_scripts_and_styles() {
	wp_enqueue_style("style", get_stylesheet_uri());
	// wp_enqueue_script( 'main', get_template_directory_uri());
	wp_enqueue_script( 'main', get_template_directory_uri() . '/main.js', array(), 1, true);
	// wp_enqueue_script( 'main-nav', get_template_directory_uri() . '/js/main-nav.js');
}

add_action('wp_enqueue_scripts', 'add_theme_scripts_and_styles');

// Enable SVG support
function cc_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

add_theme_support( 'post-thumbnails' );

add_theme_support( 'menus' );

function my_custom_menu() {
    register_nav_menu('mainnavigaton',__( 'My Custom Menu' ));
}

add_action( 'init', 'my_custom_menu' );