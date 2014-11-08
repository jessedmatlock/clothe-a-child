<?php
/*
Templa te Name: Home Page Template
*/
get_header(); ?>
<?php //echo 'Home Page Template'; ?>

	<ul class="orbit-slider" 
		id="slider1" 
		data-orbit
		data-options="animation:slide;
		              pause_on_hover:true;
		              animation_speed:500;
		              navigation_arrows:true;
		              bullets:false;
					  slide_number: false,
				      circular: false;
				      timer: false;">

	    <li> <img src="<?php echo get_template_directory_uri(); ?>/img/slider/slide-1.jpg" alt="slide 1" />
	        <div class="orbit-caption"> Caption One. </div>
	    </li>
	    <li> <img src="http://placeimg.com/1920/480/Animals" alt="slide 2" />
	        <div class="orbit-caption"> Caption Two. </div>
	    </li>
	    <li> <img src="http://placeimg.com/1920/480/People" alt="slide 3" />
	        <div class="orbit-caption"> Caption Three. </div>
	    </li>
	</ul>

	
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<?php if( have_rows('content_items') ): ?>

				    <?php while ( have_rows('content_items') ) : the_row(); ?>

				        <?php if( get_row_layout() == 'content_heading' ): ?>

				        <?php elseif( get_row_layout() == 'cta_steps' ):  ?>
							<div id="steps">
								<div class="row">
								    <div class="small-12 medium-12 large-3 columns">
								        <h3 class="steps-title"><?php the_sub_field('steps_title'); ?></h3>
								    </div><!-- end columns -->
								    <div class="small-12 medium-12 large-3 columns">
									    <a href="<?php the_sub_field('step_1_link'); ?>" id="" class="step-link">	
											<div class="step-number">
												01
											</div>
											<div class="step-line"></div>
											<div class="step-text">
												<?php the_sub_field('step_1_text'); ?>
											</div>
								        </a>
								    </div><!-- end columns -->
								    <div class="small-12 medium-12 large-3 columns">
									    <a href="<?php the_sub_field('step_2_link'); ?>" id="" class="step-link">	
											<div class="step-number">
												02
											</div>
											<div class="step-line"></div>
											<div class="step-text">
												<?php the_sub_field('step_2_text'); ?>
											</div>
								        </a>
								    </div><!-- end columns -->
								    <div class="small-12 medium-12 large-3 columns">
								        <a href="<?php the_sub_field('step_3_link'); ?>" id="" class="step-link">	
											<div class="step-number">
												03
											</div>
											<div class="step-line"></div>
											<div class="step-text">
												<?php the_sub_field('step_3_text'); ?>
											</div>
								        </a>
								    </div><!-- end columns -->
								</div><!-- end row -->
							</div><!-- #steps -->
							
					
				        <?php elseif( get_row_layout() == 'text_content' ):  ?>

							<div class="row">
							    <div class="small-12 medium-12 large-12 columns">					
									<div class="entry-content"><?php the_sub_field('text_content'); ?> </div>
							    </div><!-- end columns -->
							</div><!-- end row -->					

				        <?php elseif( get_row_layout() == 'section_with_circles' ):  ?>

				        <?php elseif( get_row_layout() == 'colored_box' ):  ?>

						<?php	$box_heading = get_sub_field('color_box_heading'); 
								$box_content = get_sub_field('color_box_content');

								if( get_sub_field("show_cta_button") === 'Yes' ):

						        	$button_text = get_sub_field('color_box_cta_button');
						        	$button_url = get_sub_field('color_box_cta_button_link');
								endif;
							?>
							<!-- start color box -->
									<div class="section-design color-<?php the_sub_field('color_box_background_color'); ?> pattern-<?php the_sub_field('color_box_background_image'); ?>">
										<h2 class="section-heading"><?php echo $box_heading; ?></h2>
										<div class="section-content">
											<?php echo $box_content; ?>
											<p><?php the_sub_field('color_box_cta_text'); ?>
												<a href="<?php echo $button_url; ?>" id="" class="cta-button button"> <?php echo $button_text; ?></a>
											<p>
										</div>
									</div>
								<!-- END color box -->


				        <?php elseif( get_row_layout() == 'list' ):  ?>

				        <?php elseif( get_row_layout() == 'blockquote' ):  ?>
					
							<div class="row">
							    <div class="small-12 medium-12 large-12 columns">
								<div class="entry-content">
							        <blockquote>
										<?php the_sub_field('blockquote_text'); ?> 
										<?php if (get_sub_field('blockquote_author')) : ?>
											<cite><?php the_sub_field('blockquote_author'); ?> </cite>
										<?php endif; ?>
									</blockquote>
									</div>
							    </div><!-- end columns -->
							</div><!-- end row -->

				        <?php elseif( get_row_layout() == 'slideshow' ):  ?>

				        <?php elseif( get_row_layout() == 'gallery' ):  ?>

				        <?php elseif( get_row_layout() == 'testimonial_section' ):  ?>

				        <?php endif; ?>

				    <?php endwhile; ?>

				<?php else : ?>

					<?php echo 'No Content Items to Display'; ?>

				<?php endif; ?>
				
			</div>
		</article>
	<?php endwhile; // End the loop ?>
		
<?php get_footer(); ?>
