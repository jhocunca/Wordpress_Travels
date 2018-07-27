<?php  
/**
 * The template for Framework options functions.
 * 
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Hexo_lite
 */

Class Hexo_Lite_Options{
   
    // main header logo area
    public function main_headerLogo(){
        global $hexo_lite;
       $logo = get_theme_mod( 'custom_logo' );
       $image = wp_get_attachment_image_src( $logo , 'full' ); 
        //$logo = get_theme_mod( 'v_logo_img' );
        if( !empty($logo) ){
       ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo esc_url($image[0]); ?>" alt="<?php esc_attr_e('site logo','hexo-lite'); ?>"></a>
        <?php }else{ ?>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><span><?php bloginfo( 'name' ); ?></span></a>
       <?php }
    } 
 
    // copyright test options
    public function copyrightText(){ 
        $copy_text = get_theme_mod( 'v_copyright_text' );
        if(!empty($copy_text)){
       ?>
        <p><?php echo esc_html($copy_text); ?></p>
       <?php
        }else{
       ?>
        <p><a href="<?php echo esc_url('http://digitalcenturysf.com/'); ?>"><?php esc_html_e('WordPress Themes','hexo-lite'); ?></a></p>
       <?php
        }
    }


    // slider options
    public function hexo_lite_slider_autoplay(){
        global $hexo_lite;
        if(''!=$hexo_lite['slide-autoplay']){
            if(1==$hexo_lite['slide-autoplay']){
                return false;
            }else{
                return true;
            } 
        }else{
            return false;
        } 
    }
    public function hexo_lite_slider_effect(){
        global $hexo_lite;
        if(isset($hexo_lite['slide-effect'])){
            return $hexo_lite['slide-effect'];
        }else{
            return "slideInLeft";
        } 
    }
    public function hexo_lite_slider_number(){
        global $hexo_lite;
        if(isset($hexo_lite['slide-number'])){
            return $hexo_lite['slide-number'];
        }else{
            return 9;
        } 
    }
    public function hexo_lite_slider_speed(){
        global $hexo_lite;
        if(!empty($hexo_lite['slide-speed'])){
            return $hexo_lite['slide-speed'];
        }else{
            return 500;
        } 
    }
    public function hexo_lite_sliders_speed(){
        global $hexo_lite;
        if(!empty($hexo_lite['sslide-speed'])){
            return $hexo_lite['sslide-speed'];
        }else{
            return 5000;
        } 
    }


    public function hexo_lite_about_realestate(){
        global $hexo_lite;
        $sectiton_title =  (''!=$hexo_lite['sectiton_title']) ? $hexo_lite['sectiton_title'] : 'ABOUT REAL ESTATE';
        $short_description =  (''!=$hexo_lite['short_description']) ? $hexo_lite['short_description'] : 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor as, vel tincidunt ipsum posuere    Fusce sodales lacus ut pellentes sollicitudin. Duis iaculis, arcu ut hendrerit pharetra. Duis iaculis, arcu ut hendrerit pharetra.';
        $left_content =  (''!=$hexo_lite['left_contetn']) ? $hexo_lite['left_contetn'] : '<h3>Our Story</h3>
<p class="para-margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor arcu non ligula convallis, vel tincidunt ipsum posuerece sodales lacus ut pellentessollicitudin. Duis iaculis, arcu ut hendrerit pharetra.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor. pharetra.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor.</p>
<h3>Company Mission</h3>
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor arcu non ligula convallis, vel tincidunt ipsum posuerece sodales lacus ut pellentessollicitudin. Duis iaculis, arcu ut hendrerit pharetra.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor. pharetra.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor.</p>'; 
        $right_img =  (isset($hexo_lite['right_img']['url']) && ''!=$hexo_lite['right_img']['url']) ? $hexo_lite['right_img']['url'] : (HEXO_LITE_URI.'img/video.jpg');
        ?>
            <section id="about-real-estate" class="real-estate-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="section-title text-center">
                                <h2><?php echo $sectiton_title; ?></h2>
                            </div>
                            <div class="section-separator text-center">
                                <img src="<?php echo HEXO_LITE_URI; ?>img/hexo-ltd-dns.png" alt="">
                                <i class="fa fa-th-large"></i>
                                <img src="<?php echo HEXO_LITE_URI; ?>img/hexo-ltd-dns.png" alt="">
                            </div>                          
                            <div class="section-content text-center">
                                <p><?php echo $short_description; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="our-story">
                                <?php echo $left_content; ?>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="story-video">
                                <a href="#"><img src="<?php echo $right_img; ?>" alt="image"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php
    }

    public function hexo_lite_booking_area(){
        global $hexo_lite;
        $book_title =  (''!=$hexo_lite['book_title']) ? $hexo_lite['book_title'] : 'Book Your Appartment'; 
        $book_phone =  (''!=$hexo_lite['book_phone']) ? $hexo_lite['book_phone'] : 'Call Us On: (123) 9999 5555'; 
        $book_bg_img =  (isset($hexo_lite['book_bg_img']['url']) && ''!=$hexo_lite['book_bg_img']['url']) ? $hexo_lite['book_bg_img']['url'] : (HEXO_LITE_URI.'img/book.jpg');
        ?>
        <section class="book-apartment-area" style="background: url(<?php echo $book_bg_img; ?>) no-repeat fixed center center;">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3">
                        <div class="book-apartment text-center">
                            <div class="bg-border">
                                <h3><?php echo $book_title; ?></h3>
                                <p><?php echo $book_phone; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
    }

    public function hexo_lite_gmap(){
        global $hexo_lite;
        $map =  (''!=$hexo_lite['map_op']) ? $hexo_lite['map_op'] : '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.0835337345043!2d-122.39838798516148!3d37.788082079756954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80858063282cef0d%3A0xb6fc92529884e32b!2sSilicon+Valley+Bank!5e0!3m2!1sen!2sbd!4v1531375642942" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>';  
        ?>
        <div id="hexo_map">
            <?php echo $map; ?>
        </div>
        <?php
        
    }

}




