<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


	<section class="logo-banner">
		<img src="<?php echo get_template_directory_uri(); ?>/image/inhabitent-logo-full.svg" width="" height="" alt="" />
	</section>

	<section>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<?php the_content(); ?>
	</div>

<?php endwhile; ?>

	<div class="navigation">
		<div class="next-posts"><?php next_posts_link(); ?></div>
		<div class="prev-posts"><?php previous_posts_link(); ?></div>
	</div>

<?php else : ?>

	<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">
		<h1>Not Found</h1>
	</div>

<?php endif; ?>
	</section>


<section class="journal" >
<?php
   $args = array( 'post_type' => 'post', 'order' => 'ASC', 'posts_per_page' => '3');
   $journal_posts = get_posts( $args ); // returns an array of posts
?>
<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
   <h2><?php the_title();?></h2>
   <?php the_post_thumbnail();?>
<?php endforeach; wp_reset_postdata(); ?>
</section>

<section class="adventure">
<?php
   $args = array( 'post_type' => 'adventure', 'order' => 'ASC', 'posts_per_page' => '4');
   $adventure_posts = get_posts( $args ); // returns an array of posts
?>
<?php foreach ( $adventure_posts as $post ) : setup_postdata( $post ); ?>
   <h2><?php the_title();?></h2>
   <?php the_post_thumbnail();?>
<?php endforeach; wp_reset_postdata(); ?>
</section>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
