// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
(function ($) {
	$(document).foundation();
	"use strict";
	$container = $('#gallery');
	filterSelected = '.gallery-item';

	$container = $('#gallery').imagesLoaded( function() {
	    "use strict";
	    $container.isotope({
	        itemSelector: '.gallery-item',
	        filter: filterSelected
	    });
	    $container.fadeIn();

	    $container.isotope({
	        filter: filterSelected
	    });
	}); // end imagesLoaded
})(jQuery);

jQuery(function ($) {
	$(window).load(function () {
		$("#preloader").fadeOut(300);
		$("html").removeClass('loading');					
	}); // end window load
}); // end function

jQuery(document).ready(function($){	
	
		$('.gform_wrapper select').each(function(){
			if( $(this).is(":visible")){
				$(this).chosen({inherit_select_classes: true, disable_search: true}).trigger("chosen:updated");				
			}					
		});
	
	
	$(".gallery-item-pop").colorbox({rel:'gallery-item-pop'});
	
    "use strict";	
	$("#gallery-filter a").click(function(){
		if ($(this).hasClass('selected')) {
        	return false;
    	}
		$(this).closest('#gallery-filter').find('.selected').removeClass('selected');
    	$(this).addClass('selected');
    	
        filterSelected = $(this).data('filter');
        console.log('filterSelected: ' + filterSelected);
        $container.isotope({
            filter: filterSelected
        });
    });

	$('.sponsor-slider').bxSlider({
		auto: true,
		controls: true,
		default: 1000,
		easing : 'easeInOutQuint',
		prevText : '',
		nextText : '',
		pager :false			
	});
	$('.gallery-slider').bxSlider({
		controls: true,
		displaySlideQty: 1,
		default: 1000,
		easing : 'easeInOutQuint',
		prevText : '',
		nextText : '',
		pager :false			
		
	});
 });
