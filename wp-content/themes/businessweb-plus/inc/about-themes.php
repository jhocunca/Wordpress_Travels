<?php
/**
 * Businessweb Plus About Theme
 *
 * @package Businessweb Plus
 */

//about theme info
add_action( 'admin_menu', 'businessweb_plus_abouttheme' );
function businessweb_plus_abouttheme() {    	
	add_theme_page( __('About Theme Info', 'businessweb-plus'), __('About Theme Info', 'businessweb-plus'), 'edit_theme_options', 'businessweb_plus_guide', 'businessweb_plus_mostrar_guide');   
} 

//guidline for about theme
function businessweb_plus_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrap-GT">
	<div class="gt-left">
   		   <div class="heading-gt">
			  <?php _e('About Theme Info', 'businessweb-plus'); ?>
		   </div>
          <p><?php _e('Businessweb Plus is a free creative WordPress theme. It is user friendly customizer options with compatible WordPress latest version. It is suitable for all type your Business Websites.','businessweb-plus'); ?></p>
<div class="heading-gt"><?php _e('Theme Features', 'businessweb-plus'); ?></div>
 

<div class="col-2">
  <h4><?php _e('Theme Customizer', 'businessweb-plus'); ?></h4>
  <div class="description"><?php _e('The built-in customizer panel quickly change aspects of the design and display changes live before saving them.', 'businessweb-plus'); ?></div>
</div>

<div class="col-2">
  <h4><?php _e('Responsive Ready', 'businessweb-plus'); ?></h4>
  <div class="description"><?php _e('The themes layout will automatically adjust and fit on any screen resolution and looks great on any device. Fully optimized for iPhone and iPad.', 'businessweb-plus'); ?></div>
</div>

<div class="col-2">
<h4><?php _e('Cross Browser Compatible', 'businessweb-plus'); ?></h4>
<div class="description"><?php _e('Our themes are tested in all mordern web browsers and compatible with the latest version including Chrome,Firefox, Safari, Opera, IE8 and above.', 'businessweb-plus'); ?></div>
</div>

<div class="col-2">
<h4><?php _e('E-commerce', 'businessweb-plus'); ?></h4>
<div class="description"><?php _e('Fully compatible with WooCommerce plugin. Just install the plugin and turn your site into a full featured online shop and start selling products.', 'businessweb-plus'); ?></div>
</div>
<div>&nbsp;</div>
</div><!-- .gt-left -->
	
	<div class="gt-right">			
			<div style="font-weight:bold;">				
				<a href="<?php echo businessweb_plus_live_demo; ?>" target="_blank"><?php _e('Live Demo', 'businessweb-plus'); ?></a> | 
				<a href="<?php echo businessweb_plus_protheme_url; ?>"><?php _e('Purchase Pro', 'businessweb-plus'); ?></a> | 
				<a href="<?php echo businessweb_plus_theme_doc; ?>" target="_blank"><?php _e('Theme Documentation', 'businessweb-plus'); ?></a>
                <div>&nbsp;</div>
				<hr />  
                <ul>
                 <li><?php _e('Theme Customizer', 'businessweb-plus'); ?></li>
                 <li><?php _e('Responsive Ready', 'businessweb-plus'); ?></li>
                 <li><?php _e('Cross Browser Compatible', 'businessweb-plus'); ?></li>
                 <li><?php _e('E-commerce', 'businessweb-plus'); ?></li>
                 <li><?php _e('Contact Form 7 Plugin Compatible', 'businessweb-plus'); ?></li>  
                 <li><?php _e('User Friendly', 'businessweb-plus'); ?></li> 
                 <li><?php _e('Translation Ready', 'businessweb-plus'); ?></li>
                 <li><?php _e('Many Other Plugins  Compatible', 'businessweb-plus'); ?></li>   
                </ul>              
               
			</div>		
	</div><!-- .gt-right-->
    <div class="clear"></div>
</div><!-- .wrap-GT -->
<?php } ?>