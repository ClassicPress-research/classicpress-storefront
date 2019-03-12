<?php
/**
 * The template used for displaying page content in template-fullscreen.php
 *
 * @package storefront
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	/**
	 * Functions hooked in to storefront_page add_action
	 *
	 * @hooked storefront_page_content         - 20
	 */
	do_action( 'storefront_fullscreen' );
	?>
</article><!-- #post-## -->
