
;(function($) {

	$('.hexo-tab-nav a').on('click',function (e) {
		e.preventDefault();
		$(this).addClass('active').siblings().removeClass('active');
	});

	$('.hexo-tab-nav .begin').on('click',function (e) {		
		$('.hexo-tab-wrapper .begin').addClass('show').siblings().removeClass('show');
	});	
	$('.hexo-tab-nav .actions, .hexo-tab .actions').on('click',function (e) {		
		e.preventDefault();
		$('.hexo-tab-wrapper .actions').addClass('show').siblings().removeClass('show');

		$('.hexo-tab-nav a.actions').addClass('active').siblings().removeClass('active');

	});	
	$('.hexo-tab-nav .support').on('click',function (e) {		
		$('.hexo-tab-wrapper .support').addClass('show').siblings().removeClass('show');
	});	
	$('.hexo-tab-nav .table').on('click',function (e) {		
		$('.hexo-tab-wrapper .table').addClass('show').siblings().removeClass('show');
	});	


	$('.hexo-tab-wrapper .install-now').on('click',function (e) {	
		$(this).replaceWith('<p style="color:#23d423;font-style:italic;font-size:14px;">Plugin installed and active!</p>');
	});	
	$('.hexo-tab-wrapper .install-now.importer-install').on('click',function (e) {	
		$('.importer-button').show();
	});	


})(jQuery);
