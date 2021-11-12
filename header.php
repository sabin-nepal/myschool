<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700" rel="stylesheet">

		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>
<?php get_template_part( 'template-parts/header/top', 'banner' ); ?>
<div class="info-header">
	<div class="container">
		<div class="d-flex align-items-center justify-content-between">
			<div class="i-h-contact">
				<div class="i-h-subtitle">
					<?php echo sanitize_text_field( get_theme_mod( 'mail' ) ); ?>
				</div>
				<div class="i-h-title">
				<?php echo sanitize_text_field( get_theme_mod( 'phone_number' ) ); ?>
				</div>
			</div>
			<?php myschool_logo(); ?>
			<div class="i-h-opening">
				<div class="i-h-subtitle">
					Opening Time:
				</div>
				<div class="i-h-title">
				<?php echo sanitize_text_field( get_theme_mod( 'opening_time' ) ); ?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_template_part( 'template-parts/header/site', 'nav' ); ?>
