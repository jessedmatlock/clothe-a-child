<?php //echo 'Sidebar'; ?>

<aside id="sidebar" class="small-12 medium-12 large-4 columns">
	<? //php dynamic_sidebar("Sidebar"); ?>
	
	<?php while (have_posts()) : the_post(); ?>

		<?php if( have_rows('sidebar_content') ): ?>
			<article id="" class="panel"><!-- start article #.panel -->


		    <?php while ( have_rows('sidebar_content') ) : the_row(); ?>

		        <?php if( get_row_layout() == 'call_to_action' ): ?>
			
				<?php
			
					if(get_sub_field("button_link_type") == 'url'){

						$cta_button_href = get_sub_field("cta_button_url");

					} elseif(get_sub_field("button_link_type") == 'page') {

						$cta_button_href = get_sub_field("cat_button_page_link");
			
					}	
			
				?>
					
					<div class="cta">
						<p><?php the_sub_field('cta_text'); ?></p>
						<a href="<?php echo $cta_button_href; ?>" id="" class="button <?php the_sub_field('button_size'); ?> <?php the_sub_field('button_style'); ?>">
							<?php if(get_sub_field('button_icon') != 'none'): ?>
								<i class="fa <?php the_sub_field('button_icon'); ?>"></i>
							<?php endif; ?>								
							<?php the_sub_field('cta_button_text'); ?>
						</a>
					</div>
					

		        <?php elseif( get_row_layout() == 'sidebar_textarea' ): ?>
					
					<!-- start sidebar text content section -->
							<?php the_sub_field('sidebar_text'); ?>
					<!-- end sidebar text content section -->
					
		        <?php elseif( get_row_layout() == 'sidebar_title' ): ?>
					
					<!-- start sidebar title -->
					<<?php the_sub_field('title_size'); ?>><?php the_sub_field('title'); ?></<?php the_sub_field('title_size'); ?>>
					<!-- end sidebar title -->
					

			 	<?php elseif( get_row_layout() == 'google_map' ): ?>
				
					<?php $location = get_sub_field('map_pin'); ?>
										
					<?php if( !empty($location) ): ?>
						<div class="row">
						    <div class="small-12 medium-12 large-12 columns">
						        <div class="acf-map">
									<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
								</div>								
						    </div><!-- end columns -->
						</div><!-- end row -->
						
					<?php endif; ?>
					
					<style type="text/css">

					.acf-map {
						display: block;
						width: 100%;
						height: 200px;
						border: #ccc solid 1px;
						margin: 20px 0 0;
					}
					</style>
					
					<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
					<script type="text/javascript">
						(function($) {

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
								zoom		: 16,
								center		: new google.maps.LatLng(0, 0),
								mapTypeId	: google.maps.MapTypeId.ROADMAP
							};

							// create map	        	
							var map = new google.maps.Map( $el[0], args);

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
								map			: map
							});

							// add to array
							map.markers.push( marker );

							// if marker contains HTML, add it to an infoWindow
							if( $marker.html() )
							{
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
							if( map.markers.length == 1 )
							{
								// set center of map
							    map.setCenter( bounds.getCenter() );
							    map.setZoom( 16 );
							}
							else
							{
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
					</script>
										
		        <?php endif; ?>

		    <?php endwhile; ?>
		</article><!-- start article #.panel -->
		
		<?php else : ?>

			<?php dynamic_sidebar("Sidebar"); ?>

		<?php endif; ?>
				
	<?php endwhile; // End the loop ?>
	
</aside><!-- /#sidebar -->