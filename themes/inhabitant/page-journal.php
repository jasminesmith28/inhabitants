<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<section class="archiveJournal" >

<?php
   $args = array( 'post_type' => 'post', 'order' => 'ASC');
   $journal_posts = get_posts( $args ); // returns an array of posts?>

    <div class="archiveJournalLink" >
      <?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
      <div class= "journalImage">
      <div class="journalTitle"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>
          <?php the_post_thumbnail();?>
           <div class="journalInfo"><p><?php echo get_the_date();?> / <?php echo $post->comment_count; ?> Comments / By <?php the_author(); ?></p></div>
          <p><?php the_excerpt(); ?></p>
      </div>
      <button class="journalButton"><a href="<?php the_permalink(); ?>">READ MORE</a></button>
   
<?php endforeach; wp_reset_postdata(); ?>
    </div>
          <div class="widgetSidebar">
              <?php get_sidebar(); ?>
          </div>
  </section>
</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>

