<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 */

get_header();

get_template_part( 'template-parts/content', 'header' );
myschool_before_loop();
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content' );
	// If comments are open or there is at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile;
myschool_after_loop();
get_footer();
