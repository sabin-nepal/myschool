<?php
/**
 * MySchool Colors Patterns
 *
 * @package WordPress
 */

function myschool_customize_css() {

	ob_start();
	$header_footer_bgcolor = get_theme_mod( 'footer_color', '#35373e' );
	?>
	.footer {
		background-color: <?php echo $header_footer_bgcolor; ?>
	}
	<?php
	$css = ob_get_clean();
	return $css;
}
