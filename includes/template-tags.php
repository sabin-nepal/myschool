<?php
/**
 * Custom template tags for this theme
 *
 */


if ( ! function_exists( 'myschool_one_posted_by' ) ) {
	/**
	 * Prints HTML with meta information about theme author.
	 *
	 * @return void
	 */
	function myschool_posted_by() {
		if ( ! get_the_author_meta( 'description' ) && post_type_supports( get_post_type(), 'author' ) ) {
			echo '<span class="author"><i class="fa fa-user"></i> ';
			printf(
				/* translators: %s: Author name. */
				esc_html__( 'By %s', 'myschool' ),
				'<a href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" rel="author">' . esc_html( get_the_author() ) . '</a>'
			);
			echo '</span>';
		}
	}
}

if ( ! function_exists( 'myschool_post_meta_footer' ) ) {

	/**
	 * Prints HTML with meta information for the categories,tags and comments
	 *
	 * @return void
	 */

	function myschool_post_meta_footer() {
		// Early exit if not a post.
		if ( 'post' !== get_post_type() ) {
			return;
		}
		myschool_posted_by();
		echo '<span class="time"><i class="fa fa-clock-o"></i> ' . esc_attr( get_the_date() ) . '</span>';
		if ( has_category() ) {
			$categories_list = get_the_category_list( __( ', ', 'myschool' ) );
			if ( $categories_list ) {
				echo '<span class="category"><i class="fa fa-folder"></i> ' . $categories_list . '</span>';
			}
		}
	}
}

if ( ! function_exists( 'myschool_post_thumbnail' ) ) {

	function myschool_post_thumbnail() {

		if ( is_singular() ) : ?>
			<div class="post-thumb mb-3">
				<?php
				the_post_thumbnail(
					'post-thumbnail',
					array(
						'loading' => false,
						'class'   => 'img-fluid',
					)
				);
				?>
			</div>
			<?php else : ?>
				<div class="post-thumb mb-3">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'post-thumbnail', array( 'class' => 'img-fluid' ) ); ?></a>
				</div>
		<?php endif; ?>
		<?php
	}
}

if ( ! function_exists( 'myschool_before_loop' ) ) {

	/**
	 * Display HTML before loop
	 *
	 * @return void
	 */
	function myschool_before_loop() {
		$output  = '<section class="new-line py-5">';
		$output .= '<div class="container"><div class="row">';
		$output .= '<div id="primary" class="col-md-8 col-sm-8">';
		$output .= '<div class="blog-item">';
		echo $output;
	}
}

if ( ! function_exists( 'myschool_after_loop' ) ) {
	/**
	 * Display HTML after loop
	 *
	 * @return void
	 */
	function myschool_after_loop() {
		echo '</div></div></div></section>';
	}
}
