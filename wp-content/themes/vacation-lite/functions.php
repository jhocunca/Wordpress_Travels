<?php
/**
 * Vacation Lite functions and definitions
 *
 * @package Vacation Lite
 */

if ( ! function_exists( 'vacation_lite_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function vacation_lite_setup() {

	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */

	load_theme_textdomain( 'vacation-lite', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 240,
		'width'       => 240,
		'flex-height' => true,
	) );
	add_image_size('vacation-lite-homepage-thumb',240,145,true);
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'vacation-lite' ),
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	add_editor_style( 'editor-style.css' );
}
endif; // vacation_lite_setup
add_action( 'after_setup_theme', 'vacation_lite_setup' );


function vacation_lite_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'vacation-lite' ),
		'description'   => __( 'Appears on blog page sidebar', 'vacation-lite' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Page Sidebar', 'vacation-lite' ),
		'description'   => __( 'Appears on page sidebar', 'vacation-lite' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action( 'widgets_init', 'vacation_lite_widgets_init' );

function vacation_lite_font_url(){
		$font_url = '';
		
		/* Translators: If there are any character that are
		* not supported by Arimo, translate this to off, do not
		* translate into your own language.
		*/
		$arimo = _x('on', 'Arimo font:on or off','vacation-lite');
		
		/* Translators: If there are any character that are
		* not supported by Roboto, translate this to off, do not
		* translate into your own language.
		*/
		$roboto = _x('on', 'Roboto font:on or off','vacation-lite');
		
		/* Translators: If there are any character that are
		* not supported by Open Sans, translate this to off, do not
		* translate into your own language.
		*/
		$open_sans = _x('on', 'Open Sans font:on or off','vacation-lite');
		
		if('off' !== $arimo || 'off' !==  $roboto || 'off' !== $open_sans){
			$font_family = array();
			
			if('off' !== $arimo){
				$font_family[] = 'Arimo:300,400';
			}
			
			if('off' !== $roboto){
				$font_family[] = 'Roboto:400,700';
			}
			
			if('off' !== $open_sans){
				$font_family[] = 'Open Sans:400,700';
			}
			
			$query_args = array(
				'family'	=> urlencode(implode('|',$font_family)),
			);
			
			$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
		}
		
	return $font_url;
	}

function vacation_lite_scripts() {
	wp_enqueue_style( 'vacation-lite-font', vacation_lite_font_url(), array() );
	wp_enqueue_style( 'vacation-lite-basic-style', get_stylesheet_uri() );
	wp_enqueue_style( 'vacation-lite-responsive-style', get_template_directory_uri().'/css/theme-responsive.css' );
	wp_enqueue_style( 'nivo-style', get_template_directory_uri().'/css/nivo-slider.css' );
	if (is_front_page() ) { 
		wp_enqueue_script( 'nivo-slider-js', get_template_directory_uri() . '/js/jquery.nivo.slider.js', array('jquery') );
	}
	wp_enqueue_script( 'vacation-lite-customscripts', get_template_directory_uri() . '/js/custom.js', array('jquery') );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/css/font-awesome.css' );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'vacation_lite_scripts' );


/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/*
 * Load customize pro
 */

require_once( trailingslashit( get_template_directory() ) . 'customize-pro/class-customize.php' );


// URL DEFINES
define('vacation_lite_pro_theme_url','https://flythemes.net/wordpress-themes/vacation-wordpress-theme/');
define('vacation_lite_site_url','https://flythemes.net/');

function vacation_lite_custombg_css(){
	$hideslide = get_theme_mod('hide_slider', '1');
	if( $hideslide != '' || is_home() || is_page() || is_single() || is_archive() || is_category() || is_search() || is_404()) { ?>
    		<style>
					.header{ background-color:#000000; position:relative;}
			</style>
	<?php } 
}		
	
add_action('wp_head','vacation_lite_custombg_css');
