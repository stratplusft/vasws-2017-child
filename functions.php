<?php
/**
 * vasws-2017-child functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package vasws-2017-child
 */

function my_theme_enqueue_styles() {

    $parent_style = 'twentyseventeen-style'; // This is 'twentyseventeen-style' for the Twenty Seventeen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_style('child-google-fonts', '//fonts.googleapis.com/css?family=Nunito+Sans|Roboto+Slab');
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/*
 * A simple function to control the number of Twenty Seventeen Theme Front Page Sections
 * Source: wpcolt.com
 */
function wpc_custom_front_sections( $num_sections )
	{
		return 6; //Change this number to change the number of the sections.
	}
add_filter( 'twentyseventeen_front_page_sections', 'wpc_custom_front_sections' );