<?php
/**
 * The template for displaying the footer.
 *
 * @package Inhabitent_Theme
 */

?>
			</div>
			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-footer-items container-fluid">
					<div class="flex-container-no-wrap">
						<div class="footer-items flex-item-25">
							<h2 class="text-uppercase">contact info</h2>
							<p class="contact-meta">
								<i class="fa fa-envelope"></i>
								<a href="mailto:info@inhabitent.com">info@inhabitent.com</a>
							</p>
							<p class="contact-meta">
								<i class="fa fa-phone" aria-hidden="true"></i>
								<a href="tel:7784567891">778-456-7891</a>
							</p>
							<div class="footer-social-media">
								<i class="fa fa-facebook-square" aria-hidden="true"></i>
								<i class="fa fa-twitter-square" aria-hidden="true"></i>
								<i class="fa fa-google-plus-square" aria-hidden="true"></i>
							</div>
						</div>
						<div class="footer-items flex-item-25">
							<h2 class="text-uppercase">business hours</h2>
							<p><span class="day-of-week">Monday-Friday:</span> 9am to 5pm</p>
							<p><span class="day-of-week">Saturday:</span> 10am to 2pm</p>
							<p><span class="day-of-week">Sunday:</span> Closed</p>
						</div>
						<div class="footer-items flex-item-50">
							<img src=<?php echo get_stylesheet_directory_uri(); ?>/images/inhabitent-logo-text.svg alt="Company logo"/>
						</div>
					</div>
					<p class="text-center text-uppercase footer-copyright">copyright © <?php echo date('Y') ?> inhabitent</p>
				</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->
		<?php wp_footer(); ?>
	</body>
</html>
