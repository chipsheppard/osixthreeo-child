<?php
/**
 * OsixthreeO Child Theme functions and definitions
 * Enqueues   parent and child stylesheets
 *
 * @package   Osixthreeo Child
 * @since     1.0.0
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Define Constants
 */
define( 'OSIXTHREEO_CHILD_VERSION', '1.0.1' );

if ( ! function_exists( 'osixthreeo_child_enqueue_styles' ) ) {
	/**
	 * Enqueue styles
	 */
	function osixthreeo_child_enqueue_styles() {

		// Enqueue Parent theme's stylesheet.
		wp_enqueue_style( 'osixthreeo-parent-style', get_template_directory_uri() . '/style.css', array(), OSIXTHREEO_VERSION );

	}
}
add_action( 'wp_enqueue_scripts', 'osixthreeo_child_enqueue_styles', 15 );

/*
 * -----------------------------------------------------------------
 * CUSTOM CODE BEGINS HERE
 * --------------------------------------------------------------
 */
