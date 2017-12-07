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