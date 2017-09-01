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


	$('#swither-icon').on('click',function(){
		$('.nav-team').toggle();
	});


	$('.nav-team').on('click','a',function(e){
		e.preventDefault();

		var classname = this.className;
		classname = classname.split('-')[1];

		$('body').removeClass().addClass('lakers');
		$('.nav-team').hide();
	});

	

})(jQuery);