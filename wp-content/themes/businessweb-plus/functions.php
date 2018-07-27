<?php    
/**
 * Businessweb Plus functions and definitions
 *
 * @package Businessweb Plus
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

if ( ! function_exists( 'businessweb_plus_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function businessweb_plus_setup() {
	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */

	load_theme_textdomain( 'businessweb-plus', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support('woocommerce');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-header', array( 
		'default-text-color' => false,
		'header-text' => false,
	) );
	add_theme_support( 'title-tag' );	
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'businessweb-plus' ),		
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	
	add_theme_support( 'custom-logo', array(
		'height'      => 100,
		'width'       => 100,
		'flex-height' => true,
	) );
	add_editor_style( 'editor-style.css' );		
} 
endif; // businessweb_plus_setup
add_action( 'after_setup_theme', 'businessweb_plus_setup' );

function businessweb_plus_widgets_init() { 		
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'businessweb-plus' ),
		'description'   => __( 'Appears on blog page sidebar', 'businessweb-plus' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Header Info', 'businessweb-plus' ),
		'description'   => __( 'Appears on header of site', 'businessweb-plus' ),
		'id'            => 'headerinfo-widget',
		'before_widget' => '<div class="headerinfo">',	
		'after_widget'  => '</div>',	
		'before_title'  => '<h4 style="display:none">',
		'after_title'   => '</h4>',		
	) );	
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget 1', 'businessweb-plus' ),
		'description'   => __( 'Appears on footer', 'businessweb-plus' ),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="cols-4 widget-column-1 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget 2', 'businessweb-plus' ),
		'description'   => __( 'Appears on footer', 'businessweb-plus' ),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="cols-4 widget-column-2 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget 3', 'businessweb-plus' ),
		'description'   => __( 'Appears on footer', 'businessweb-plus' ),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="cols-4 widget-column-3 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Footer Widget 4', 'businessweb-plus' ),
		'description'   => __( 'Appears on footer', 'businessweb-plus' ),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="cols-4 widget-column-4 %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );					
	
}
add_action( 'widgets_init', 'businessweb_plus_widgets_init' );


function businessweb_plus_font_url(){
		$font_url = '';		
		
		/* Translators: If there are any character that are not
		* supported by Roboto Condensed, trsnalate this to off, do not
		* translate into your own language.
		*/
		$roboto_condensed = _x('on','roboto_condensed:on or off','businessweb-plus');
				
		if('off' !== $roboto_condensed ){
			$font_family = array();
			
			if('off' !== $roboto_condensed){
				$font_family[] = 'Roboto Condensed:300,400,600,700,800,900';
			}
					
						
			$query_args = array(
				'family'	=> urlencode(implode('|',$font_family)),
			);
			
			$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
		}
		
	return $font_url;
	}


function businessweb_plus_scripts() {
	wp_enqueue_style('businessweb-plus-font', businessweb_plus_font_url(), array());
	wp_enqueue_style( 'businessweb-plus-basic-style', get_stylesheet_uri() );	
	wp_enqueue_style( 'nivo-slider', get_template_directory_uri()."/css/nivo-slider.css" );
	wp_enqueue_style( 'businessweb-plus-responsive', get_template_directory_uri()."/css/responsive.css" );		
	wp_enqueue_style( 'businessweb-plus-default', get_template_directory_uri()."/css/default.css" );
	wp_enqueue_script( 'jquery-nivo-slider', get_template_directory_uri() . '/js/jquery.nivo.slider.js', array('jquery') );
	wp_enqueue_script( 'businessweb-plus-custom', get_template_directory_uri() . '/js/custom.js' );
	wp_enqueue_style( 'animation', get_template_directory_uri()."/css/animation.css" );	
	wp_enqueue_style( 'font-awesome', get_template_directory_uri()."/css/font-awesome.css" );	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'businessweb_plus_scripts' );


/**
 * Enqueues scripts and styles.
 *
 * @since Businessweb Plus
 */
function businessweb_plus_ie_stylesheet(){	

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style('businessweb-plus-ie', get_template_directory_uri().'/css/ie.css', array( 'businessweb-plus-style' ), '20160928' );
	wp_style_add_data('businessweb-plus-ie','conditional','lt IE 10');
	
	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'businessweb-plus-ie8', get_template_directory_uri() . '/css/ie8.css', array( 'businessweb-plus-style' ), '20160928' );
	wp_style_add_data( 'businessweb-plus-ie8', 'conditional', 'lt IE 9' );

	// Load the Internet Explorer 7 specific stylesheet.
	wp_enqueue_style( 'businessweb-plus-ie7', get_template_directory_uri() . '/css/ie7.css', array( 'businessweb-plus-style' ), '20160928' );
	wp_style_add_data( 'businessweb-plus-ie7', 'conditional', 'lt IE 8' );	
	
	}
	
add_action('wp_enqueue_scripts','businessweb_plus_ie_stylesheet');

define('businessweb_plus_protheme_url','https://gracethemes.com/themes/bizweb-creative-wordpress-themes/','businessweb-plus');
define('businessweb_plus_theme_doc','https://gracethemes.com/documentation/businessweb/#homepage-lite','businessweb-plus');
define('businessweb_plus_live_demo','https://gracethemes.com/demo/business-web/','businessweb-plus');

 if ( ! function_exists( 'businessweb_plus_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 * @since  Businessweb Plus
 */
function businessweb_plus_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;

/**
 * Custom template for about theme.
 */
require get_template_directory() . '/inc/about-themes.php';

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

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';

// get slug by id
function businessweb_plus_get_slug_by_id($id) {
	$post_data = get_post($id, ARRAY_A);
	$slug = $post_data['post_name'];
	return $slug; 
}