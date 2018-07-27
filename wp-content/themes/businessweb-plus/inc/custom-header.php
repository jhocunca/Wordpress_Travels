<?php
/**
 * @package Businessweb Plus
 * Setup the WordPress core custom header feature.
 *
 * @uses businessweb_plus_header_style()
 */
function businessweb_plus_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'businessweb_plus_custom_header_args', array(		
		'default-text-color'     => 'ffffff',
		'width'                  => 1400,
		'height'                 => 200,
		'wp-head-callback'       => 'businessweb_plus_header_style',			
	) ) );
}
add_action( 'after_setup_theme', 'businessweb_plus_custom_header_setup' );

if ( ! function_exists( 'businessweb_plus_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see businessweb_plus_custom_header_setup().
 */
function businessweb_plus_header_style() {
	$header_text_color = get_header_textcolor();
	?>
	<style type="text/css">
	<?php
		//Check if user has defined any header image.
		if ( get_header_image() || get_header_textcolor() ) :
	?>
		.header {
			background: url(<?php echo esc_url( get_header_image() ); ?>) no-repeat;
			background-position: center top;
		}
	<?php endif; ?>	
	</style>
	<?php
}
endif; // businessweb_plus_header_style

add_action( 'admin_head', 'admin_header_css' );
function admin_header_css(){ ?>
	<style type="text/css">pre{white-space: pre-wrap;}</style><?php
}