<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main find-us" role="main">

		<section class="findUs">
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="findUsLink">
				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>
				</div>
			<div class="widgetSidebar">
              <?php get_sidebar(); ?>
		  </div>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
