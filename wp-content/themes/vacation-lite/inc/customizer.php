<?php
/**
 * Vacation Lite Theme Customizer
 *
 * @package Vacation Lite
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function vacation_lite_customize_register( $wp_customize ) {
	
function vacation_lite_sanitize_checkbox( $checked ) {
	// Boolean check.
	return ( ( isset( $checked ) && true == $checked ) ? true : false );
}

function vacation_lite_sanitize_dropdown_pages( $page_id, $setting ) {
	// Ensure $input is an absolute integer.
	$page_id = absint( $page_id );
	
	// If $page_id is an ID of a published page, return it; otherwise, return the default.
	return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}
	
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
		
	$wp_customize->add_setting('color_scheme', array(
		'default' => '#00b1e9',
		'sanitize_callback'	=> 'sanitize_hex_color',
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'color_scheme',array(
			'label' => __('Color Scheme','vacation-lite'),
			'description'	=> __('<strong>Select color for theme.</strong>','vacation-lite'),
			'section' => 'colors',
			'settings' => 'color_scheme'
		))
	);
	
	$wp_customize->add_section('headercont_section',array(
		'title'	=> __('Topbar contact and icons','vacation-lite'),
		'description'	=> __('Add contact details and social icons here. </strong>','vacation-lite'),
		'priority'	=> null
	));
	
	$wp_customize->add_setting('cont_email',array(
		'default'	=> 'info@example.com',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('cont_email',array(
		'label'	=> __('Add email address','vacation-lite'),
		'section'	=> 'headercont_section',
		'setting'	=> 'cont_email',
		'type'	=> 'text'
	));
	
	$wp_customize->add_setting('facebook_link',array(
		'default'	=> '#',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('facebook_link',array(
		'label'	=> __('Add facebook icon link','vacation-lite'),
		'section'	=> 'headercont_section',
		'setting'	=> 'facebook_link',
		'type'	=> 'text'
	));
	
	$wp_customize->add_setting('twitter_link',array(
		'default'	=> '#',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('twitter_link',array(
		'label'	=> __('Add twitter icon link','vacation-lite'),
		'section'	=> 'headercont_section',
		'setting'	=> 'twitter_link',
		'type'		=> 'text'
	));
	
	$wp_customize->add_setting('linked_link',array(
		'default'	=> '#',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('linked_link',array(
		'label'	=> __('Add linkedin icon link','vacation-lite'),
		'section'	=> 'headercont_section',
		'setting'	=> 'linked_link',
		'type'		=> 'text'
	));
	
	$wp_customize->add_setting('gplus_link',array(
		'default'	=> '#',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('gplus_link',array(
		'label'	=> __('Add google plus icon link','vacation-lite'),
		'section'	=> 'headercont_section',
		'setting'	=> 'gplus_link',
		'type'		=> 'text'
	));
	
	$wp_customize->add_setting('topbar_hide',array(
		'sanitize_callback'	=> 'vacation_lite_sanitize_checkbox'
	));
	
	$wp_customize->add_control('topbar_hide',array(
			'label'	=> __('Check this to hide topbar','vacation-lite'),
			'setting'	=> 'topbar_hide',
			'section'	=> 'headercont_section',
			'type'	=> 'checkbox'
	));
	
	
	// Slider Section Start		
	$wp_customize->add_section(
        'slider_section',
        array(
            'title' => __('Slider Settings', 'vacation-lite'),
            'priority' => null,
			'description'	=> __('Recommended image size (1420x567)','vacation-lite'),	
        )
    );
	
	$wp_customize->add_setting('page-setting7',array(
			'default' => '0',
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'vacation_lite_sanitize_integer'
	));
	
	$wp_customize->add_control('page-setting7',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide one:','vacation-lite'),
			'section'	=> 'slider_section'
	));	
	
	$wp_customize->add_setting('page-setting8',array(
			'default' => '0',
			'capability' => 'edit_theme_options',	
			'sanitize_callback'	=> 'vacation_lite_sanitize_integer'
	));
	
	$wp_customize->add_control('page-setting8',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide two:','vacation-lite'),
			'section'	=> 'slider_section'
	));	
	
	$wp_customize->add_setting('page-setting9',array(
			'default' => '0',
			'capability' => 'edit_theme_options',	
			'sanitize_callback'	=> 'vacation_lite_sanitize_integer'
	));
	
	$wp_customize->add_control('page-setting9',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide three:','vacation-lite'),
			'section'	=> 'slider_section'
	));	
	
	
	$wp_customize->add_setting('hide_slider',array(
			'default' => true,
			'sanitize_callback' => 'vacation_lite_sanitize_checkbox',
			'capability' => 'edit_theme_options',
	));	 

	$wp_customize->add_control( 'hide_slider', array(
		   'settings' => 'hide_slider',
    	   'section'   => 'slider_section',
    	   'label'     => __('Check this to hide slider','vacation-lite'),
    	   'type'      => 'checkbox'
     ));
	 
	 $wp_customize->add_setting('slidelinktext',array(
			'default' => __('Learn More','vacation-lite'),
			'sanitize_callback' => 'sanitize_text_field',
			'capability' => 'edit_theme_options',
	));	 

	$wp_customize->add_control( 'slidelinktext', array(
		   'settings' => 'slidelinktext',
    	   'section'   => 'slider_section',
    	   'label'     => __('Add slider link text here','vacation-lite'),
    	   'type'      => 'text'
     ));	
	
	// Slider Section End
	
	// Homepage boxes start
	
	$wp_customize->add_section(
        'welcome_section',
        array(
            'title' => __('Welcome Section', 'vacation-lite'),
            'priority' => null,
			'description'	=> __('Add welcome box content here.','vacation-lite'),	
        )
    );
	
	$wp_customize->add_setting('welcome_title',array(
			'default'	=> __('Planing Your Next Vacation','vacation-lite'),
			'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('welcome_title',array(
			'settings'	=> 'welcome_title',
			'section'	=> 'welcome_section',
			'label'		=> __('Add welcome title and subtitle here.','vacation-lite'),
			'type'		=> 'text'
	));
	
	$wp_customize->add_setting('welcome_subtitle',array(
			'default'	=> __('Ready to plan your next getway? Get advice from Vacation','vacation-lite'),
			'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('welcome_subtitle',array(
			'settings'	=> 'welcome_subtitle',
			'section'	=> 'welcome_section',
			'type'		=> 'text'
	));
	
	$wp_customize->add_setting('hide_title',array(
			'default' => true,
			'sanitize_callback' => 'vacation_lite_sanitize_checkbox',
			'capability' => 'edit_theme_options',
	));	 

	$wp_customize->add_control( 'hide_title', array(
		   'settings' => 'hide_title',
    	   'section'   => 'welcome_section',
    	   'label'     => __('Check this to hide title and subtitle','vacation-lite'),
    	   'type'      => 'checkbox'
     ));
		
	// Page settings 
	$wp_customize->add_setting(
    'page-setting1',
		array(
			'sanitize_callback' => 'vacation_lite_sanitize_dropdown_pages',
		)
	);
 
	$wp_customize->add_control(
		'page-setting1',
		array(
			'type' => 'dropdown-pages',
			'label' => esc_html__('Choose a page for box one:','vacation-lite'),
			'section' => 'welcome_section',
		)
	);
	
	$wp_customize->add_setting(
    'page-setting2',
		array(
			'sanitize_callback' => 'vacation_lite_sanitize_dropdown_pages',
		)
	);
	
	$wp_customize->add_control(
		'page-setting2',
		array(
			'type' => 'dropdown-pages',
			'label' => esc_html__('Choose a page for box Two:','vacation-lite'),
			'section' => 'welcome_section',
		)
	);
	
	$wp_customize->add_setting(
    'page-setting3',
		array(
			'sanitize_callback' => 'vacation_lite_sanitize_dropdown_pages',
		)
	);
	
	$wp_customize->add_control(
		'page-setting3',
		array(
			'type' => 'dropdown-pages',
			'label' => esc_html__('Choose a page for box Three:','vacation-lite'),
			'section' => 'welcome_section',
		)
	);

	$wp_customize->add_setting('box_hide',array(
		'default' => true,
		'sanitize_callback'	=> 'vacation_lite_sanitize_checkbox'
	));
	
	$wp_customize->add_control('box_hide',array(
			'label'	=> __('Check this to hide services box','vacation-lite'),
			'setting'	=> 'box_hide',
			'section'	=> 'welcome_section',
			'type'	=> 'checkbox'
	));
	
}
add_action( 'customize_register', 'vacation_lite_customize_register' );

//Integer
function vacation_lite_sanitize_integer( $input ) {
    if( is_numeric( $input ) ) {
        return intval( $input );
    }
}

function vacation_lite_css(){
		?>
        <style>
				a, 
				.tm_client strong,
				.postmeta a:hover,
				#sidebar ul li a:hover,
				.blog-post h3.entry-title,
				.woocommerce ul.products li.product .price,
				.main-nav ul li a:hover,
				#services-box:hover a.check{
					color:<?php echo esc_html(get_theme_mod('color_scheme','#00b1e9')); ?>;
				}
				a.blog-more:hover,
				#commentform input#submit,
				input.search-submit,
				.nivo-controlNav a.active,
				.top-right .social-icons a:hover,
				.blog-date .date,
				a.read-more,
				.copyright-wrapper,
				.header .header-inner .header-top,
				.header .header-inner .nav ul li.current-menu-item,
				.header .header-inner .nav ul li a:hover,
				#services-box a.check,
				#services-box:hover .services-inner,
				.nav-links .current, .nav-links a:hover{
					background-color:<?php echo esc_html(get_theme_mod('color_scheme','#00b1e9')); ?>;
				}
				.top-social a:hover .fa{ border:1px solid <?php echo esc_html(get_theme_mod('color_scheme','#00b1e9')); ?>;}
		</style>
	<?php }
add_action('wp_head','vacation_lite_css');