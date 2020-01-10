<?php

/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

</div><!-- #content -->

<footer class="footer" role="contentinfo">
	<div class="content-wrapper">
		<div class="footer__box">
			<div class="footer__info">
				<div class="footer__list footer__list--contact">
					<h3>CONTACT INFO</h3>
					<ul class="footer__infoNav">
						<li><i class="far fa-envelope"></i>info@inhabitent.com</li>
						<li><i class="fas fa-phone-alt"></i>778-456-7891</li>
					</ul>
					<div class="footer__infoSocial">
						<a href=""><i class="fab fa-facebook-square"></i></a>
						<a href=""><i class="fab fa-twitter-square"></i></a>
						<a href=""><i class="fab fa-google-plus-square"></i></a>
					</div>
				</div>
				<div class="footer__list footer__list--hours">
					<h3>BUSINESS HOURS</h3>
					<ul class="footer__infoNav">
						<li><b>Monday-Friday</b>:9am to 5pm</li>
						<li><b>Saturday</b>:10am to 2pm</li>
						<li><b>Sunday</b>:Closed</li>
					</ul>
				</div>
			</div>
			<div class="footer__logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg" alt=""></div>
		</div>
		<div class="footer__copy">COPYRIGHT ©︎ 2020 INHABITENT</div>
	</div>
</footer>
</div>
</div>
<?php wp_footer(); ?>

</body>

</html>