(function($) {

	"use strict";



if ($('.sponsors-carousel-3slider').length) {
		$('.sponsors-carousel-3slider').owlCarousel({
			stagePadding:0,
		
			loop:true,
			margin:30, 
			nav:false,
			dots:true,
			smartSpeed: 500,
			autoplay: 4000,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:1
				},
				1024:{
					items:1
				},
				1200:{
					items:1
				}
			}
		});    		
	}
	
	if ($('.sponsors-carousel-4slider').length) {
		$('.sponsors-carousel-4slider').owlCarousel({
			stagePadding:0,
		
			loop:true,
			margin:30, 
			nav:true,
			dots:false,
			smartSpeed: 500,
			autoplay: false,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:2
				},
				600:{
					items:2
				},
				800:{
					items:3
				},
				1024:{
					items:4
				},
				1200:{
					items:4
				}
			}
		});    		
	}
	

if ($('.tes-slidsec').length) {
		$('.tes-slidsec').owlCarousel({
			stagePadding:0,
		
			loop:false,
			margin:30, 
			nav:true,
			dots:false,
			smartSpeed: 500,
			autoplay:false,
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:1
				},
				1024:{
					items:2
				},
				1200:{
					items:2
				}
			}
		});    		
	}	

if ($('.tes-slidsec2').length) {
		$('.tes-slidsec2').owlCarousel({
			stagePadding:0,
		
			loop:true,
			margin:30, 
			nav:true,
			dots:false,
			smartSpeed: 500,
			autoplay:false,
			autoHeight:false,	
			navText: [ '<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>' ],
			responsive:{
				0:{
					items:1
				},
				600:{
					items:1
				},
				800:{
					items:1
				},
				1024:{
					items:1
				},
				1200:{
					items:1
				}
			}
		});    		
	}	


})(window.jQuery);
