<?php
/**
 * The Main Template File.
 *
 * This is the most generic template file in a WordPress theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

get_header(); ?>

<?php if ( is_home() && ! is_front_page() && ! empty( single_post_title( '', false ) ) ) : ?>
	<div id="blog" class="fullwidth-section bg-callout ">
		<div class="container">
			<div class="col-md-12 item_bottom">
				<div class="section-title item_bottom text-center text-white">
					<h1 class="page-title"><?php single_post_title(); ?></h1>
				</div>
			</div>
		</div>
	</div>
<?php endif; ?>

<?php
get_footer();
