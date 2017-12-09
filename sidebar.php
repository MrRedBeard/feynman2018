<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="sidebar" role="complementary" class="col-sm-3 col-sm-offset-1 blog-sidebar widget-area" aria-label="<?php esc_attr_e( 'Blog Sidebar', 'twentyseventeen' ); ?>>


	<?php dynamic_sidebar( 'sidebar-1' ); ?>

</div> <!-- Sidebar -->