<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if (has_post_thumbnail()) : ?>
			<?php the_post_thumbnail('full'); ?>
		<?php endif; ?>
	</header><!-- .entry-header -->
	<div class="content-wrapper">
		<?php the_title('<h1 class="entry-title">', '</h1>'); ?>

		<div class="entry-meta">
			<?php red_starter_posted_by(); ?>
		</div><!-- .entry-meta -->
		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php red_starter_entry_footer(); ?>
		</footer><!-- .entry-footer -->
		<div class="social">
			<button type="button" class="social__btn"><i class="fab fa-facebook-f"></i>Like</button>
			<button type="button" class="social__btn"><i class="fab fa-twitter"></i>Tweet</button>
			<button type="button" class="social__btn"><i class="fab fa-pinterest"></i>Pin</button>
		</div>
	</div>
</article><!-- #post-## -->