<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

	<section class="productPageContainer">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="product-taxonomy-type">
			<?php if ( has_post_thumbnail() ) : ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<img src="<?php the_post_thumbnail_url(); ?>"/></a>
					<div class="productDescription">
					<p><?php the_title(); ?>......... <?php echo CFS()->get ('price'); ?></p>
					</div>
				<?php endif; ?>
				</div>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
