<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

	<section class="singleJournal">

		<?php while ( have_posts() ) : the_post(); ?>
		<div class="singleJournalLink">
		<div class= "journalSingleImage">
      <div class="journalSingleTitle"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
          <?php the_post_thumbnail();?>
		<div class="journalSingleInfo"><p><?php echo get_the_date();?> / <?php echo $post->comment_count; ?> Comments / By <?php the_author(); ?></p></div>
		  <p><?php the_content(); ?></p>
		  <div class="socialMedia">
				<button><i class="fab fa-facebook-f"></i> LIKE</button>
				<button><i class="fab fa-twitter"></i> TWEET</button>
				<button ><i class="fab fa-pinterest"></i> PIN</button>
				</div>
		  </div>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				?>

		<?php endwhile; // End of the loop. ?>
		</div>

		<div class="widgetSidebar">
              <?php get_sidebar(); ?>
		  </div>
		</section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
