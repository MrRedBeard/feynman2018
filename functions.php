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

add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

// Add scripts and stylesheets
function x2feynman_scripts() 
{
	//ToDo: All Scripts need to be called here
	
	/*** CSS ***/
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7' );
	wp_enqueue_style( 'bkw1', get_template_directory_uri() . '/css/ie10-viewport-bug-workaround.css');
	wp_enqueue_style( 'bootstraptheme', get_template_directory_uri() . '/css/bootstrap-theme.min.css', array(), 'v3.3.7' );
	wp_enqueue_style( 'bootstrapthemeextended', get_template_directory_uri() . '/css/theme-extended.css', array(), '0.0.1' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '4.7.0' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
	
	/*** JS ***/
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '3.3.7', true );
	wp_enqueue_script( 'ieEm', get_template_directory_uri() . '/js/ie-emulation-modes-warning.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'docs', get_template_directory_uri() . '/js/docs.min.js', array( 'jquery' ), '2.6.0', true );
	// IE10 viewport hack for Surface/desktop Windows 8 bug
	wp_enqueue_script( 'ie10', get_template_directory_uri() . '/js/ie10-viewport-bug-workaround', array( 'jquery' ), '1', true );

}

add_action( 'wp_enqueue_scripts', 'x2feynman_scripts' );

// Add Google Fonts
function x2feynman_google_fonts() 
{
	wp_register_style('OpenSans', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
	wp_enqueue_style( 'OpenSans');
}

add_action('wp_print_styles', 'x2feynman_google_fonts');