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
                <h1 class="product__title"><?php single_tag_title(); ?></h1>
                <div class="taxonomy-description">
                    <p><?php echo term_description(); ?></p>
                </div>
            </header>
            <div class="products__grid">
                <?php /* Start the Loop */ ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                    get_template_part('template-parts/content-products');
                    ?>
                <?php endwhile; ?>
            </div>
            <?php the_posts_navigation(); ?>

        <?php else : ?>

            <?php get_template_part('template-parts/content-products', 'none'); ?>

        <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>