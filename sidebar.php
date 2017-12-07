<div id="sidebar" role="complementary" class="col-sm-3 col-sm-offset-1 blog-sidebar">
	<div class="sidebar-module sidebar-module-inset">
		<h4>About</h4>
		<p><?php the_author_meta( 'description' ); ?> </p>
	</div>
<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
	<div id="primary" class="widget-area">
		<ol class="list-unstyled">
			<?php dynamic_sidebar( 'primary-widget-area' ); ?>
		</ol>
	</div>
<?php endif; ?>
	<div class="sidebar-module">
		<h4>Archives</h4>
		<ol class="list-unstyled">
		  <?php wp_get_archives( 'type=monthly' ); ?>
		</ol>
	  </div>
</div>