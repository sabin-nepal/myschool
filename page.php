<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 */

get_header();

/* Check if is front page */
if ( ! is_front_page() ) {

	get_template_part( 'template-parts/content', 'header' );

}

/* Start the Loop */

if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', 'page' );
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
	}
}
