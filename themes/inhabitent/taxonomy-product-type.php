<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : ?>
			<header class="page-header">
			<h1 class="page-title text-center"><?php echo single_term_title(); ?></h1>
				<?php
					the_archive_description( '<div class="taxonomy-description text-center">', '</div>' );
				?>
			</header><!-- .page-header -->
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
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
