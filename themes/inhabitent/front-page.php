<?php
/**
 * The template for displaying all pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <section class="home-hero">
        <img src=<?php echo get_stylesheet_directory_uri(); ?>/images/inhabitent-logo-full.svg alt="hero image"/>
			</section>
			<section class="container-fluid home-product-terms">
				<h2 class="text-uppercase text-center">shop stuff</h2>
				<?php
					$args = array( 'post_type' => 'product-type');

					$product_types = get_terms( $args ); // returns an array of posts
				?>
				<div class="flex-container-no-wrap">
					<?php foreach ( $product_types as $product_type ) : setup_postdata( $product_type ); ?>
					<div class="flex-item-25">
						<div class="product-term-name">
							<img src=<?php echo get_stylesheet_directory_uri() . '/images/' . strtolower($product_type->name) .'.svg' ; ?> alt="<?php echo $product_type->name . ' category icon' ?>">
							<p><?php echo $product_type->description ?></p>
							<a class="text-uppercase" href="<?php echo home_url() ?>/product-type/<?php echo $product_type->slug ?>"><?php echo $product_type->name . ' Stuff' ?></a>
						</div>
					</div>
					<?php endforeach; wp_reset_postdata(); ?>
				</div>
			</section>
			<section class="container-fluid home-journal-post">
				<h2 class="text-uppercase text-center">inhabitent journal</h2>
				<?php
					$args = array( 'post_type' => 'post', 'orderby' => 'date', 'order' => 'DESC', 'numberposts' => '3' );
					$journal_posts = get_posts( $args ); // returns an array of posts
				?>
				<div class="flex-container-no-wrap">
					<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
						<div class="journal-post-item flex-item-33">
							<div class="journal-thumbnail">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'large' ); ?>
								<?php endif; ?>
							</div>
							<header class="entry-header">
								<div class="entry-meta">
									<p><?php inhabitent_posted_on(); ?> / <?php esc_html( comments_number( '0 Comments', '1 Comment', '% Comments' ) ); ?></p> 
								</div>
								<div class="entry-title">
									<?php the_title( sprintf( '<h3><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
								</div>
								<a href=<?php echo get_post_permalink() ?> class="entry-button text-uppercase">read entry</a>
							</header>
						</div>
					<?php endforeach; wp_reset_postdata(); ?>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
