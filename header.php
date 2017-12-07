<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage x2-feynman
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
	<title>Empty Page</title>

	<!-- Bootstrap -->
	<link href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo get_bloginfo('template_directory'); ?>/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
	<link href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="<?php echo get_bloginfo('template_directory'); ?>/css/theme.css" rel="stylesheet">
	<link href="<?php echo get_bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet">
	<link href="<?php echo get_bloginfo('template_directory'); ?>/css/font-awesome.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/ie8-responsive-file-warning.js"></script>
	  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/html5shiv.min.js"></script><!--3.7.3-->
	  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/respond.min.js"></script><!--1.4.2-->
	<![endif]-->
	  <script src="<?php echo get_bloginfo('template_directory'); ?>/js/ie-emulation-modes-warning.js"></script>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
			
<!-- Fixed navbar -->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="/">Page Title</a>
	</div>
	<div id="navbar" class="collapse navbar-collapse">
	  <ul class="nav navbar-nav">
		<li class="active"><a href="/">Home</a></li>
		<li><a href="/Home/Carousel">Carousel</a></li>
		<li><a href="/Home/Carousel2">Carousel2</a></li>
		<li><a href="/Home/Blog">Blog</a></li>
		<li><a href="/Home/BlogLatest">Blog Latest</a></li>
		<li><a href="/Home/SignIn">SignIn</a></li>
		<li><a href="/Home/Examples">Examples</a></li>
		<li><a href="/Home/GridsExample">Grids</a></li>
		<li><a href="/Home/MarketingLandingExample">Marketing Landing Page</a></li>
		<li class="dropdown">
		  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
		  <ul class="dropdown-menu">
			<li><a href="/Home/Dashboard">Dashboard</a></li>
			<li><a href="#">Another action</a></li>
			<li><a href="#">Something else here</a></li>
			<li role="separator" class="divider"></li>
			<li class="dropdown-header">Nav header</li>
			<li><a href="#">Separated link</a></li>
			<li><a href="#">One more separated link</a></li>
		  </ul>
		</li>
	  </ul>
	</div><!--/.nav-collapse -->
  </div>
</nav>

<div class="container"><!--/Page Content Start -->
	