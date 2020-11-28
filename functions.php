<?php
// Prevent direct script access
if ( !defined( 'ABSPATH' ) )
    die ( 'No direct script access allowed' );

/******************************************************************************/
/* Enqueue Styles and Scripts */
/******************************************************************************/
function cc_enqueue_custom_scripts() {
	/* CSS */
	wp_enqueue_style('cc-custom-style', get_stylesheet_directory_uri().'/custom.css', array(), '1.0.0');

	/* JS */
	//wp_enqueue_script('cc-custom-script', get_template_directory_uri() . '/js/custom.js', array('jquery'), 1.0, true);

}
add_action('wp_enqueue_scripts', 'cc_enqueue_custom_scripts');

/**
 * Add custom functions below
 */