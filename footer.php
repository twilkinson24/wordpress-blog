<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

		<footer id="colophon" class="site-footer">
			
			<div class="container">
				<?php if ( is_active_sidebar( 'footer_top_widget_area' ) ) : ?>
					<div id="footer-top-sidebar" class="widget-area" role="complementary">
						<?php dynamic_sidebar( 'footer_top_widget_area' ); ?>
					</div>
				<?php endif; ?>

				<?php if ( is_active_sidebar( 'footer_widget_area_bottom_left' ) || is_active_sidebar( 'footer_widget_area_bottom_right' ) ) : ?>
				<div class="bottom-footer row justify-content-between mx-auto">

					<div id="footer-bottom-left" class="widget-area mx-auto col-lg-6" role="complementary">
						<?php dynamic_sidebar( 'footer_widget_area_bottom_left' ); ?>
					</div>

					<div id="footer-bottom-left" class="widget-area mx-auto col-lg-6" role="complementary">
						<?php dynamic_sidebar( 'footer_widget_area_bottom_right' ); ?>
					</div>

				</div>
				<?php else : ?>
					<div class="widget-area">
						<p>widgets need to be added in wp dashboard</p>
					</div>	
				<?php endif; ?>
			</div>

		</footer><!-- #colophon -->
	
</div><!-- #page -->

<?php wp_footer(); ?>

	<!-- Start of HubSpot Embed Code -->
	<script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/435812.js"></script>
	<!-- End of HubSpot Embed Code -->
</body>
</html>
