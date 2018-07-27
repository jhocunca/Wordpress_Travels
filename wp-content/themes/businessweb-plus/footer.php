<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Businessweb Plus
 */
?>
<div id="footer-wrapper">
        <div class="footer">
    	  <div class="container">             
               <?php if ( ! dynamic_sidebar( 'footer-1' ) ) : ?>             
               <?php endif; // end footer widget area ?>    
                        
               <?php if ( ! dynamic_sidebar( 'footer-2' ) ) : ?>                                  	
               <?php endif; // end footer widget area ?>   
            
               <?php if ( ! dynamic_sidebar( 'footer-3' ) ) : ?>                
               <?php endif; // end footer widget area ?>  
              
               <?php if ( ! dynamic_sidebar( 'footer-4' ) ) : ?>                 
               <?php endif; // end footer widget area ?>    
                
            <div class="clear"></div>
          </div><!--end .container-->
        </div><!--end .footer-->
        <div class="copyrightwrap">
        	<div class="container">
            	<div class="footerleft">				
                  <?php _e('&copy; 2016','businessweb-plus');?> <?php bloginfo('name'); ?>. <?php _e('All Rights Reserved', 'businessweb-plus');?>                
                </div>
                <div class="footerright">				
				<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'businessweb-plus' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'businessweb-plus' ), 'WordPress' ); ?></a>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
<?php wp_footer(); ?>

</body>
</html>