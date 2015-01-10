(function($) {
	 windowHeight = $(window).height();
	 $('.nav-bar').affix({ offset: { top: windowHeight-84}});
	 $('.sub-menu').affix({ offset: { top: 84}});	 
	 var msie6 = $.browser == 'msie' && $.browser.version < 7;
	 if (!msie6) {
	     if ($('.go-to-top').length > 0) {
	         var top = $('.go-to-top').offset().top - parseFloat($('.go-to-top').css('margin-top').replace(/auto/, 0));
	         $(window).scroll(function (event) {
	             // what the y position of the scroll is
	             var y = $(this).scrollTop();// whether that's below the form
	             if (y >= top) {
	                 $('.go-tp-btn').css('visibility', 'visible').css('opacity', '1').css('bottom', '20px');
	             } else {
	                 $('.go-tp-btn').css('visibility', 'hidden').css('opacity', '0').css('bottom', '4px');
	             }

	         });
	     }
	 }
	 
	 $('.trigger').bind('click', function (event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1200, 'easeInOutExpo');
        event.preventDefault();
    });  
	 
})(jQuery);



