<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 */

get_header();

// If comments are open or there is at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) {
	comments_template();
}
