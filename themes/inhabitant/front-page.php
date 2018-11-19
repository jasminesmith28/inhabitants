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
		<img src="<?php echo get_template_directory_uri(); ?>/image/inhabitent-logo-full.svg"/>
	</section>

	<section class="shop-section">
	<h1>SHOP STUFF</h1>
<div class="product-taxonomy-section">
<?php foreach (get_terms(array("taxonomy" => "product-type")) as $product_type): ?>
                    <div class="product-type">
                <img src="<?php echo get_template_directory_uri(); ?>/images/product-type-icons/<?php echo $product_type->slug ?>.svg">
						<p><?php echo $product_type->description ?></p>
		
     <button class="selectTaxonomy"><a href="<?php echo get_term_link($product_type->slug, 'product-type' ); ?>"><?php echo $product_type->name ?> stuff</a></button>
                    </div>
            <?php endforeach;?>
	</div>
	</section>


<section class="journal" >
<h1>INHABITANT JOURNAL</h1>
<?php
   $args = array( 'post_type' => 'post', 'order' => 'ASC', 'posts_per_page' => '3');
   $journal_posts = get_posts( $args ); // returns an array of posts
?>
<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
<div class="selectJournal">
	<?php the_post_thumbnail();?>
	<div class="productHeading">
	<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
   	<p><?php the_date();?> /
	  <?php echo $post->comment_count; ?> comments </p>
	  <div>
</div>
   
<?php endforeach; wp_reset_postdata(); ?>
</section>

<section class="adventure">
<?php
   $args = array( 'post_type' => 'adventure', 'order' => 'ASC', 'posts_per_page' => '4');
   $adventure_posts = get_posts( $args ); // returns an array of posts
?>
<?php foreach ( $adventure_posts as $post ) : setup_postdata( $post ); ?>

<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
   <?php the_post_thumbnail();?>

<?php endforeach; wp_reset_postdata(); ?>
</section>




		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
