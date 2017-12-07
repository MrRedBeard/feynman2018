<div class="blog-post">
		<h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a> &#8226; <a href="<?php comments_link(); ?>"><?php printf( _nx( 'One Comment', '%1$s Comments', get_comments_number(), 'comments title', 'textdomain' ), number_format_i18n( get_comments_number() ) ); ?></a></p>
		<div class="row">
			<?php if ( has_post_thumbnail() ) {?>
			<div class="col-md-4">
					<?php	the_post_thumbnail('thumbnail'); ?>
			</div>
			<div class="col-md-6">
				<?php the_excerpt(); ?>
			</div>
			<?php } else { ?>
			<div class="col-md-10">
				<?php the_excerpt(); ?>
			</div>
			<?php } ?>
		</div>
	
	
</div><!-- /.blog-post -->