jQuery(function ($) {
	$(window).load(function () {
		$("#preloader").fadeOut(300);
		$("html").removeClass('loading');					
	}); // end window load
}); // end function

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

	/*
	*  render_map
	*
	*  This function will render a Google Map onto the selected jQuery element
	*
	*  @type	function
	*  @date	8/11/2013
	*  @since	4.3.0
	*
	*  @param	$el (jQuery element)
	*  @return	n/a
	*/

	function render_map( $el ) {

		// var
		var $markers = $el.find('.marker');

		// vars
		var args = {
			zoom		: 12,
			center		: new google.maps.LatLng(0, 0),
		//	mapTypeId	:[google.maps.MapTypeId.ROADMAP, 'map_style'],
			mapTypeControlOptions: {
				mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
			},
			scaleControl: true,
			streetViewControl: false,
			panControl: false,
			zoomControl: true,
			scrollwheel: false						
		};
		
		var styles = [{"stylers":[{"hue":"#ed265a"}]},{"featureType":"road","elementType":"labels","stylers":[{"visibility":"off"}]},
		{"featureType":"road","elementType":"geometry","stylers":[{"lightness":100},{"visibility":"simplified"}]}];
		
		var styledMap = new google.maps.StyledMapType(styles, {name: "Styled Map"});
		
		

		// create map	        	
		var map = new google.maps.Map( $el[0], args);
			map.mapTypes.set('map_style', styledMap);
			map.setMapTypeId('map_style');


		// add a markers reference
		map.markers = [];

		// add markers
		$markers.each(function(){

	    	add_marker( $(this), map );

		});

		// center map
		center_map( map );

	}

	/*
	*  add_marker
	*
	*  This function will add a marker to the selected Google Map
	*
	*  @type	function
	*  @date	8/11/2013
	*  @since	4.3.0
	*
	*  @param	$marker (jQuery element)
	*  @param	map (Google Map object)
	*  @return	n/a
	*/

	function add_marker( $marker, map ) {

		// var
		var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

		// create marker
		var marker = new google.maps.Marker({
			position	: latlng,
			map			: map,
			icon: 'http://clotheachild.net/wp-content/themes/reverie/img/map.png'
			
		});

		// add to array
		map.markers.push( marker );

		// if marker contains HTML, add it to an infoWindow
		if( $marker.html() ){
			
			// create info window
			var infowindow = new google.maps.InfoWindow({
				content		: $marker.html()
			});

			// show info window when marker is clicked
			google.maps.event.addListener(marker, 'click', function() {
				infowindow.open( map, marker );
			});
		}

	}

	/*
	*  center_map
	*
	*  This function will center the map, showing all markers attached to this map
	*
	*  @type	function
	*  @date	8/11/2013
	*  @since	4.3.0
	*
	*  @param	map (Google Map object)
	*  @return	n/a
	*/

	function center_map( map ) {

		// vars
		var bounds = new google.maps.LatLngBounds();

		// loop through all markers and create bounds
		$.each( map.markers, function( i, marker ){

			var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

			bounds.extend( latlng );

		});

		// only 1 marker?
		if( map.markers.length == 1 ){
			// set center of map
		    map.setCenter( bounds.getCenter() );
		    map.setZoom( 14 );
		} else {
			// fit to bounds
			map.fitBounds( bounds );
		}

	}

	/*
	*  document ready
	*
	*  This function will render each map when the document is ready (page has loaded)
	*
	*  @type	function
	*  @date	8/11/2013
	*  @since	5.0.0
	*
	*  @param	n/a
	*  @return	n/a
	*/

	$(document).ready(function(){
		$('.acf-map').each(function(){
			render_map( $(this) );
		});
	});
})(jQuery);

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

	$("#owl-demo").owlCarousel({
		 items : 6, //10 items above 1000px browser width
		itemsDesktop : [1000,4], //5 items between 1000px and 901px
		itemsDesktopSmall : [900,3], // betweem 900px and 601px
		itemsTablet: [600,2], //2 items between 600 and 0
		itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option

	});
 });
