<?php
/**
 * @package Vacation Lite
 * Setup the WordPress core custom header feature.
 *
 * @uses vacation_lite_header_style()
 * @uses vacation_lite_admin_header_style()
 * @uses vacation_lite_admin_header_image()

 */
function vacation_lite_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'vacation_lite_custom_header_args', array(
		'default-text-color'     => 'fff',
		'width'                  => 1600,
		'height'                 => 400,
		'wp-head-callback'       => 'vacation_lite_header_style',
		'admin-head-callback'    => 'vacation_lite_admin_header_style',
		'admin-preview-callback' => 'vacation_lite_admin_header_image',
	) ) );
}
add_action( 'after_setup_theme', 'vacation_lite_custom_header_setup' );

if ( ! function_exists( 'vacation_lite_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see vacation_lite_custom_header_setup().
 */
function vacation_lite_header_style() {
	$header_text_color = get_header_textcolor();
	?>
	<style type="text/css">
	<?php
		//Check if user has defined any header image.
		if ( get_header_image() || get_header_textcolor() ) :
	?>
		.header{
			background-image: url(<?php echo get_header_image(); ?>);
			background-position: center top;
		}
		.logo h1 a { color:#<?php echo get_header_textcolor(); ?>;}
	<?php endif; ?>	
	</style>
	<?php
	// If the header text option is untouched, let's bail.
	if ( display_header_text() ) {
		return;
	}

	// If the header text has been hidden.
	?>
    <style type="text/css">
		.logo {
			margin: 0 auto 0 0;
		}

		.logo h1,
		.logo p{
			clip: rect(1px, 1px, 1px, 1px);
			position: absolute;
		}
    </style>
	
    <?php
	
}
endif; // vacation_lite_header_style

if ( ! function_exists( 'vacation_lite_admin_header_style' ) ) :
/**
 * Styles the header image displayed on the Appearance > Header admin panel.
 *
 * @see vacation_lite_custom_header_setup().
 */
function vacation_lite_admin_header_style() {?>
	<style type="text/css">
	.appearance_page_custom-header #headimg { border: none; }
	</style><?php
}
endif; // vacation_lite_admin_header_style


add_action( 'admin_head', 'vacation_lite_admin_header_css' );
function vacation_lite_admin_header_css(){ ?>
	<style>pre{white-space: pre-wrap;}</style><?php
}