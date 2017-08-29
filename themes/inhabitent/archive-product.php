<?php
/**
 * The template for displaying archive products pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php query_posts( array( 'post_type' =>'product', 'orderby' => 'date', 'order' => 'ASC' ) ); ?>
		<?php
			$args = array( 'taxonomy' => 'product-type');
			$product_types = get_terms( $args );
		?>
		<?php if ( have_posts() ) : ?>
			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title text-center">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
				<div class="flex-container-no-wrap">
				<?php foreach ( $product_types as $product_type ) : setup_postdata( $product_type ); ?>
					<div class="flex-item-25 text-center">
						<a class="text-uppercase" href="<?php echo get_term_link($product_type) ?>"><?php echo $product_type->name ?></a>
					</div>
				<?php endforeach; wp_reset_postdata(); ?>
				</div>
			</header>
			<section class="flex-container">
			<?php while ( have_posts() ) : the_post(); ?>
        <div class="flex-item-25">
          <?php if ( has_post_thumbnail() ) : ?>
					<a href=<?php echo get_post_permalink() ?>><div class="product-thumbnail"><?php the_post_thumbnail( 'large' ); ?></div></a>
					<?php endif; ?>
					<div class="product-title-section">
						<h2 class="entry-title">
							<span><?php the_title(); ?></span> 
							<span>..................................................</span>
							<span><?php echo CFS()->get( 'price' ); ?></span>
						</h2>
					</div>
				</div>
			<?php endwhile; ?>
			</section>
		<?php endif; ?>
		</main>
	</div>
	
<?php get_footer(); ?>
