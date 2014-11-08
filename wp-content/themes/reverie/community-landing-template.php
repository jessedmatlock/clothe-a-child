<?php 
/*
Template Name: Community Landing Template
*/

get_header(); ?>
<?php //echo  'Community Landing'; ?>
	<div class="section-design section-header color-<?php the_field('header_background_color'); ?> pattern-<?php the_field('header_background_image'); ?>">
		<h1 class="section-heading"><?php the_title(); ?></h1>
	</div>

<div class="row">
	<div class="small-12 large-8 columns">
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			
			<?php
			$communities_args = array(
			    'meta_key' => '_wp_page_template',
			   // 'meta_value' => 'community-template.php',
				'sort_order' => 'ASC',
				'sort_column' => 'menu_order',
				'child_of' => 30
			);

			$communities = get_pages( $communities_args );
			?>

			<?php foreach ( $communities as $community ) : ?>
			    <?php // echo $community->ID; ?>
			
				
				<header>
					<h1><a href="<?php echo get_page_link( $community->ID ); ?>"><?php echo $community->post_title; ?></a></h1>
					<!--?php reverie_entry_meta(); ?-->
				</header>

			<?php if( have_rows('content_items', $community->ID) ): ?>

			    <?php while ( have_rows('content_items',$community->ID) ) : the_row(); ?>

			        <?php if( get_row_layout() == 'content_heading' ): ?>
						<?php if(get_sub_field('show_heading_on_category_page',$community->ID )): ?>
						<!-- start heading -->
						<header>
							<h2><?php the_sub_field('heading_text', $community->ID); ?></h2>
						</header>
						<!-- end heading -->
						<?php  endif; ?>
						

					<?php elseif( get_row_layout() == 'text_content' ):  ?>
						<?php if( get_sub_field('show_text_on_category_page', $community->ID)): ?>
							
						<!-- start text content section -->
						<div class="row">
							<div class="small-12 medium-12 large-12 columns">	
								<div class="entry-content">
									<img src="<?php the_sub_field('content_image', $community->ID); ?>"  class="<?php the_sub_field('image_alignment', $community->ID); ?>" id="id"  alt="" />
									<p><?php the_sub_field('text_content', $community->ID); ?> <a href="<?php the_permalink(); ?>"> &nbsp;&nbsp;&nbsp;read more &raquo;</a></p>
								</div>
						    </div><!-- end columns -->
						</div><!-- end row -->					
						<!-- end text content section -->
			        	<?php  endif; ?>
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



	<?php /*
		<div class="entry-content clearfix">
			<figure><a href="<?php the_permalink(); ?>"><?php if ( get_the_post_thumbnail( $community->ID) ) {echo get_the_post_thumbnail( $community->ID , 'full' );  } ?></a></figure> 
			<?php $trimmed_content = wp_trim_words( $community->post_content, 100, '<a href="'. get_permalink() .'"> &nbsp;&nbsp;&nbsp;read more &raquo;</a>' ); ?>
			<p><?php echo $trimmed_content; ?></p>
		</div>
		*/ ?>
	
	<?php endforeach; ?>
	
	<!-- start sponsors - pulled from homepage -->
	
    <?php if( get_row_layout() == 'sponsor' ):  ?>

			<?php if( have_rows('sponsor_slider') ): ?>
			<div class="sponsor-slider-wrapper">
					<h2 class="smiley-title">Our Sponsors</h2>
	
				<ul class="sponsor-slider">

				<?php while( have_rows('sponsor_slider', 2) ): the_row(); 

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
									<a href="<?php echo $link; ?>" target="_blank">Website</a>
								<?php else: ?>
									<a href="javascript:void(0);" target="_blank">No Link</a>
					
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
		<?php endif; ?> <!-- end sponsors -->
		
			</article>	
		</div><!-- end columns -->
		<?php get_sidebar(); ?>
	</div><!-- end row -->		
<?php get_footer(); ?>