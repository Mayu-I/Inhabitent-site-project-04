<?php

/**
 * Template part for displaying page content in page.php.
 *
 * @package RED_Starter_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4125.97124774606!2d-123.14169376170048!3d49.26300022088244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x548673c79e1ac4fb%3A0x7edde857c28340ba!2sRED%20Academy!5e0!3m2!1sen!2sca!4v1578885733070!5m2!1sen!2sca" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
		wp_link_pages(array(
			'before' => '<div class="page-links">' . esc_html('Pages:'),
			'after'  => '</div>',
		));
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->