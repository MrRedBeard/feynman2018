<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage x2-feynman
 * @since 1.0
 * @version 1.2
 */

?>
</div><!--/Page Content End -->

<footer class="footer">
	<div class="container">
		<p class="pull-right"><a href="#">Back to top</a></p>
		<p class="text-muted">&copy; 2017 Company, LLC. &middot;</p>
		<?php wp_footer(); ?>
	</div>
</footer>



<!-- Bootstrap core JavaScript -->
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/jquery.min.js"></script><!--1.12.4-->
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/docs.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo get_bloginfo('template_directory'); ?>/js/ie10-viewport-bug-workaround.js"></script>



</body>
</html>
