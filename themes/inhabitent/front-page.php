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
			<section class="container-fluid home-blog-post">
				<h2 class="text-uppercase text-center">inhabitent journal</h2>
				<?php
					$args = array( 'post_type' => 'post', 'orderby' => 'date', 'order' => 'DESC', 'numberposts' => '3' );
					$journal_posts = get_posts( $args ); // returns an array of posts
				?>
				<div class="flex-container-no-wrap">
					<?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
						<div class="journal-post-item flex-item-33">
							<?php if ( has_post_thumbnail() ) : ?>
								<?php the_post_thumbnail( 'large' ); ?>
							<?php endif; ?>
							<p><?php the_date(); ?> / <?php esc_html( comments_number( '0 Comments', '1 Comment', '% Comments' ) ); ?></p> 
							<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
							<a href=<?php echo get_post_permalink() ?>>Read More</a>
						</div>
					<?php endforeach; wp_reset_postdata(); ?>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
