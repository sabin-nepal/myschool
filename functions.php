<?php
/**
*My Style functions and definations

**/

function myschool_theme_support() {

	//Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Set post thumbnail size.
	set_post_thumbnail_size( 1200, 9999 );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );
	//register nav menus
	register_nav_menus(
		array(
			'primary' => __( 'Primary', 'myschool' ),
			'footer'  => __( 'footer', 'myschool' ),
		)
	);

}
add_action( 'after_setup_theme', 'myschool_theme_support' );

/**
 * Register and Enqueue Styles.
 *
 * @since My Style 1.0
 */
function myschool_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'myschool-style', get_stylesheet_uri(), array(), $theme_version );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', '', '', 'all' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css', '', '', 'all' );
	//wp_enqueue_style( 'lightbox', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/css/lightbox.min.css', '', '', 'all' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css', '', '', 'all' );

}

add_action( 'wp_enqueue_scripts', 'myschool_register_styles' );

/**
 * Register and Enqueue Scripts.
 *
 * @since My Style 1.0
 */
function myschool_register_scripts() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'myschool-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), $theme_version, true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.js', array( 'jquery' ), '', true );
	//wp_enqueue_script( 'lightbox', get_template_directory_uri() . 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.10.0/js/lightbox.min.js', array( 'jquery' ), '', true );
}

add_action( 'wp_enqueue_scripts', 'myschool_register_scripts' );
