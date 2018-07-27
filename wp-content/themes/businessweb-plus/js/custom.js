jQuery(window).load(function() {
		if(jQuery('#slider') > 0) {
        jQuery('.nivoSlider').nivoSlider({
        	effect:'fade',
    });
		} else {
			jQuery('#slider').nivoSlider({
        	effect:'fade',
    });
		}
});
	

// NAVIGATION CALLBACK
var ww = jQuery(window).width();
jQuery(document).ready(function() { 
	jQuery(".headernav li a").each(function() {
		if (jQuery(this).next().length > 0) {
			jQuery(this).addClass("parent");
		};
	})
	jQuery(".toggleMenu").click(function(e) { 
		e.preventDefault();
		jQuery(this).toggleClass("active");
		jQuery(".headernav").slideToggle('fast');
	});
	adjustMenu();
})

// navigation orientation resize callbak
jQuery(window).bind('resize orientationchange', function() {
	ww = jQuery(window).width();
	adjustMenu();
});

var adjustMenu = function() {
	if (ww < 981) {
		jQuery(".toggleMenu").css("display", "block");
		if (!jQuery(".toggleMenu").hasClass("active")) {
			jQuery(".headernav").hide();
		} else {
			jQuery(".headernav").show();
		}
		jQuery(".headernav li").unbind('mouseenter mouseleave');
	} else {
		jQuery(".toggleMenu").css("display", "none");
		jQuery(".headernav").show();
		jQuery(".headernav li").removeClass("hover");
		jQuery(".headernav li a").unbind('click');
		jQuery(".headernav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
			jQuery(this).toggleClass('hover');
		});
	}
}

//CSS Animation
jQuery(window).scroll(function() {
	jQuery('.services-wrap').each(function(){
		var imagePos = jQuery(this).offset().top;

		var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				jQuery(this).addClass("fadeInLeft");
			}
		});
	
	jQuery('.welcomewrap').each(function(){
		var imagePos = jQuery(this).offset().top;

		var topOfWindow = jQuery(window).scrollTop();
			if (imagePos < topOfWindow+400) {
				jQuery(this).addClass("fadeInRight");
			}
		});
		
	});
	
	jQuery(document).ready(function() {
  	jQuery('.srchicon').click(function() {
			jQuery('.searchtop').toggle();
			jQuery('.topsocial').toggle();
		});	
});
	

jQuery(window).scroll(function(){
		if (jQuery(window).scrollTop() >= 50) {
		   jQuery('.headerwrap').addClass('fixed-header');
		}
		else {
		   jQuery('.headerwrap').removeClass('fixed-header');
		}
});
