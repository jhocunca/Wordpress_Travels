<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Corporate_X
 */

?>

	<!-- Footer Top -->
	<footer class="footer wow fadeInUp" id="contact">
		<?php
			if( is_active_sidebar( 'sidebar-2' ) ) :
		?>
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<?php
							dynamic_sidebar( 'sidebar-2' );
						?>
					</div>
				</div>
			</div>
		<?php
			endif;
		?>
				<!-- Footer Bottom -->
				<div class="copyright">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12 text-center">
								<!-- Copyright -->
								<p><a href="<?php echo esc_url( __( 'https://wordpress.org/', 'corporate-x' ) ); ?>"><?php
									/* translators: %s: CMS name, i.e. WordPress. */
									printf( esc_html__( 'Proudly powered by %s', 'corporate-x' ), 'WordPress' );
								?></a>
								<span class="sep"> | </span>
								<?php
									/* translators: 1: Theme name, 2: Theme author. */
									printf( esc_html__( 'Theme: %1$s by %2$s', 'corporate-x' ), 'Corporate X', '<a href="http://wpcodethemes.com">WP Code Themes</a>' );
								?></p>
								<!--/ End Copyright -->
							</div>
						</div>
		            </div>
				</div>	
				<!--/ End Footer Bottom -->
	</footer>
	<!--/ End footer Top -->

<?php wp_footer(); ?>

</body>
</html>
