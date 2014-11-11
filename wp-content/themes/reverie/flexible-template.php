<?php
/*
Template Name: Flexible Template
*/
get_header(); ?>
<?php $random = rand(); ?>

<?php //echo 'Flexible Template'; ?>
	
	<?php if(!is_front_page()): ?>
		<?php while (have_posts()) : the_post(); ?>
			<?php // check to see if this is a child of the Locations page, if not, show the content_heading title here else show the WP the_title() here ?>
			<?php if(!$post->post_parent=="30" ): ?>
				<?php if( have_rows('content_items') ): ?>
					<div class="section-design section-header color-<?php the_field('header_background_color'); ?> pattern-<?php the_field('header_background_image'); ?>">
						<h1 class="section-heading"><?php echo (get_field('page_header_title')) ? the_field('page_header_title') : the_title() ?> </h1>
					</div>
				<?php endif; ?>
			<?php  else: ?>
				<div class="section-design section-header color-<?php the_field('header_background_color'); ?> pattern-<?php the_field('header_background_image'); ?>">
					<h1 class="section-heading"><?php the_title(); ?></h1>
				</div>
			<?php  endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>
	<?php locate_template( 'flexible-loop.php', true, false ); ?>
	
	<script type="text/javascript" charset="utf-8">
		jQuery(document).ready(function($){
			$('article.flexible-loop').removeClass('flexible-sidebar').addClass('flexible');
		});  // end docready
	</script>
			
<?php get_footer(); ?>
