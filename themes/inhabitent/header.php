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
			<header class="header content-wrapper" role="banner">
				<div class="header__wrapper">
					<div class="header__logo">
						<a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-tent-white.svg" alt=""></a>
					</div>
					<nav class="header__nav">
						<a href="">SHOP</a>
						<a href="">JOURNAL</a>
						<a href="">ABOUT</a>
						<a href="">FIND US</a>
					</nav>
				</div>
			</header>
			<div id="content" class="site-content content-wrapper">