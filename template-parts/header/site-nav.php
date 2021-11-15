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
		<nav class="custom_nav">
			<a href="javascript:void(0)" class="mobile_menu_icon">
				<div class="ham_icon_wrapper">
					<span></span>
					<span></span>
					<span></span>
				</div>
				<div>Menu</div>
			</a>
		<?php
		if ( has_nav_menu( 'primary' ) ) {
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'container'      => 'd-flex align-items-center justify-content-between',
					'menu_class'     => 'float-left nav-links list-unstyled mb-0',
					'walker'         => new MySchool_Navwalker(),
				)
			);
		}
		?>
		</nav>
	</div>
</div>
