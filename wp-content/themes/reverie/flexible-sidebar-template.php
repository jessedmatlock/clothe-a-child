
<?php
/*
Template Name: Flexible Content + Sidebar Template
*/
get_header(); ?>
<?php //echo 'Flexible Content + Sidebar Template'; ?>

	<?php while (have_posts()) : the_post(); ?>
		<?php // check to see if this is a child of the Locations page, if not, show the content_heading title here else show the WP the_title() here ?>
		<?php if(!$post->post_parent=="30"): ?>
			<?php if( have_rows('content_items') ): ?>
						<div class="section-design section-header color-<?php the_field('header_background_color'); ?> pattern-<?php the_field('header_background_image'); ?>">
							<h1 class="section-heading"><?php the_field('page_header_title'); ?></h1>
						</div>
			<?php endif; ?>
		<?php  else: ?>
			<div class="section-design section-header color-<?php the_field('header_background_color'); ?> pattern-<?php the_field('header_background_image'); ?>">
				<h1 class="section-heading"><?php the_field('page_header_title'); ?></h1>
			</div>
		<?php  endif; ?>
	<?php endwhile; ?>

	<div class="row flexible-sidebar">
		<div class="small-12 large-8 columns">
			<?php locate_template( 'flexible-loop.php', true, false ); ?>
	    </div><!-- end columns -->
		<?php get_sidebar(); ?>
	</div><!-- end row -->
	
	<script type="text/javascript" charset="utf-8">
		jQuery(document).ready(function($){
			$('article.flexible-loop').removeClass('flexible').addClass('flexible-sidebar');
		});  // end docready
	</script>
	
<?php get_footer(); ?>
