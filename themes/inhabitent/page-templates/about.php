<?php
/**
 * Template Name: About Page
 *
 * @package Inhabitent_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header custom-hero flex-container-no-wrap">
          <div class="container-fluid">
            <?php the_title( '<h1 class="entry-title">', '</h1>'); ?>
          </div>
        </header>
        <div class="container-fluid">
          <div class="entry-content">
            <h2>Our Story</h2>
            <?php echo CFS()->get( 'about_our_story' ); ?>
            <h2>Our Team</h2>
            <?php echo CFS()->get( 'about_our_team' ); ?>
          </div>
        </div>
      </article>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
