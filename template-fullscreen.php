<?php
/**
 * The template for displaying full screen pages.
 *
 * Template Name: FullScreen - No Title!
 *
 * @package storefront
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) :
				the_post();

				do_action( 'storefront_fullscreen_page_before' );

				get_template_part( 'content', 'fullscreen' );
				
				do_action( 'storefront_fullscreen_page_after' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
