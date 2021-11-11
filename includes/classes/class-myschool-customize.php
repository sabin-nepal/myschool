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
			//define text for top banner
			$wp_customize->add_setting(
				'top_banner_title',
				array(
					'capability'        => 'edit_theme_options',
					'default'           => '',
					'sanitize_callback' => 'wp_filter_nohtml_kses',

				)
			);
			$wp_customize->add_control(
				'top_banner_title',
				array(
					'type'    => 'text',
					'label'   => __( 'Top Banner Title', 'myschool' ),
					'section' => 'options',

				)
			);
			//mail
			$wp_customize->add_setting(
				'mail',
				array(
					'capability'        => 'edit_theme_options',
					'default'           => '',
					'sanitize_callback' => 'wp_filter_nohtml_kses',

				)
			);
			$wp_customize->add_control(
				'top_banner_title',
				array(
					'type'    => 'text',
					'label'   => __( 'Mail', 'myschool' ),
					'section' => 'options',

				)
			);
			//define phone number
			$wp_customize->add_setting(
				'phone_number',
				array(
					'capability'        => 'edit_theme_options',
					'default'           => '',
					'sanitize_callback' => 'wp_filter_nohtml_kses',

				)
			);
			$wp_customize->add_control(
				'phone_number',
				array(
					'type'    => 'text',
					'label'   => __( 'Phone Number', 'myschool' ),
					'section' => 'options',

				)
			);
			//opening time
			$wp_customize->add_setting(
				'opening_time',
				array(
					'capability'        => 'edit_theme_options',
					'default'           => '',
					'sanitize_callback' => 'wp_filter_nohtml_kses',

				)
			);
			$wp_customize->add_control(
				'opening_time',
				array(
					'type'    => 'text',
					'label'   => __( 'Opening Time', 'myschool' ),
					'section' => 'options',

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
					'type'        => 'checkbox',
					'label'       => __( 'Sidebar', 'myschool' ),
					'section'     => 'options',
					'description' => __( 'Enable or disable Sidebar in blog and single post', 'myschool' ),

				)
			);
			/**
			 *Colors
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
			/**
			 *Social Links
			*/
			$wp_customize->add_section(
				'social',
				array(
					'title'       => __( 'Social Links', 'myschool' ),
					'priority'    => 38,
					'capability'  => 'edit_theme_options',
					'description' => __( 'Allows you to change Social Links of My School', 'myschool' ),
				)
			);
			//define social links
			$wp_customize->add_setting(
				'facebook',
				array(
					'capability'        => 'edit_theme_options',
					'default'           => '',
					'sanitize_callback' => array( __CLASS__, 'sanitize_url' ),

				)
			);
			$wp_customize->add_control(
				'facebook',
				array(
					'type'        => 'url',
					'label'       => __( 'Facebook', 'myschool' ),
					'section'     => 'social',
					'input_attrs' => array(
						'placeholder' => __( 'http://www.facebook.com' ),
					),

				)
			);

			//twitter
			$wp_customize->add_setting(
				'twitter',
				array(
					'capability'        => 'edit_theme_options',
					'default'           => '',
					'sanitize_callback' => array( __CLASS__, 'sanitize_url' ),

				)
			);
			$wp_customize->add_control(
				'twitter',
				array(
					'type'        => 'url',
					'label'       => __( 'Twitter', 'myschool' ),
					'section'     => 'social',
					'input_attrs' => array(
						'placeholder' => __( 'http://www.twitter.com' ),
					),

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
		/**
		 * Sanitize field for url.
		 */
		public static function sanitize_url( $url ) {
			return esc_url_raw( $url );
		}
	}
	add_action( 'customize_register', array( 'MySchool_Customize', 'register' ) );
}
