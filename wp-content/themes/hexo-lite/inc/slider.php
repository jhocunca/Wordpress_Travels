<?php
/**
 *
 * This is the template that displays for slider.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hexo_lite
 */
function hexo_lite_slider_temp(){
global $hexo_lite;  
define('SLIDE_IMG',get_template_directory_uri().'/img/');  
if(isset($hexo_lite['front-pg-slider'])){
    $aslider_enable = ('1'!=$hexo_lite['front-pg-slider']) ? $hexo_lite['front-pg-slider'] : 1;
}else{
    $aslider_enable = 1;
}
if(('1'==$aslider_enable && is_front_page()) || ('1'==$aslider_enable && is_home() && is_front_page())):   


        $images = array(
            'slide_img_1' => (!empty($hexo_lite['slide_img_1']['url'])) ? $hexo_lite['slide_img_1']['url'] : SLIDE_IMG.'slide1.jpg', 
            'slide_img_2' => (!empty($hexo_lite['slide_img_2']['url'])) ? $hexo_lite['slide_img_2']['url'] : SLIDE_IMG.'slide2.jpg', 
            'slide_img_3' => (!empty($hexo_lite['slide_img_3']['url'])) ? $hexo_lite['slide_img_3']['url'] : '', 
            'slide_img_4' => (!empty($hexo_lite['slide_img_4']['url'])) ? $hexo_lite['slide_img_4']['url'] : '' 
        );
        $titles = array(
            'slide_title_1' => (!empty($hexo_lite['slide_title_1'])) ? $hexo_lite['slide_title_1'] : esc_html__('FIND YOUR DREAMY HOUSE','hexo-lite'),
            'slide_title_2' => (!empty($hexo_lite['slide_title_2'])) ? $hexo_lite['slide_title_2'] : esc_html__('SHARE YOUR DREAM WITH HEXO LTD','hexo-lite'),
            'slide_title_3' => (!empty($hexo_lite['slide_title_3'])) ? $hexo_lite['slide_title_3'] : '',
            'slide_title_4' => (!empty($hexo_lite['slide_title_4'])) ? $hexo_lite['slide_title_4'] : ''
        );
        $subtitles = array(
            'slide_subtitle_1' => (!empty($hexo_lite['slide_subtitle_1'])) ? $hexo_lite['slide_subtitle_1'] : esc_html__('Real Estate is comprised of approximately 10,000 independently owned and operated franchised broker offices in 78 countries and territories worldwide with more than 100,000 independent sales professionals.','hexo-lite'),
            'slide_subtitle_2' => (!empty($hexo_lite['slide_subtitle_2'])) ? $hexo_lite['slide_subtitle_2'] : esc_html__('Real Estate is comprised of approximately 10,000 independently owned and operated franchised broker offices in 78 countries and territories worldwide with more than 100,000 independent sales professionals.','hexo-lite'),
            'slide_subtitle_3' => (!empty($hexo_lite['slide_subtitle_3'])) ? $hexo_lite['slide_subtitle_3'] : '',
            'slide_subtitle_4' => (!empty($hexo_lite['slide_subtitle_4'])) ? $hexo_lite['slide_subtitle_4'] : '',
        );
        $buttonlabel = array(
            'slide_btntitle_1' => (!empty($hexo_lite['slide_btntitle_1'])) ? $hexo_lite['slide_btntitle_1'] : esc_html__('Read More','hexo-lite'), 
            'slide_btntitle_2' => (!empty($hexo_lite['slide_btntitle_2'])) ? $hexo_lite['slide_btntitle_2'] : esc_html__('Read More','hexo-lite'), 
            'slide_btntitle_3' => (!empty($hexo_lite['slide_btntitle_3'])) ? $hexo_lite['slide_btntitle_3'] : '', 
            'slide_btntitle_4' => (!empty($hexo_lite['slide_btntitle_4'])) ? $hexo_lite['slide_btntitle_4'] : ''
        );
        $buttonurl = array(
            'slide_btnurl_1' => (!empty($hexo_lite['slide_btnurl_1'])) ? $hexo_lite['slide_btnurl_1'] : '#',  
            'slide_btnurl_2' => (!empty($hexo_lite['slide_btnurl_2'])) ? $hexo_lite['slide_btnurl_2'] : '#',  
            'slide_btnurl_3' => (!empty($hexo_lite['slide_btnurl_3'])) ? $hexo_lite['slide_btnurl_3'] : '',  
            'slide_btnurl_4' => (!empty($hexo_lite['slide_btnurl_4'])) ? $hexo_lite['slide_btnurl_4'] : ''
        );
        
    ?> 

	<!-- Main slider area start -->
	<section id="slider" class="slider-area">
		<!-- slider -->
		<div class="bend niceties preview-2">
			<div id="ensign-nivoslider" class="slides"> 
                <?php $s = 1; ?>
                <?php foreach ($images as $key => $image) {
                    if ( $image ) {
                        echo '<img src="'.$images['slide_img_'.$s].'" alt="" title="#slider-direction-'.$s.'"  />';
                    }
                    $s++;
                } ?>              
            </div>
            <!-- direction  -->
        
            <?php $s = 1;
            foreach ($images as $key => $image) {
                if ( $image ) {
                    echo '    
                        <div id="slider-direction-'.$s.'" class="t-cn slider-direction">
                             <div class="slider-content t-cn s-tb slider-1">
                                <div class="title-container s-tb-c title-compress"> 
									<div class="content content-bg-1 text-entry">
										<div class="slider-fashion border-p">
											<h2>'.$titles['slide_title_'.$s].'</h2>
										</div>
										<div class="text typography-block">'.$subtitles['slide_subtitle_'.$s].'</div>
										<a class="button" href="'.$buttonurl['slide_btnurl_'.$s].'">'.$buttonlabel['slide_btntitle_'.$s].'</a>
									</div> 
                                </div>
                            </div>  
                        </div>';
                    }
                $s++;
            } ?>    
         
		</div>
	<!-- slider end-->
	</section>
	<!-- Main slider area end -->  
    <?php 
endif; 
} ?>


	  