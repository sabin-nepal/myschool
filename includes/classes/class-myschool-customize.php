<?php
/**
* Customizer settings for this theme
*/

if ( ! class_exists( 'MySchool_Customize' ) ) {

	class MySchool_Customize {

		public static function register( $wp_customize ) {

			/* Define new section to theme customizer */
			$wp_customize->add_section(
				'options',
				array(
					'title'       => __( 'Theme Options', 'myschool' ),
					'priority'    => 35,
					'capability'  => 'edit_theme_options',
					'description' => __( 'Allows you to change diffrent setting related to Myschool', 'myschool' ),
				)
			);
			//enable or disnable sidebar in blog
			$wp_customize->add_setting(
				'enable_sidebar_blog',
				array(
					'capability'        => 'edit_theme_options',
					'default'           => true,
					'sanitize_callback' => array( __CLASS__, 'sanitize_checkbox' ),

				)
			);
			$wp_customize->add_control(
				'enable_sidebar_blog',
				array(
					'type'    => 'checkbox',
					'label'   => __( 'Sidebar', 'myschool' ),
					'section' => 'options',

				)
			);
			/**
			 *Theme Customizer
			*/
			$wp_customize->add_section(
				'colors',
				array(
					'title'       => __( 'Colors', 'myschool' ),
					'priority'    => 36,
					'capability'  => 'edit_theme_options',
					'description' => __( 'Allows you to change Colors related to Myschool', 'myschool' ),
				)
			);
			//Customizer settings and control to edit the colors of this theme
			$wp_customize->add_setting(
				'header_footer_color',
				array(
					'capability'        => 'edit_theme_options',
					'default'           => '#35373e',
					'sanitize_callback' => 'sanitize_hex_color',

				)
			);
			$wp_customize->add_control(
				new Wp_Customize_Color_Control(
					$wp_customize,
					'header_footer_color',
					array(
						'label'   => __( 'Header & Footer Color', 'myschool' ),
						'section' => 'colors',
					)
				)
			);
		}
		/**
		 * Sanitize boolean for checkbox.
		 *
		 * @param bool $checked Whether or not a box is checked.
		 * @return bool
		 */
		public static function sanitize_checkbox( $checked ) {
			return ( ( isset( $checked ) && true === $checked ) ? true : false );
		}
	}
	add_action( 'customize_register', array( 'MySchool_Customize', 'register' ) );
}
