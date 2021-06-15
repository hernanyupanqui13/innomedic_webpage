$(function () {
	//$('head').append(`<link rel="stylesheet" href="public/assets/css/style-color-5.css?v=${Math.floor(Math.random() * 1000000)}" rel="stylesheet">`);
	$('.js-settings-panel-btn').on('click',function (e){
		var $this = $(this).parent('.js-settings-panel-item');
		$('.js-settings-panel-item').not($this).removeClass('opened');
		$this.toggleClass('opened');
	})
	/*$('.js-swatch-color').on('click',function (e){
		var color = $(this).attr('data-color');
		if(color != undefined){
			$('link[href*="public/assets/css/style-"]').not('link[href*="public/assets/css/style-rtl"]').attr('href','public/assets/css/style-color-'+color+'.css');
		} else {
			$('link[href*="public/assets/css/style-"]').attr('href',`public/assets/css/style-color-5.css?v=${Math.floor(Math.random() * 1000000)}`);
		}
		$('.js-swatch-color').removeClass('active');
		$(this).toggleClass('active');
		e.preventDefault();
	});*/
})