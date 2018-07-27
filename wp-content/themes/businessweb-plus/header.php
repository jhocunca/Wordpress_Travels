<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div class="container">
 *
 * @package Businessweb Plus
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="headerwrap">
 <div class="headertop">
   <div class="container">    
      <?php if ( ! dynamic_sidebar( 'headerinfo-widget' ) ) : ?>      
      <?php endif; // end sidebar widget area ?>   
   </div><!-- .container -->  
</div><!-- .headertop --> 
<div class="header">
        <div class="container">
            <div class="logo">
				<?php businessweb_plus_the_custom_logo(); ?>   
                <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo('name'); ?></a></h1>                
                <?php $description = get_bloginfo( 'description', 'display' );
                        if ( $description || is_customize_preview() ) : ?>
                            <span><?php echo $description; ?></span>
                <?php endif; ?>               
            </div><!-- logo -->
             <div class="toggle">
                <a class="toggleMenu" href="#"><?php _e('Menu','businessweb-plus'); ?></a>
             </div><!-- toggle --> 
            <div class="headernav">
                    <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
            </div><!-- site-nav -->
            <div class="clear"></div>
        </div><!-- container -->
  </div><!--.header -->
</div><!--.headerwrap -->

<?php if ( is_front_page() && !is_home() ) { ?>
	<?php $hideslide = get_theme_mod('disabled_slides', '1'); ?>
		<?php if($hideslide == ''){ ?>
              <?php for($sld=2; $sld<5; $sld++) { ?>
                	<?php if( get_theme_mod('page-setting'.$sld)) { ?>
                	<?php $slidequery = new WP_query('page_id='.get_theme_mod('page-setting'.$sld,true)); ?>
                	<?php while( $slidequery->have_posts() ) : $slidequery->the_post();
                			$image = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
                			$img_arr[] = $image;
               				$id_arr[] = $post->ID;
                		endwhile;
                	}
                }
                ?>
<?php if(!empty($id_arr)){ ?>
        <div id="slider" class="nivoSlider">
            <?php 
            $i=1;
            foreach($img_arr as $url){ ?>
            <?php if(!empty($url)){ ?>
            <img src="<?php echo $url; ?>" title="#slidecaption<?php echo $i; ?>" />
            <?php }else{ ?>
            <img src="<?php echo esc_url( get_template_directory_uri() ) ; ?>/images/slides/slider-default.jpg" title="#slidecaption<?php echo $i; ?>" />
            <?php } ?>
            <?php $i++; }  ?>
        </div>   
<?php 
	$i=1;
		foreach($id_arr as $id){ 
		$title = get_the_title( $id ); 
		$post = get_post($id); 
		$content = esc_html( wp_trim_words( $post->post_content, 20, '' ) );
?>                 
<div id="slidecaption<?php echo $i; ?>" class="nivo-html-caption">
    <div class="slide_info">
    	<h2><?php echo $title; ?></h2>
    	<p><?php echo $content; ?></p>  
        <?php
		 $slider_readmore = get_theme_mod('slider_readmore');
		 if( !empty($slider_readmore) ){ ?>
          <a class="slide_more" href="<?php the_permalink(); ?>"><?php echo $slider_readmore; ?></a>
	  	 <?php } ?>      
    </div>
</div>      
    <?php $i++; } ?>       
     </div><!--end .slider area-->
     <?php wp_reset_postdata(); ?>
<div class="clear"></div>        
<?php } ?>
<?php } } ?>      
        
<?php if ( is_front_page() && ! is_home() ) { ?>  
<?php
$hidepageboxes = get_theme_mod('disabled_pgboxes', '1');
if( $hidepageboxes == ''){
?>    
	<section id="wrapsecond">
      <div class="container">
          <div class="services-wrap">                       
                        <?php for($v=1; $v<5; $v++) { ?>       
                        <?php if( get_theme_mod('page-column'.$v,false)) { ?>          
                            <?php $querygt = new WP_query('page_id='.get_theme_mod('page-column'.$v,true)); ?>				
                                    <?php while( $querygt->have_posts() ) : $querygt->the_post(); ?> 
                                    <div class="fourbox <?php if($v % 4 == 0) { echo "last_column"; } ?>">                      
                                    <a href="<?php the_permalink(); ?>">
                                      <?php if(has_post_thumbnail() ) { ?>
                                        <div class="thumbbx"><?php the_post_thumbnail();?></div>
                                      <?php } ?>
                                      <h3><?php the_title(); ?></h3>
                                    </a> 
                                    <p><?php echo wp_trim_words( get_the_content(), 20, '...' ); ?></p>
                                    <a class="ReadMore" href="<?php the_permalink(); ?>">                                      
                                     <?php _e('Read More','businessweb-plus'); ?>
                                    </a>                                    
                                    </div>
                                    <?php endwhile;
                                    wp_reset_postdata(); ?>
                                    
                        <?php } } ?>  
                    <div class="clear"></div>  
               </div><!-- services-wrap-->
              <div class="clear"></div>
            </div><!-- container -->
       </section><!-- #wrapsecond-->
   <?php } ?> 
   
  <?php
    $hidewelcome = get_theme_mod('disabled_welcomepg', '1');
    if( $hidewelcome == ''){
   ?>           
   <section id="wrapfirst">
          <div class="container">
            <div class="welcomewrap">
					<?php if( get_theme_mod('welcome-page1')) { ?>
                    <?php $queryvar = new WP_query('page_id='.get_theme_mod('welcome-page1' ,true)); ?>
                    <?php while( $queryvar->have_posts() ) : $queryvar->the_post();?> 
                    <div class="welcomethumb">
                      <?php the_post_thumbnail();?>  
                     </div>		
                    <div class="welcomecontent">
                     <h3><?php the_title(); ?></h3> 
                     <div style="margin-bottom:px;" class="UnderLine"><span class="hr-style"></span></div>        
                     <?php the_content(); ?>
                     <a class="ReadMore" href="<?php the_permalink(); ?>">                                      
                        <?php _e('Read More','businessweb-plus'); ?>
                      </a> 
                     </div>                                       
                     <div class="clear"></div>
                    <?php endwhile;
					  wp_reset_postdata(); ?> 
               <?php } ?>
           </div><!-- welcomewrap-->
         <div class="clear"></div>
      </div><!-- container -->
  </section> <!-- #wrapfirst--> 
  <?php } ?>
       
 <?php } ?>