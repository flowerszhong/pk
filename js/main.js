(function ($,undefined) {
	$('.post-list').on('mouseenter', '.ppost', function(event) {
		$(this).addClass('pphover');
	}).on('mouseleave', '.ppost', function(event) {
		$(this).removeClass('pphover');
	});

	if($.fn.flexslider){
		$('.slider-container').flexslider({
		    animation: "slide",
		    customDirectionNav: $(".custom-navigation a")
		});
	}

	

})(jQuery);