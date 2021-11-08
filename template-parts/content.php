<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	<?php
		myschool_post_thumbnail();
		the_title( sprintf( '<h3 class="post-title"><a href="%s">', esc_attr( esc_url( get_permalink() ) ) ), '</a></h3>' );
		myschool_post_meta_footer();
	?>
	<div class="post-excerpt clearfix">
		<?php
		if ( is_search() || ! is_singular() ) {
			the_excerpt();
		} else {
			the_content( __( 'Continue Reading', 'myschool' ) );
		}
		?>
	</div>
</article>
