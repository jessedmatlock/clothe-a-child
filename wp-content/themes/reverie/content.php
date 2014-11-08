<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage Reverie
 * @since Reverie 4.0
 */
?>
<?php //echo 'Content'; ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('index-card'); ?>>
	
	<?php if(is_archive()): ?>
		<header>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?> &raquo;</a></h2>
			<?php // reverie_entry_meta(); ?>
		</header>
	<?php else: ?>
		<header>
			<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		</header>
	<?php endif; ?>
	
	<div class="entry-content clearfix">
		<figure><a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) {the_post_thumbnail('full'); } ?></a></figure> 					
		<?php the_excerpt(); ?>
	</div>
</article>