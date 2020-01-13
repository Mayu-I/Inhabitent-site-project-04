<?php

/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<script src="https://kit.fontawesome.com/be014b79a7.js" crossorigin="anonymous"></script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<div>
			<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html('Skip to content'); ?></a>

			<?php
			if (is_page('32')) :
			?>
				<header class="header header--white" role="banner">
					<div class="header__wrapper content-wrapper">
						<div class="header__logo">
							<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-tent-white.svg" alt=""></a>
						</div>
						<nav class="header__nav">
							<a href="<?php echo esc_url(home_url('/')); ?>product_type">SHOP</a>
							<a href="<?php echo esc_url(home_url('/')); ?>journal">JOURNAL</a>
							<a href="<?php echo esc_url(home_url('/')); ?>about">ABOUT</a>
							<a href="<?php echo esc_url(home_url('/')); ?>find-us">FIND US</a>
							<i class="fas fa-search"></i>
						</nav>
					</div>
				</header>
			<?php else : ?>
				<header class="header" role="banner">
					<div class="header__wrapper content-wrapper">
						<div class="header__logo">
							<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-tent.svg" alt=""></a>
						</div>
						<nav class="header__nav">
							<a href="<?php echo esc_url(home_url('/')); ?>product_type">SHOP</a>
							<a href="<?php echo esc_url(home_url('/')); ?>journal">JOURNAL</a>
							<a href="<?php echo esc_url(home_url('/')); ?>about">ABOUT</a>
							<a href="<?php echo esc_url(home_url('/')); ?>find-us">FIND US</a>
							<i class="fas fa-search"></i>
						</nav>
					</div>
				</header>
			<?php endif; ?>
			<div id="content" class="site-content">