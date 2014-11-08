
<?php while (have_posts()) : the_post(); ?>
		<article class="flexible-loop" id="post-<?php the_ID(); ?>">

			<?php if( have_rows('content_items') ): ?>

			    <?php while ( have_rows('content_items') ) : the_row(); ?>

					<?php // check for the heading and only show it here if it is a child of the Locations page. ?>
			        <?php if( get_row_layout() == 'content_heading' && $post->post_parent=="30" ): ?>
						
						<!-- start heading -->
						<header>
							<<?php the_sub_field('heading_size'); ?>><?php the_sub_field('heading_text'); ?></<?php the_sub_field('heading_size'); ?>>
						</header>
						<!-- end heading -->

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
						
						<!-- start text content section -->
						<div class="row">
							<div class="small-12 medium-12 large-12 columns">	
								<div class="entry-content">
									<img src="<?php the_sub_field('content_image'); ?>"  class="<?php the_sub_field('image_alignment'); ?>" id="id"  alt="" />
									<?php the_sub_field('text_content'); ?>
								</div>
						    </div><!-- end columns -->
						</div><!-- end row -->					
						<!-- end text content section -->
						
			        <?php elseif( get_row_layout() == 'section_with_circles' ):  ?>
													
						<div class="section-circles">
							<img src="<?php the_sub_field('section_background_image'); ?>"  class="circle-bg" id=""  alt="" />
								<div class="row-wrapper">										
									<div class="row">
									    <div class="small-12 medium-4 large-4 columns">
											<?php $link1 = (empty(get_sub_field("circle_1_link"))) ? 'javascript:void(0);' : get_sub_field('circle_1_link') ?>
											<a href="<?php echo $link1 ?>" class="circle-link">
									        <div  class="circle-icon <?php the_sub_field('circle_1_image'); ?>">
												<div class="circle-title"><?php the_sub_field('circle_1_title'); ?></div>
											</div>
											</a>											
											<div class="circle-heading"><?php the_sub_field('circle_1_heading'); ?></div>											
											<p class="circle-content"><?php the_sub_field('circle_1_content'); ?></p>
									    </div><!-- end columns -->
									    <div class="small-12 medium-4 large-4 columns">
											<?php $link2 = (empty(get_sub_field("circle_2_link"))) ? 'javascript:void(0);' : get_sub_field('circle_2_link') ?>
											<a href="<?php echo $link2 ?>" class="circle-link">										
									        <div  class="circle-icon <?php the_sub_field('circle_2_image'); ?>">
												<div class="circle-title"><?php the_sub_field('circle_2_title'); ?></div>
											</div>
											</a>
											<div class="circle-heading"><?php the_sub_field('circle_2_heading'); ?></div>											
											<p class="circle-content"><?php the_sub_field('circle_2_content'); ?></p>
									    </div><!-- end columns -->
									    <div class="small-12 medium-4 large-4 columns">
											<?php $link3 = (empty(get_sub_field("circle_3_link"))) ? 'javascript:void(0);' : get_sub_field('circle_3_link') ?>
											<a href="<?php echo $link3 ?>" class="circle-link">										
									        <div  class="circle-icon <?php the_sub_field('circle_3_image'); ?>">
												<div class="circle-title"><?php the_sub_field('circle_3_title'); ?></div>
											</div>
											</a>
											<div class="circle-heading"><?php the_sub_field('circle_3_heading'); ?></div>											
											<p class="circle-content"><?php the_sub_field('circle_3_content'); ?></p>
									    </div><!-- end columns -->
									</div><!-- end row -->									
								</div><!-- end div.row-wrapper -->
						</div><!-- end section circles -->

			        <?php elseif( get_row_layout() == 'colored_box' ):  ?>

							<!-- start color box -->
							<div class="section-design color-<?php the_sub_field('color_box_background_color'); ?> pattern-<?php the_sub_field('color_box_background_image'); ?>">
								<h2 class="section-heading"><?php the_sub_field('color_box_heading'); ?></h2>
								<div class="section-content">
									<?php the_sub_field('color_box_content'); ?>
									
									<?php if( get_sub_field("show_cta_button") === 'Yes' ): ?>
										<?php 											
											
											$targetAttribute;

											if(get_sub_field("color_box_cta_button_type") == 'url'){

												$color_box_cta_button_link = ( get_sub_field("color_box_cta_url_link") ? get_sub_field("color_box_cta_url_link") : 'javascript:void(0);' );
												$targetAttribute = 'target="_blank"';
												
											} elseif(get_sub_field("color_box_cta_button_type") == 'contact') {

												$regarding = ( get_sub_field("color_box_cta_contact_link") ? get_sub_field("color_box_cta_contact_link") : '' );
												$color_box_cta_button_link = '/contact?regarding='.$regarding;
												
											} elseif(get_sub_field("color_box_cta_button_type") == 'donation') {

												$donateTo = ( get_sub_field("color_box_cta_donation_link") ? get_sub_field("color_box_cta_donation_link") : '' );
												$color_box_cta_button_link = '/contact/make-a-donation?donate_to='.$donateTo;
												
											}	
										 ?>
										
										<p>
											<?php the_sub_field('color_box_cta_text'); ?>
											<a href="<?php echo $color_box_cta_button_link; ?>" <?php echo $targetAttribute; ?> class="cta-button button">
												<?php the_sub_field('color_box_cta_button'); ?>
											</a>
										<p>										
									<?php endif; ?>
									
								</div>
							</div>
							<!-- END color box -->

			        <?php elseif( get_row_layout() == 'list' ):  ?>
						
						<!-- start list -->
						<div class="row">
						    <div class="small-12 medium-12 large-12 columns">
								<ul class="<?php the_sub_field('list_style'); ?> clearfix">
									<?php while ( have_rows('list_items') ) : the_row(); ?>
										<li><?php the_sub_field('list_item_text'); ?></li>
									<?php endwhile; ?>
								</ul>
						    </div><!-- end columns -->
						</div><!-- end row -->
						<!-- end list -->
						
			        <?php elseif( get_row_layout() == 'blockquote' ):  ?>

						<!-- start blockquote -->
						<div class="row">
						    <div class="small-12 medium-12 large-12 columns">
							<div class="entry-content">
						        <blockquote>
									<?php the_sub_field('blockquote_text'); ?> 
									<?php if (get_sub_field('blockquote_author')) : ?>
										<cite>~ <?php the_sub_field('blockquote_author'); ?></cite>
									<?php endif; ?>
								</blockquote>
								</div>
						    </div><!-- end columns -->
						</div><!-- end row -->
						<!-- end blockquote -->
						
			        <?php elseif( get_row_layout() == 'slideshow' ):  ?>

						<!-- start slideshow -->
						<ul class="orbit-slider" 
							id="slider-<?php echo $random; ?>" 
							data-orbit
							data-options="animation:slide;
							              pause_on_hover:true;
							              animation_speed:500;
							              navigation_arrows:true;
							              bullets:false;
										  slide_number:false,
									      circular:false;
									      timer: false;">

							<?php while (have_rows('slideshow_images')) : the_row(); ?>
								<li> <img src="<?php the_sub_field('slide'); ?>" alt="slide image" />
							        <div class="orbit-caption"><?php the_sub_field('caption'); ?></div>
							    </li>
							<?php endwhile; ?>								
						</ul>
						<!-- end slideshow -->							

			        <?php elseif( get_row_layout() == 'gallery' ):  ?>
						<?php if( get_sub_field("gallery_images") ): ?>	
							
							<?php
							
							$gallery_item_type_key = "field_5453b795d1377";
							$gallery_item_type = get_field_object($gallery_item_type_key);
							?>
							<?php if( $gallery_item_type ) : ?>

								<ul id="gallery-filter" data-option-key="filter">
									<!-- hard coded - changed to dynamically accessing the select element from within ACF, in case we add/remove values this menu will be current/correct -->
									<li><a class="selected filter" href="javascript:void(0)" data-filter="*">All</a></li>
									<!--li><a class="filter" href="javascript:void(0)" data-filter=".sponsor">Sponsors</a></li>
									<li><a class="filter" href="javascript:void(0)" data-filter=".staff">Staff</a></li>
									<li><a class="filter" href="javascript:void(0)" data-filter=".volunteer">Volunteers</a></li>
									<li><a class="filter" href="javascript:void(0)" data-filter=".other">Others</a></li-->
									
									<?php foreach( $gallery_item_type['choices'] as $k => $v ): ?>
										<li><a class="filter" href="javascript:void(0);" data-filter=".<?php echo $k; ?>"><?php echo $v; ?></a></li>
										
									<?php endforeach; ?>
									
								</ul>
								
							
							<?php endif; ?>
							
							
							<div id="gallery" class="clearfix">
					
							<?php while ( have_rows('gallery_images') ) : the_row(); ?>
								
								
								
									
									<?php 
										$gallery_item_types = get_sub_field('gallery_item_type');
										$gallery_item_types = join(' ', array_filter($gallery_item_types));
										$gallery_pop_image = get_sub_field('gallery_item_lg_image') ? get_sub_field('gallery_item_lg_image') : get_sub_field('gallery_item_image')
									 ?>
									
									<div class="gallery-item <?php echo $gallery_item_types; ?>">
										
										<div class="gallery-item-wrapper">
											<img src="<?php the_sub_field('gallery_item_image'); ?>" class="img-responsive" alt="">
											<div class="gallery-item-overlay">
												<a class="gallery-item-pop" 
												   	href="<?php echo $gallery_pop_image; ?>"
													title="<?php the_sub_field('gallery_item_caption'); ?>"><i class="fa fa-search"></i></a>
												
												<?php if(get_sub_field('sponsor_url')): ?>
													<a class="gallery-item-link" href="<?php the_sub_field('sponsor_url'); ?>" target="_blank"><i class="fa fa-link"></i></a>
												<?php endif; ?>
												
											</div><!-- gallery-item-overlay -->
											<div class="gallery-item-caption">
												<?php the_sub_field('gallery_item_caption'); ?>
											</div>
										</div><!-- end div.gallery-item-wrapper -->

									</div><!-- end gallery item -->

							<?php endwhile; ?>
						</div>							

						<?php endif; ?>
			        <?php elseif( get_row_layout() == 'testimonial_section' ):  ?>
				
						<?php if( get_sub_field("testimonials") ): ?>
							<div class="testimonial-section">
								<h2 class="smiley-title"><?php the_sub_field('testimonials_heading'); ?></h2>
							
								<!-- start testimonial slider -->
								<ul class="testimonial-slider" 
									id="testimonial-slider-<?php echo $random; ?>" 
									data-orbit
									data-options="animation:slide;
									              pause_on_hover:true;
									              animation_speed:500;
									              navigation_arrows:true;
									              bullets:false;
												  slide_number:false,
											      circular:false;
											      timer: false;">
									<?php $args = array(
										'posts-per-page' => 10,
										'cat'      => 3,
										'order'    => 'DESC'
										);
										query_posts( $args ); ?>
										<?php if (have_posts()) : ?>
											<?php while (have_posts()) : the_post(); ?>
												<li>
													<div class="testimonial clearfix">													
														<?php if ( has_post_thumbnail() ) :?>
										 	 				<figure><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></figure>
														<?php endif; ?>
														<h3><?php the_title(); ?></h3>
														<div class='post_title'><?php the_excerpt(); ?> <a href="<?php the_permalink(); ?>" class="readmore">&nbsp;&nbsp;&nbsp;read more &raquo;</a></div>
													</div><!-- end div.testimonial -->
												</li>
											 <?php endwhile; ?>
											<?php endif ?>
										<?wp_reset_query(); ?>
									<?php endif; ?>						

								</ul>
								<!-- end testimonial slider -->							
							</div><!-- end div.testimonial-section -->
					
			        <?php elseif( get_row_layout() == 'sponsor' ):  ?>

							<?php if( have_rows('sponsor_slider') ): ?>
							<div class="sponsor-slider-wrapper">
									<h2 class="smiley-title">Our Sponsors</h2>
									
								<ul class="sponsor-slider">

								<?php while( have_rows('sponsor_slider') ): the_row(); 

									// vars
									$name = get_sub_field('sponsor_name');
									$image = get_sub_field('sponsor_image');
									$level = get_sub_field('sponsor_level');
									$type = get_sub_field('sponsor_type');
									$link = get_sub_field('sponsor_homepage_link');

									?>

									<li class="sponsor-slide">

											<div class="sponsor-overlay <?php echo $type; ?> <?php echo $level; ?>">												
												<?php if( $link ): ?>
													<a href="<?php echo $link; ?>" target="_blank" class="sponsor-overlay-link"><i class="fa fa-link"></i></a>
												<?php else: ?>
													<a href="<?php echo $link; ?>" target="_blank" class="sponsor-overlay-link"><i class="fa fa-unlink"></i></a>
												<?php endif; ?>												
											</div><!-- end div.sponsor-overlay -->
											<?php if( $name ): ?>
												<div class="sponsor-name"><?php echo $name; ?></div>
											<?php endif; ?>
											
											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
									</li>

								<?php endwhile; ?>

								</ul>
							</div><!-- end div.sponsor-slider-wrapper -->
							
							<?php endif; ?>						
						
			        <?php endif; ?>

			    <?php endwhile; ?>

			<?php else : ?>
				<!-- start text content section -->
				<div class="row">
				    <div class="small-12 medium-12 large-12 columns">					
						<div class="entry-content">We're sorry but there is no content to display at this time.</div>
				    </div><!-- end columns -->
				</div><!-- end row -->					
				<!-- end text content section -->

			<?php endif; ?>
			
	</article>
<?php endwhile; // End the loop ?>