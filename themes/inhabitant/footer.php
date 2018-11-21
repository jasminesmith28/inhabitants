<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-sidebar">
					 <?php get_sidebar(); ?>
					</div>

								
			<p>COPYRIGHT © 2019 INHABITENT</p>

				<div class="footer-logo">
				<img src="<?php echo get_template_directory_uri(); ?>/image/inhabitent-logo-text.svg"/>
					</div>
	
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
	</body>
</html>
