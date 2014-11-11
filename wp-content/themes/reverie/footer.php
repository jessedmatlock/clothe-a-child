	</div><!-- end div#content -->
</div><!-- close Container -->
<?php if(!is_page('11')): ?>
<div id="footer-map">
	<?php		
		$footer_map_latlong = get_field('map_pin', 'options');		
	 ?>
							
		<?php if( !empty($footer_map_latlong) ): ?>
			<div class="acf-map">
				<div class="marker" data-lat="<?php echo $footer_map_latlong['lat']; ?>" data-lng="<?php echo $footer_map_latlong['lng']; ?>"></div>
			</div>								
		<?php endif; ?>
</div><!-- end div#footer-map -->
<?php endif; ?>
<div id="footer-contacts">
	<div class="row">
	    <div class="small-12 medium-4 large-4 columns">
	        <div class="footer-contact location-icon">
				<h4 class="footer-title">Clothe A Child</h4>
	        		<?php if(get_field('footer_address', 'options')): ?>
						<?php the_field('footer_address', 'options'); ?>
						<br/>
						<?php the_field('footer_address_2', 'options'); ?>
					<?php endif; ?>
	        </div><!-- end div.footer-contact location-icon -->
	    </div><!-- end columns -->
	    <div class="small-12 medium-4 large-4 columns">
	        <div class="footer-contact phone-icon">
	        	<h4 class="footer-title">Phone Number</h4>
				<?php if(get_field('footer_phone_number', 'options')): ?>
					<?php the_field('footer_phone_number', 'options'); ?>
				<?php endif; ?>
        		
	        </div><!-- end div.footer-contact phone-icon -->
	    </div><!-- end columns -->
	    <div class="small-12 medium-4 large-4 columns">
	        <div class="footer-contact contact-icon">
	        	<h4 class="footer-title">Contact Us</h4>
					<a href="/contact" id="" class="button tiny primary">Send us a message &raquo;</a>
	        </div><!-- end div.footer-contact contact-icon -->
	    </div><!-- end columns -->
	</div><!-- end row -->
	
</div><!-- end div#footer-contacts -->
<footer class="full-width" role="contentinfo">
	<div class="row">
		<div class="large-12 columns">
			<?php wp_nav_menu(array('theme_location' => 'utility', 'container' => false, 'menu_class' => 'inline-list', 'depth'           => 1)); ?>
		</div>
	</div>
	<div class="row love-reverie">
		<div class="large-12 columns">
			<p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php _e('Made with Love by','Revive Marketing'); ?> <a href="http://revivemarketing.org/" rel="nofollow" title="Revive Marketing">Revive Marketing</a>.</p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
	<div id="preloader">
		<div id="pre-loader-title">Clothe A Child</div>
		<div class="flower"></div>
		<div id="pre-loader-subtitle">Preparing your experience</div>
	</div>	
</body>
</html>