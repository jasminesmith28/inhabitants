<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">



<section class="journal" >
<?php
   $args = array( 'post_type' => 'post', 'order' => 'ASC');
   $journal_posts = get_posts( $args ); // returns an array of posts
?>
<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
<?php the_post_thumbnail();?>
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
   <p><?php echo get_the_date();?> /
  <?php echo $post->comment_count; ?> COMMENTS/ BY <?php the_author(); ?></p>
  <p><?php the_excerpt(); ?></p>
   
<?php endforeach; wp_reset_postdata(); ?>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
