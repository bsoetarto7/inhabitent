<?php
/**
 * The template for displaying all single product posts.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">
          <?php if ( has_post_thumbnail() ) : ?>
            <?php the_post_thumbnail( 'large' ); ?>
          <?php endif; ?>
        </header>
        <section class="entry-content">
          <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
          <p class="entry-price"><?php echo CFS()->get( 'price' ); ?></p>
          <?php the_content(); ?>
          <div class="social-media-section">
            <button class="social-media-btn text-uppercase"><i class="fa fa-facebook" aria-hidden="true"></i> like</button>
            <button class="social-media-btn text-uppercase"><i class="fa fa-twitter" aria-hidden="true"></i> tweet</button>
            <button class="social-media-btn text-uppercase"><i class="fa fa-pinterest" aria-hidden="true"></i> pin</button>
          </div>
        </section>
      </article>
		<?php endwhile; ?>
		</main>
	</div>

<?php get_footer(); ?>
