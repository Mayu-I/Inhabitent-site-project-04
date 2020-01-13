<?php

/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main products content-wrapper" role="main">
        <?php if (have_posts()) : ?>
            <header class="products__header">
                <h1 class="products__title">Shop Stuff</h1>
                <ul class="products__nav">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>/product/do">DO</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>/product/eat">EAT</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>/product/sleep">SLEEP</a></li>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>/product/wear">WEAR</a></li>
                </ul>
            </header>
            <div class="products__grid">
                <?php /* Start the Loop */ ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                    get_template_part('template-parts/content', 'products');
                    ?>
                <?php endwhile; ?>
            </div>
            <?php the_posts_navigation(); ?>

        <?php else : ?>

            <?php get_template_part('template-parts/content', 'none'); ?>

        <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>