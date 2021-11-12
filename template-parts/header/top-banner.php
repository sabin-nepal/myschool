<?php
/**
 * The template part for displaying top header
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 */

?>

<div class="top-header">
	<div class="container">
		<div class="float-left">
			<?php echo sanitize_text_field( get_theme_mod( 'top_banner_title' ) ); ?>
		</div>
		<?php
		if ( ! empty( get_theme_mod( 'facebook' ) ) || ! empty( get_theme_mod( 'twitter' ) ) ) :
			?>
		<div class="float-right top-social-icons">
			<ul class="list-unstyled list-inline mb-0">
				<?php if ( ! empty( get_theme_mod( 'facebook' ) ) ) : ?>
					<li class="list-inline-item">
						<a href="<?php echo esc_url_raw( get_theme_mod( 'facebook' ) ); ?>"><i class="fa fa-facebook"></i></a>
					</li>
				<?php endif; ?>
				<?php if ( ! empty( get_theme_mod( 'facebook' ) ) ) : ?>
				<li class="list-inline-item">
					<a href="<?php echo esc_url_raw( get_theme_mod( 'twitter' ) ); ?>"><i class="fa fa-twitter"></i></a>
				</li>
				<?php endif; ?>
			</ul>
		</div>
		<?php endif; ?>
		<div class="clearfix"></div>
	</div>
</div>
