<?php
/**
 * Template part for displaying single posts.
 *
 * @package Inhabitent_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large' ); ?>
		<?php endif; ?>
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<div class="entry-meta">
			<?php inhabitent_posted_on(); ?> / <?php inhabitent_comment_count(); ?> / <?php inhabitent_posted_by(); ?>
		</div>
	</header>
	<section class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</section>

	<footer class="entry-footer">
		<?php inhabitent_entry_footer(); ?>
	</footer>
	<div class="social-media-section">
		<button class="social-media-btn text-uppercase"><i class="fa fa-facebook" aria-hidden="true"></i> like</button>
		<button class="social-media-btn text-uppercase"><i class="fa fa-twitter" aria-hidden="true"></i> tweet</button>
		<button class="social-media-btn text-uppercase"><i class="fa fa-pinterest" aria-hidden="true"></i> pin</button>
	</div>
</article>
