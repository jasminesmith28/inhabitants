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
				?>
			<?php foreach (get_terms(array("taxonomy" => "product-type")) as $product_type): ?>
     		<a href="<?php echo get_term_link($product_type->slug, 'product-type' ); ?>"><?php echo $product_type->name ?></a>
            <?php endforeach;?>

			</header><!-- .page-header -->


			<section class="productMainContainer">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
			<div class="product-taxonomy">
			<?php if ( has_post_thumbnail() ) : ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<img src="<?php the_post_thumbnail_url(); ?>"/></a>
					<div class="productDescription">
					<p><?php the_title(); ?>......... <?php echo CFS()->get ('price'); ?></p>
					</div>
				<?php endif; ?>
				</div>

			<?php endwhile; ?>
		<?php endif; ?>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
