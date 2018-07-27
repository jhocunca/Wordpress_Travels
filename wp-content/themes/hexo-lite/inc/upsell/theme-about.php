<?php
/**
 * Theme about page
 *
 * @package Hexo
 */

//Add the theme page
add_action('admin_menu', 'hexo_add_theme_about');
function hexo_add_theme_about(){

	if ( !current_user_can('install_plugins') ) {
		return;
	}

	$theme_about = add_theme_page( __('About Hexo','hexo-lite'), __('About Hexo','hexo-lite'), 'manage_options', 'hexo-about', 'hexo_about_page' );
	add_action( 'load-' . $theme_about, 'hexo_about_hook_styles' );
}

//Callback
function hexo_about_page() {
	$user = wp_get_current_user();
?>
	<div class="about-container"> 
		<h1 class="about-title"><?php echo sprintf( __( 'Welcome to Hexo version %s', 'hexo-lite' ), esc_html( wp_get_theme()->version ) ); ?></h1>
		<div class="welcome">
			<p class="welcome-desc"><?php esc_html_e( 'Are you looking for a suitable real estate theme for your business or clients? Hexo Properties WordPress is a modern WordPress theme designed for real estate agents, brokers, agencies, organizations, and so on. This real estate theme is designed using high quality PSD images and latest HTML5 and CSS3 standards. This WordPress theme includes all of the functionalities needed to kick-off a real estate business. For more information, visit our website', 'hexo-lite' ); ?> <a target="_blank" href="<?php echo esc_url('https://www.digitalcenturysf.com'); ?>"><?php esc_html_e('https://www.digitalcenturysf.com','hexo-lite'); ?></a></p>
			<a class="welcome-img" target="_blank" href="<?php echo esc_url('https://digitalcenturysf.com/demo/?theme=hexo-wp'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/preview.jpg" alt="<?php echo esc_attr('hexo Lite','hexo-lite'); ?>"></a>
		
		</div>
	

		<div class="hexo-theme-tabs">

			<div class="hexo-tab-nav nav-tab-wrapper">
				<a href="#begin" data-target="begin" class="nav-button nav-tab begin active"><?php esc_html_e( 'Getting started', 'hexo-lite' ); ?></a>
				<a href="#actions" data-target="actions" class="nav-button actions nav-tab"><?php esc_html_e( 'Recommended Actions', 'hexo-lite' ); ?></a>
				<a href="#support" data-target="support" class="nav-button support nav-tab"><?php esc_html_e( 'Support', 'hexo-lite' ); ?></a>
				<a href="#table" data-target="table" class="nav-button table nav-tab"><?php esc_html_e( 'Free vs Pro', 'hexo-lite' ); ?></a>
			</div>

			<div class="hexo-tab-wrapper">

				<div id="#begin" class="hexo-tab begin show">
					<h3><?php esc_html_e( 'Step 1 - Implement recommended actions', 'hexo-lite' ); ?></h3>
					<p><?php esc_html_e( 'We\'ve made a list of steps for you to follow to get the most of Hexo.', 'hexo-lite' ); ?></p>
					<p><a class="actions" href="#actions"><?php esc_html_e( 'Check recommended actions', 'hexo-lite' ); ?></a></p>
					<hr>
					<h3><?php esc_html_e( 'Step 2 - Read documentation', 'hexo-lite' ); ?></h3>
					<p><?php esc_html_e( 'Our documentation (including video tutorials) will have you up and running in no time.', 'hexo-lite' ); ?></p>
					<p><a href="http://docs.digitalcenturysf.com/acategory/hexo-lite/" target="_blank"><?php esc_html_e( 'Documentation', 'hexo-lite' ); ?></a></p>
					<hr>
					<h3><?php esc_html_e( 'Step 3 - Customize', 'hexo-lite' ); ?></h3>
					<p><?php esc_html_e( 'Use the Customizer to make Hexo your own.', 'hexo-lite' ); ?></p>
					<p><a class="button button-primary button-large" href="<?php echo admin_url( 'customize.php' ); ?>"><?php esc_html_e( 'Go to Customizer', 'hexo-lite' ); ?></a></p>
				</div>

				<div id="#actions" class="hexo-tab actions">
					<h3><?php esc_html_e( 'Install: Redux Framework', 'hexo-lite' ); ?></h3>
					<p><?php esc_html_e( 'It is highly recommended that you install Redux Framework. It will enable the core functionality of this theme.', 'hexo-lite' ); ?></p>
					
					<?php if ( ! class_exists( 'ReduxFramework' ) ): ?>
					<?php // $so_url = wp_nonce_url(self_admin_url('update.php?action=install-plugin&plugin=redux-framework'), 'install-plugin_redux-framework'); ?>
					<?php $so_url = self_admin_url('themes.php?page=tgmpa-install-plugins'); ?>
					<p>
						<a target="_blank" class="install-now button" href="<?php echo esc_url( $so_url ); ?>"><?php esc_html_e( 'Install and Activate', 'hexo-lite' ); ?></a>
					</p>
					<?php else : ?>
						<p style="color:#23d423;font-style:italic;font-size:14px;"><?php esc_html_e( 'Plugin installed and active!', 'hexo-lite' ); ?></p>
					<?php endif; ?>
 
				</div>

				<div id="#support" class="hexo-tab support">
					<div class="column-wrapper">
						<div class="tab-column">
						<span class="dashicons dashicons-sos"></span>
						<h3><?php esc_html_e( 'Visit our forums', 'hexo-lite' ); ?></h3>
						<p><?php esc_html_e( 'Need help? Go ahead and visit our support forums and we\'ll be happy to assist you with any theme related questions you might have', 'hexo-lite' ); ?></p>
							<a href="http://digitalcenturysf.com/support/" target="_blank"><?php esc_html_e( 'Visit the forums', 'hexo-lite' ); ?></a>				
							</div>
						<div class="tab-column">
						<span class="dashicons dashicons-book-alt"></span>
						<h3><?php esc_html_e( 'Documentation', 'hexo-lite' ); ?></h3>
						<p><?php esc_html_e( 'Our documentation can help you learn how to use the theme and also provides you with premade code snippets and answers to FAQs.', 'hexo-lite' ); ?></p>
						<a href="http://docs.digitalcenturysf.com/acategory/hexo-lite/" target="_blank"><?php esc_html_e( 'See the Documentation', 'hexo-lite' ); ?></a>
						</div>
					</div>
				</div>
				<div id="#table" class="hexo-tab table">
				<table class="widefat fixed featuresList">
				   <thead> 
					<tr> 
					 <td><strong><h3><?php esc_html_e( 'Feature', 'hexo-lite' ); ?></h3></strong></td>
					 <td style="width:20%;"><strong><h3><?php esc_html_e( 'hexo Lite', 'hexo-lite' ); ?></h3></strong></td>
					 <td style="width:20%;"><strong><h3><?php esc_html_e( 'hexo Pro', 'hexo-lite' ); ?></h3></strong></td>
					</tr> 
				   </thead> 
				   <tbody> 
					<tr> 
					 <td><?php esc_html_e( 'Responsive', 'hexo-lite' ); ?></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr>  
					<tr> 
					 <td><?php esc_html_e( 'Social Icons', 'hexo-lite' ); ?></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr> 
					<tr> 
					 <td><?php esc_html_e( 'Slider or image header', 'hexo-lite' ); ?></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr> 
					<tr> 
					 <td><?php esc_html_e( 'Front Page Blocks', 'hexo-lite' ); ?></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr> 
					<tr> 
					 <td><?php esc_html_e( 'Translation ready', 'hexo-lite' ); ?></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr>  
					<tr> 
					 <td><?php esc_html_e( 'Blog options', 'hexo-lite' ); ?></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr> 
					<tr> 
					 <td><?php esc_html_e( 'Footer options', 'hexo-lite' ); ?></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr>  
					<tr> 
					 <td><?php esc_html_e( 'Access to all Google Fonts', 'hexo-lite' ); ?></td>
					 <td class="greenFeature"><span class="dashicons dashicons-no-alt dash-red"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr>   
					<tr> 
					 <td><?php esc_html_e( 'Adanced Property Search', 'hexo-lite' ); ?></td>
					 <td class="greenFeature"><span class="dashicons dashicons-no-alt dash-red"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr>  
					<tr> 
					 <td><?php esc_html_e( 'Footer Credits', 'hexo-lite' ); ?></td>
					 <td class="redFeature"><span class="dashicons dashicons-no-alt dash-red"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr> 
					<tr> 
					 <td><?php esc_html_e( 'Advanced CSS and JS', 'hexo-lite' ); ?></td>
					 <td class="greenFeature"><span class="dashicons dashicons-no-alt dash-red"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr>  
					<tr> 
					 <td><?php esc_html_e( 'Extra widgets (About, Recent Property, Get in Touch)', 'hexo-lite' ); ?></td>
					 <td class="redFeature"><span class="dashicons dashicons-no-alt dash-red"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr> 
					<tr> 
					 <td><?php esc_html_e( 'Extra Theme Options (Blog Page, Search Page, Archive Page, Csutom CSS)', 'hexo-lite' ); ?></td>
					 <td class="redFeature"><span class="dashicons dashicons-no-alt dash-red"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr>  
					<tr> 
					 <td><?php esc_html_e( 'Extra page section ( Properties, testimonail, Isotop filter, Agents, contact form)', 'hexo-lite' ); ?></td>
					 <td class="redFeature"><span class="dashicons dashicons-no-alt dash-red"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr> 
					<tr> 
					 <td><?php esc_html_e( 'Priority support', 'hexo-lite' ); ?></td>
					 <td class="redFeature"><span class="dashicons dashicons-no-alt dash-red"></span></td>
					 <td class="greenFeature"><span class="dashicons dashicons-yes dash-green"></span></td>
					</tr> 
				   </tbody> 
				  </table>
				  <p style="text-align: right;"><a class="button button-primary button-large" href="https://digitalcenturysf.com/demo/?theme=hexo-wp"><?php esc_html_e('Buy Hexo Pro ', 'hexo-lite'); ?></a></p>
				</div>		
			</div>
		</div>
	</div>
<?php
}

//Styles
function hexo_about_hook_styles(){
	add_action( 'admin_enqueue_scripts', 'hexo_about_page_styles' );
}
function hexo_about_page_styles() {
	wp_enqueue_style( 'hexo-about-style', get_template_directory_uri() . '/inc/upsell/css/about-page.css', array(), true );

	wp_enqueue_script( 'hexo-about-script', get_template_directory_uri() . '/inc/upsell/js/about-page.js', array('jquery'),'', true );

}