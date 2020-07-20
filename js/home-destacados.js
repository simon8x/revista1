(function($) {
	$(function () {
		"use strict";
		jQuery(function($){
        $(document).ready(function() {
              $('.owl-carousel').owlCarousel({
                margin: 10,
				loop:true,
				//center:true,
				autoplay:true,
				autoplayTimeout:3000,
				autoplayHoverPause:true,
                responsiveClass: true,
				 nav: true,
				navText:["<div class='nav-btn prev-slide'></div>","<div class='nav-btn next-slide'></div>"],
				//navContainer: '.main-content .custom-nav',
				responsive: {
                  0: {
                    items: 1
                  },
                  600: {
                    items: 2
                  },
                  1000: {
                    items: 4
                  }
                },
              });
				$('.play').on('click',function(){ owl.trigger('play.owl.autoplay',[2000]) });
				$('.stop').on('click',function(){ owl.trigger('stop.owl.autoplay') });
            });
			
			});});
})(jQuery);
