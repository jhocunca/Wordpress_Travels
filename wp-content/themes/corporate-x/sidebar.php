<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Corporate_X
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<div class="col-md-4 col-sm-12 col-xs-12 wow fadeInRight" data-wow-delay="0.4s">
	<!-- News Sidebar -->
	<div class="blog-sidebar sidebar">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</div>
	<!--/ End News Sidebar -->
</div>