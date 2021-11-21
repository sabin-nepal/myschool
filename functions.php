<?php
/**
*My Style functions and definations

**/

function myschool_theme_support() {
	// Make theme available for translation.
	load_theme_textdomain( 'myschool', get_template_directory() . '/languages' );
	//Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Set post thumbnail size.
	set_post_thumbnail_size( 1200, 9999 );

	//Enable support for logo in customizer
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 120,
			'width'       => 120,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);
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

//required files

require get_template_directory() . '/includes/classes/class-myschool-customize.php';

// Function for all template tags of this theme
require get_template_directory() . '/includes/template-tags.php';

//generate customizer css
require get_template_directory() . '/includes/colors-pattern.php';

//custom navwalker
require get_template_directory() . '/includes/classes/class-myschool-navwalker.php';

/**
 * Register and Enqueue Styles.
 *
 * @since My School 1.0
 */
function myschool_register_styles() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', '', '', 'all' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css', '', '', 'all' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.min.css', '', '', 'all' );
	wp_enqueue_style( 'myschool-style', get_stylesheet_uri(), array(), $theme_version );
	wp_enqueue_style( 'myschool-customize', get_template_directory_uri() . '/assets/css/customizer.css' );
	wp_add_inline_style( 'myschool-customize', myschool_customize_css() );

}

add_action( 'wp_enqueue_scripts', 'myschool_register_styles' );

/**
 * Register and Enqueue Scripts.
 *
 * @since My School 1.0
 */
function myschool_register_scripts() {

	$theme_version = wp_get_theme()->get( 'Version' );

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array( 'jquery' ), '', true );
	wp_enqueue_script( 'myschool-js', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ), $theme_version, true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.js', array( 'jquery' ), '', true );
}

add_action( 'wp_enqueue_scripts', 'myschool_register_scripts' );

/**
 * Register sidebar.
 *
 * @since My School 1.0
 */
function myschool_sidebar_registration() {

	//Footer1
	register_sidebar(
		array(
			'name'          => __( 'Footer 1', 'myschool' ),
			'id'            => 'sidebar-1',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
			'before_widget' => '<div class="col-md-6">',
			'after_widget'  => '</div>',
		)
	);

	//blog sidebar
	register_sidebar(
		array(
			'name'          => __( 'Blog', 'myschool' ),
			'id'            => 'sidebar-2',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
			'before_widget' => '',
			'after_widget'  => '',
		)
	);

}
add_action( 'widgets_init', 'myschool_sidebar_registration' );
