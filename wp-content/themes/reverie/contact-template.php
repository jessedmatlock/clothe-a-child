<?php
/*
Template Name: Contact Us Template
*/
 get_header(); ?>
<?php //echo 'Contact Us'; ?>

<!-- Row for main content area -->
				<div class="section-design section-header color-<?php the_field('header_background_color'); ?> pattern-<?php the_field('header_background_image'); ?>">
					<h1 class="section-heading"><?php the_title(); ?></h1>
				</div>

<div class="row">
	<div class="small-12 large-8 columns" id="content" role="main">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
			</footer>
		</article>
	<?php endwhile; // End the loop ?>

	</div>
	<?php get_sidebar(); ?>
</div><!-- end row -->		
<?php get_footer(); ?>