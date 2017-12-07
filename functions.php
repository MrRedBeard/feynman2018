<?php
/**
 * x2-feynman functions and definitions
 *
 * @link http://www.x2labs.com
 *
 * @package WordPress
 * @subpackage x2-feynman
 */
 
 
 /**
 * x2-feynman only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) )
{
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

// Add scripts and stylesheets
function x2feynman_scripts() 
{
	//ToDo: All Scripts need to be called here
	
	/*** CSS ***/
	//wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6' );
	//wp_enqueue_style( 'blog', get_template_directory_uri() . '/css/style.css' );
	
	/*** JS ***/
	//wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.6', true );
}

add_action( 'wp_enqueue_scripts', 'x2feynman_scripts' );