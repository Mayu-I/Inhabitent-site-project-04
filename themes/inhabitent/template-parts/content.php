<?php

/**
 * Template part for displaying posts.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php if (has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('large'); ?>
        <?php endif; ?>

        <?php the_title(sprintf('<a href="%s" rel="bookmark"><h1 class="entry-title">', esc_url(get_permalink())), '</h1></a>'); ?>
        <?php if ('post' === get_post_type()) : ?>
            <div class="entry-meta">
                <?php red_starter_posted_on(); ?> / <?php comments_number('0 Comments', '1 Comment', '% Comments'); ?> / <?php red_starter_posted_by(); ?>
            </div><!-- .entry-meta -->
        <?php endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php the_excerpt(); ?>
        <p><a href="<?php the_permalink(); ?>" class="read-more">Read more →</a></p>
    </div><!-- .entry-content -->
</article><!-- #post-## -->