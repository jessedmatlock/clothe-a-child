<?php //echo 'Sidebar'; ?>

<aside id="sidebar" class="small-12 medium-12 large-4 columns">
	<? //php dynamic_sidebar("Sidebar"); ?>
	
	<?php while (have_posts()) : the_post(); ?>

		<?php if( have_rows('sidebar_content') ): ?>
			<div id="" class="panel"><!-- start article #.panel -->
				<?php $location = get_field('map_pin', 'options'); ?>
									
				<?php if( !empty($location) && is_page('11')): ?>
					<div class="row">
					    <div class="small-12 medium-12 large-12 columns">
					        <div class="acf-map">
								<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
							</div>								
					    </div><!-- end columns -->
					</div><!-- end row -->
					
				<?php endif; ?>
				
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

		        <?php elseif( get_row_layout() == 'sidebar_text_content' ): ?>
					
					<!-- start sidebar text content section -->
						<?php the_sub_field('sidebar_text'); ?>
					<!-- end sidebar text content section -->
					
		        <?php elseif( get_row_layout() == 'sidebar_title' ): ?>
					
					<!-- start sidebar title -->
					<<?php the_sub_field('title_size'); ?>><?php the_sub_field('title'); ?></<?php the_sub_field('title_size'); ?>>
					<!-- end sidebar title -->

		        <?php endif; ?>										

		    <?php endwhile; ?>
					
		</div><!-- start article #.panel -->
		
		<?php else : ?>

			<?php dynamic_sidebar("Sidebar"); ?>

		<?php endif; ?>
				
	<?php endwhile; // End the loop ?>
	
</aside><!-- /#sidebar -->