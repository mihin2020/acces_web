<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 *
 * @package awp-companion
 */

	if ( ! function_exists( 'awp_companion_awpbusinesspress_main_slider_default_content' ) ) :
		//Slider content
		function awp_companion_awpbusinesspress_main_slider_default_content( $wp_customize ){
			
			$awpbusinesspress_main_slider_data = $wp_customize->get_setting( 'awpbusinesspress_main_slider_content' );
			if ( ! empty( $awpbusinesspress_main_slider_data ) ) {
				$awpbusinesspress_main_slider_data->default = json_encode( array(
					array(
						'title'      	=> esc_html__( 'We Create Stunning WordPress Themes', 'awp-companion' ),
						'text'       	=> esc_html__( 'AWP BusinessPress have to satisfy real needs of real projects. We got a pack of tools for that.','awp-companion' ),
						'button_text'	=> __('Know More','awp-companion'),
						'link'			=> '#',
						'image_url'		=> awp_companion_plugin_url .'/inc/awpbusinesspress/img/slider/1.jpg',
						'open_new_tab'	=> 'no',
						'id'			=> 'customizer_repeater_56d7ea7f40b10',
					),
					array(
						'title'			=> esc_html__( 'Digital Marketing & Branding','awp-companion' ),
						'text'			=> esc_html__( 'We provide world best Services for our clients to grow their businesses', 'awp-companion' ),
						'button_text'	=> __('Check it out','awp-companion'),
						'link' 			=> '#',
						'image_url'		=> awp_companion_plugin_url .'/inc/awpbusinesspress/img/slider/2.jpg',
						'open_new_tab'	=> 'no',
						'id'			=> 'customizer_repeater_56d7ea7f40b14',
					),
				
				) );
			}
		}
		add_action( 'customize_register', 'awp_companion_awpbusinesspress_main_slider_default_content' );
	endif;


	//Service content
	if ( ! function_exists( 'awp_companion_awpbusinesspress_service_default_content' ) ) :
		function awp_companion_awpbusinesspress_service_default_content( $wp_customize ){
		
			$awpbusinesspress_service_data = $wp_customize->get_setting( 'awpbusinesspress_service_content' );
			if ( ! empty( $awpbusinesspress_service_data ) ) {
				$awpbusinesspress_service_data->default = json_encode( array(
					array(
						'icon_value'	=> 'fa fa-mobile',
						'title'			=> esc_html__( 'Responsive Design', 'awpbusinesspress' ),
						'text'			=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quos cupid',
						'choice'		=> 'customizer_repeater_icon',
						'link'			=> '#',
						'open_new_tab'	=> 'no',
						'id'			=> 'customizer_repeater_56d7ea7f40b15',
					),
					array(
						'icon_value'	=> 'fa fa-cogs',
						'title'			=> esc_html__( 'Easy to Customize', 'awpbusinesspress' ),
						'text'			=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quos cupid',
						'choice'		=> 'customizer_repeater_icon',
						'link'			=> '#',
						'open_new_tab'	=> 'no',
						'id'			=> 'customizer_repeater_56d7ea7f40b16',
					),
					array(
						'icon_value'	=> 'fa fa-handshake-o',
						'title'			=> esc_html__( 'Great Support', 'awpbusinesspress' ),
						'text'			=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua quos cupid',
						'choice'		=> 'customizer_repeater_icon',
						'link'			=> '#',
						'open_new_tab'	=> 'no',
						'id'			=> 'customizer_repeater_56d7ea7f40b17',
					),
				) );
			}
	    }
		add_action( 'customize_register', 'awp_companion_awpbusinesspress_service_default_content' );
	endif;

	//Testimonial content
	if ( ! function_exists( 'awp_companion_awpbusinesspress_testimonial_default_content' ) ) :
		function awp_companion_awpbusinesspress_testimonial_default_content( $wp_customize ){

				$awpbusinesspress_testimonial_data = $wp_customize->get_setting( 'awpbusinesspress_testimonial_content' );
				if ( ! empty( $awpbusinesspress_testimonial_data ) ) {
					$awpbusinesspress_testimonial_data->default = json_encode( array(
						array(
						'title'			=> 'Mike',
						'text'			=> '"It is a long established fact that a reader ill be distracted by the readable content of a page when looking at its layout. Thank you!"',
						'designation'	=> __('CEO & Founder','awp-companion'),
						'image_url'		=> awp_companion_plugin_url .'inc/awpbusinesspress/img/testimonial/1.jpg',
						'id'			=> 'customizer_repeater_56d7ea7f40b30',
						),
					) );
				}
			}
	add_action( 'customize_register', 'awp_companion_awpbusinesspress_testimonial_default_content' );
	endif;