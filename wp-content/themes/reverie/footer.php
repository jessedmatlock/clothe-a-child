	</div><!-- end div#content -->
</div><!-- close Container -->

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