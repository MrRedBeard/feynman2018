<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="icon" href="/favicon.ico">

	<!-- Bootstrap -->
	

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/ie8-responsive-file-warning.js"></script>
	  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/html5shiv.min.js"></script><!--3.7.3-->
	  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/respond.min.js"></script><!--1.4.2-->
	<![endif]-->
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
			
<!-- Fixed navbar -->
<?php if ( has_nav_menu( 'top' ) ) : ?>
	<?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
<?php endif; ?>

<div class="container"><!--/Page Content Start -->

	<div class="blog-header">
		<h1 class="blog-title"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
		<p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
	</div>

		

	