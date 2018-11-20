<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


	<section class="shopping-product">
		<?php while ( have_posts() ) : the_post(); ?>

		<?php the_post_thumbnail();?>
		<div class="product-description">
		<h2><?php the_title();?></h2>
		<?php echo CFS()->get ('price'); ?>
		<p><?php the_content();?></p>
		<div class="socialMedia">
				<button><i class="fab fa-facebook-f"></i> LIKE</button>
				<button><i class="fab fa-twitter"></i> TWEET</button>
				<button ><i class="fab fa-pinterest"></i> PIN</button>
				</div>
		</div>

		<?php endwhile; // End of the loop. ?>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
