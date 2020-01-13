<?php

/**
 * Template part for displaying products posts.
 *
 * @package RED_Starter_Theme
 */

?>
<article class="products__item">
	<div class="products__thumbnail">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail(array(640, 480)); ?>

		</a>
	</div>

	<div class="products__info">
		<h2 class="entry-title"><?php the_title(); ?></h2>
		<span class="products__price">$<?php echo get_post_meta(get_the_ID(), 'price', true) ?></span>
	</div>

	<?php if ('post' === get_post_type()) : ?>
		<div class="entry-meta">
			<?php red_starter_posted_on(); ?> / <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?> / <?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
	<?php endif; ?>
</article><!-- #post-## -->