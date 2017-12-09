<?php
/**
 * Displays top navigation
 *
 * @package WordPress
 * @subpackage feynman2018
 * @since 1.0
 * @version 1.2
 */
$TopMenuArgs = array(
    'menu'            => 'top_menu',
    'container_class' => 'menu-{menu slug}-container collapse navbar-collapse',
    'menu_class'      => 'menu nav navbar-nav',
	'walker' => new Bootstrap_Walker_Menu_Nav()
);
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
	<div class="navbar-header">
	  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	  </button>
	  <a class="navbar-brand" href="<?php echo get_bloginfo( 'wpurl' ); ?>"><?php echo get_bloginfo( 'name' ); ?></a>
	</div>
	<?php wp_nav_menu($TopMenuArgs);?>
  </div>
</nav>


