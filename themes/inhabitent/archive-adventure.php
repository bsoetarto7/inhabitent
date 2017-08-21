<?php
/**
 * The template for displaying archive adventure pages.
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    <?php query_posts( array( 'post_type' =>'adventure', 'orderby' => 'date', 'order' => 'ASC' ) ); ?>
		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
					the_archive_title( '<h1 class="page-title text-center">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->
      
      <section class="flex-container">
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="flex-item-50">
          <div class="adventure-journal">
            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail( 'large' ); ?>
            <?php endif; ?>
            <div class="journal-title">
              <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
              <a href=<?php echo get_post_permalink() ?> class="inha-transparent-white-border-btn text-uppercase">read more</a>
            </div>
          </div>
        </div>
			<?php endwhile; ?>
      </section>
		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
