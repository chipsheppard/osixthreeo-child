<?php
/**
 * OsixthreeO Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Osixthreeo Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define( 'OSIXTHREEO_CHILD_VERSION', '1.0.0' );

/**
 * Enqueue styles
 */
function osixthreeo_child_enqueue_styles() {
	wp_deregister_style( 'osixthreeo-style' );
	wp_enqueue_style( 'osixthreeo-parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'osixthreeo-child-style', get_stylesheet_uri(), array( 'osixthreeo-parent-style' ) );
}
add_action( 'wp_enqueue_scripts', 'osixthreeo_child_enqueue_styles', 15 );

/**
 * Move the Custom Header.
 */
function osixthreeo_child_remove_customheader() {
	 remove_action( 'osixthreeo_header_after_wrap', 'osixthreeo_display_customheader' );
}
add_action( 'init' , 'osixthreeo_child_remove_customheader' );
add_action( 'tha_content_wrap_before', 'osixthreeo_display_customheader', 15 );
