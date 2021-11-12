<?php
/**
 * The template part for displaying site nav
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 */

?>

<div class="nav-wrapper">
	<div class="container">
		<nav class="navbar navbar-expand-md custom_nav justify-content-between navbar-dark">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>Menu
			</button> 
		<div class="collapse navbar-collapse" id="main_nav">
		<?php
		if ( has_nav_menu( 'primary' ) ) {
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container'      => false,
					'menu_class'     => 'navbar-nav',
				)
			);
		}
		?>
		</div>
		</nav>
	</div>
</div>