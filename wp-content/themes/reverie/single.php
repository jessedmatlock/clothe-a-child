<?php get_header(); ?>
<?php //echo 'Single'; ?>


<div class="section-design section-header color-purple pattern-cac">
	<h1 class="section-heading"><?php the_title(); ?></h1>
</div>

<!-- Row for main content area -->
<div class="row">
	<div class="small-12 large-8 columns">
	
	<?php /* Start loop */ ?>
	<?php while (have_posts()) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<?php if ( has_post_thumbnail() ): ?>
				<div class="entry-content has-image clearfix">
 	 				<figure><?php the_post_thumbnail(); ?></figure>
				<?php else: ?>
				<div class="entry-content">					
				<?php endif; ?>
				
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'reverie'), 'after' => '</p></nav>' )); ?>
				<p class="entry-tags"><?php the_tags(); ?></p>
				<!--?php edit_post_link('Edit this Post'); ?-->
			</footer>
		</article>
		<!--div class="entry-author panel">
			<div class="row">
				<div class="large-3 columns">
					<?php //echo get_avatar( get_the_author_meta('user_email'), 95 ); ?>
				</div>
				<div class="large-9 columns">
					<h4><?php the_author_posts_link(); ?></h4>
					<p class="cover-description"><?php //the_author_meta('description'); ?></p>
				</div>
			</div>
		</div-->
		<!--?php comments_template(); ?-->
	<?php endwhile; // End the loop ?>

	</div>
	<?php get_sidebar(); ?>
</div><!-- end row -->		
<?php get_footer(); ?>