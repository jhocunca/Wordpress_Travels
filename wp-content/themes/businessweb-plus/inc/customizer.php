<?php
/**
 * Businessweb Plus Theme Customizer
 *
 * @package Businessweb Plus
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function businessweb_plus_customize_register( $wp_customize ) {	
	//Add a class for titles
    class businessweb_plus_Info extends WP_Customize_Control {
        public $type = 'info';
        public $label = '';
        public function render_content() {
        ?>
			<h3><?php echo esc_html( $this->label ); ?></h3>
        <?php
        }
    }
	
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	
	$wp_customize->add_setting('color_scheme',array(
			'default'	=> '#0294CF',
			'sanitize_callback'	=> 'sanitize_hex_color'
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'color_scheme',array(
			'label' => __('Color Scheme','businessweb-plus'),			
			 'description'	=> __('More color options in PRO Version','businessweb-plus'),	
			'section' => 'colors',
			'settings' => 'color_scheme'
		))
	);	
	
	$wp_customize->add_setting('bodyfont_color',array(
			'default'	=> '#666666',
			'sanitize_callback'	=> 'sanitize_hex_color'
	));
	
	$wp_customize->add_control(
		new WP_Customize_Color_Control($wp_customize,'bodyfont_color',array(
			'label' => __('Body Font Color','businessweb-plus'),			
			 'description'	=> __('select body font color','businessweb-plus'),	
			'section' => 'colors',
			'settings' => 'bodyfont_color'
		))
	);		 
	
	// Slider Section		
	$wp_customize->add_section( 'slider_section', array(
            'title' => __('Slider Settings', 'businessweb-plus'),
            'priority' => null,
            'description'	=> __('Recommended Featured Image Size ( 1300x500 )','businessweb-plus'),		
        )
    );	
	
	$wp_customize->add_setting('page-setting2',array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('page-setting2',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide one:','businessweb-plus'),
			'section'	=> 'slider_section'
	));	
	
	$wp_customize->add_setting('page-setting3',array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('page-setting3',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide two:','businessweb-plus'),
			'section'	=> 'slider_section'
	));	
	
	$wp_customize->add_setting('page-setting4',array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control('page-setting4',array(
			'type'	=> 'dropdown-pages',
			'label'	=> __('Select page for slide three:','businessweb-plus'),
			'section'	=> 'slider_section'
	));	// Slider Section
	
	 $wp_customize->add_setting('slider_readmore',array(
	 		'default'	=> null,
			'sanitize_callback'	=> 'sanitize_text_field'
	 ));
	 
	 $wp_customize->add_control('slider_readmore',array(
	 		'settings'	=> 'slider_readmore',
			'section'	=> 'slider_section',
			'label'		=> __('Add text for slide read more button','businessweb-plus'),
			'type'		=> 'text'
	 ));// Slider Read more	
	
	$wp_customize->add_setting('disabled_slides',array(
				'default' => true,
				'sanitize_callback' => 'sanitize_text_field',
				'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'disabled_slides', array(
			   'settings' => 'disabled_slides',
			   'section'   => 'slider_section',
			   'label'     => __('Uncheck To Enable This Section','businessweb-plus'),
			   'type'      => 'checkbox'
	 ));//Disable Slider Section	 
	 
	
	// Home Four Boxes Section 	
	$wp_customize->add_section('pageboxes_section', array(
		'title'	=> __('Homepage Four Boxes Section','businessweb-plus'),
		'description'	=> __('Select Pages from the dropdown for homepage four boxes section','businessweb-plus'),
		'priority'	=> null
	));		
	
	$wp_customize->add_setting('page-column1',	array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
		));
 
	$wp_customize->add_control(	'page-column1',array('type' => 'dropdown-pages',			
			'section' => 'pageboxes_section',
	));		
	
	$wp_customize->add_setting('page-column2',	array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
 
	$wp_customize->add_control(	'page-column2',array('type' => 'dropdown-pages',			
			'section' => 'pageboxes_section',
	));
	
	$wp_customize->add_setting('page-column3',	array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
 
	$wp_customize->add_control(	'page-column3',array('type' => 'dropdown-pages',			
			'section' => 'pageboxes_section',
	));	
	
	$wp_customize->add_setting('page-column4',	array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
 
	$wp_customize->add_control(	'page-column4',array('type' => 'dropdown-pages',			
			'section' => 'pageboxes_section',
	));	
	
	$wp_customize->add_setting('disabled_pgboxes',array(
			'default' => true,
			'sanitize_callback' => 'sanitize_text_field',
			'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'disabled_pgboxes', array(
			   'settings' => 'disabled_pgboxes',
			   'section'   => 'pageboxes_section',
			   'label'     => __('Uncheck To Enable This Section','businessweb-plus'),
			   'type'      => 'checkbox'
	 ));//Disable Homepage boxes Section	
	 
	
	// Home Welcome Section 	
	$wp_customize->add_section('welcome_section',array(
		'title'	=> __('Homepage Welcome Section','businessweb-plus'),
		'description'	=> __('Select Page from the dropdown for second section','businessweb-plus'),
		'priority'	=> null
	));
	
	$wp_customize->add_setting('welcome-page1',	array(
			'default'	=> '0',			
			'capability' => 'edit_theme_options',
			'sanitize_callback'	=> 'absint'
	));
	
	$wp_customize->add_control(	'welcome-page1',array('type' => 'dropdown-pages',			
			'section' => 'welcome_section',
	));		
	
	$wp_customize->add_setting('disabled_welcomepg',array(
			'default' => true,
			'sanitize_callback' => 'sanitize_text_field',
			'capability' => 'edit_theme_options',
	));	 
	
	$wp_customize->add_control( 'disabled_welcomepg', array(
			   'settings' => 'disabled_welcomepg',
			   'section'   => 'welcome_section',
			   'label'     => __('Uncheck To Enable This Section','businessweb-plus'),
			   'type'      => 'checkbox'
	 ));//Home Welcome Section 	
	
	
}
add_action( 'customize_register', 'businessweb_plus_customize_register' );

function businessweb_plus_custom_css(){
		?>
        	<style type="text/css"> 					
					a, .posts_lists h2 a:hover,
					#sidebar ul li a:hover,								
					.headernav ul li a:hover, .headernav ul li.current_page_item a,
					.services-wrap .one_third:hover h4,
					.services-wrap .one_third:hover .MoreLink,
					.slide_info .slide_more:hover,
					.posts_lists h3 a:hover,
					.cols-4 ul li a:hover, .cols-4 ul li.current_page_item a,					
					.ReadMore:hover,
					.fourbox:hover h3,
					.logo a
					{ color:<?php echo esc_html( get_theme_mod('color_scheme','#0294CF')); ?>;}
					 
					
					.pagination ul li .current, .pagination ul li a:hover, 
					#commentform input#submit:hover,					
					.nivo-controlNav a.active,									
					.wpcf7 input[type='submit']					
					{ background-color:<?php echo esc_html( get_theme_mod('color_scheme','#0294CF')); ?>;}
					
					.headernav ul li a:hover, .headernav ul li.current_page_item a,
					.slide_info .slide_more:hover,
					.services-wrap .one_third:hover .MoreLink,
					.ReadMore:hover,
					.headertop
					{ border-color:<?php echo esc_html( get_theme_mod('color_scheme','#0294CF')); ?>;}
					
					body
					{ color:<?php echo esc_html( get_theme_mod('bodyfont_color','#666666')); ?>;}
					
			</style> 
<?php     
}
         
add_action('wp_head','businessweb_plus_custom_css');	

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function businessweb_plus_customize_preview_js() {
	wp_enqueue_script( 'businessweb_plus_customizer', get_template_directory_uri() . '/js/customize-preview.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'businessweb_plus_customize_preview_js' );