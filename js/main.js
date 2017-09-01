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
		$('body').removeClass().addClass(classname);
		setCookie('themeteam',classname,7);
		$('.nav-team').hide();
	});

	function setCookie(name, value, days) {
        if (days) {
            var date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            var expires = "; expires=" + date.toGMTString();
        }
        else var expires = "";
        document.cookie = name + "=" + value + expires + "; path=/";
    }

    function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') c = c.substring(1, c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
        }
        return null;
	}

	var theme = getCookie('themeteam') || 'celtics';

	$('body').removeClass().addClass(theme);
	



	

})(jQuery);