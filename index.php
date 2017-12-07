<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage x2-feynman
 * @since 0.1
 * @version 0.1
 */

?>

<?php get_header(); ?>

<div class="blog-header">
	<h1 class="blog-title">The Bootstrap Blog</h1>
	<p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
</div>

<div class="row">
	<div class="col-sm-8 blog-main">
	
		
		<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
  	
				get_template_part( 'content', get_post_format() );
  
			endwhile; endif; 
		?>
	
	
		
	</div><!-- /.blog-main -->
	
<?php get_sidebar(); ?>
<?php get_footer(); ?>