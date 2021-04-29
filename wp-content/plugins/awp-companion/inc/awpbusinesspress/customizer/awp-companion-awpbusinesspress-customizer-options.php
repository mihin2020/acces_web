<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Extend customizer section.
 *
 * @package awpbusinesspress
 *
 * @see     WP_Customize_Section
 * @access  public
 */
 
function awp_awpbusinesspress_frontpage_sections_settings( $wp_customize ){
	
	$active_callback	= isset( $array['active_callback'] ) ? $array['active_callback'] : null;
			
	/* Frontpage panel */
	$wp_customize->add_panel( 'awpbusinesspress_frontpage_settings', array(
		'priority'		=> 25,
		'capability'	=> 'edit_theme_options',
		'title'			=> __('Frontpage Sections', 'awp-companion'),
	) );
	
	/* Slider Settings */
	$wp_customize->add_section( 'awpbusinesspress_main_theme_slider' , array(
		'title'			=> __('Slider Settings', 'awp-companion'),
		'panel'			=> 'awpbusinesspress_frontpage_settings',
		'priority'		=> 2,
	));
	
		if ( class_exists( 'awpbusinesspress_Repeater' ) ) {
			$wp_customize->add_setting( 'awpbusinesspress_main_slider_content', array( ) );
			$wp_customize->add_control( new awpbusinesspress_Repeater( 
			$wp_customize, 'awpbusinesspress_main_slider_content', array(
				'label'                             => esc_html__( 'Slider Items Content', 'awp-companion' ),
				'section'                           => 'awpbusinesspress_main_theme_slider',
				'add_field_label'                   => esc_html__( 'Add new slide', 'awp-companion' ),
				'item_name'                         => esc_html__( 'Slide Item', 'awp-companion' ),
				'customizer_repeater_image_control' => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_button_text_control' => true,
				'customizer_repeater_link_control'  => true,
				'customizer_repeater_checkbox_control' => true,
			)));
		}

	/* Service Settings */
	$wp_customize->add_section( 'awpbusinesspress_theme_service' , array(
		'title'			=> __('Service Settings', 'awp-companion'),
		'panel'			=> 'awpbusinesspress_frontpage_settings',
		'priority'		=> 4,
	) ); 
	
		if ( class_exists( 'awpbusinesspress_Repeater' ) ) {
			$wp_customize->add_setting( 'awpbusinesspress_service_content', array( ) );
			$wp_customize->add_control( new awpbusinesspress_Repeater( 
			$wp_customize, 'awpbusinesspress_service_content', array(
				'label'                             => esc_html__( 'Service Items Content', 'awp-companion' ),
				'section'                           => 'awpbusinesspress_theme_service',
				'priority'                          => 10,
				'add_field_label'                   => esc_html__( 'Add new service', 'awp-companion' ),
				'item_name'                         => esc_html__( 'Service Item', 'awp-companion' ),
				'customizer_repeater_image_control' => true,
				'customizer_repeater_icon_control'  => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_link_control'  => true,
				'customizer_repeater_checkbox_control' => true,
				) ) );
		}
	
	/* Testimonial Settings */
	$wp_customize->add_section( 'awpbusinesspress_theme_testimonial' , array(
		'title'		=> __('Testimonial Settings', 'awpbusinesspress'),
		'panel'		=> 'awpbusinesspress_frontpage_settings',
		'priority'	=> 7,
	) ); 
	
	
		if ( class_exists( 'awpbusinesspress_Repeater' ) ) {
			$wp_customize->add_setting( 'awpbusinesspress_testimonial_content', array( ) );
			$wp_customize->add_control( new awpbusinesspress_Repeater( 
			$wp_customize, 'awpbusinesspress_testimonial_content', array(
				'label'                             => esc_html__( 'Testimonial Items Content', 'awp-companion' ),
				'section'                           => 'awpbusinesspress_theme_testimonial',
				'add_field_label'                   => esc_html__( 'Add new testimonial item', 'awp-companion' ),
				'item_name'                         => esc_html__( 'Testimonial Item', 'awp-companion' ),
				'customizer_repeater_image_control' => true,
				'customizer_repeater_title_control' => true,
				'customizer_repeater_text_control'  => true,
				'customizer_repeater_designation_control' => true,
				) ) );
		}

	/* CallOut Settings  */
	$wp_customize->add_section( 'awpbusinesspress_theme_cta' , array(
		'title'		=> __('CallOut Settings', 'awp-companion'),
		'panel'		=> 'awpbusinesspress_frontpage_settings',
		'priority'	=> 9,
	) ); 
	
	
		//CallOut Background Image
		$wp_customize->add_setting( 'awpbusinesspress_cta_background_image', array(
		  'sanitize_callback' => 'esc_url_raw',
		  'default' => awp_companion_plugin_url . '/inc/awpbusinesspress/img/callout/callout-bg.jpg',
		) );
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'awpbusinesspress_cta_background_image', array(
		  'label'    => esc_html__( 'Background Image', 'awp-companion' ),
		  'section'  => 'awpbusinesspress_theme_cta',
		  'settings' => 'awpbusinesspress_cta_background_image',
		  'priority'        => 15,
		) ) );

	
	/* Blog Settings*/
	$wp_customize->add_section( 'awpbusinesspress_theme_blog' , array(
		'title'		=> __('Blog Settings', 'awp-companion'),
		'panel'		=> 'awpbusinesspress_frontpage_settings',
		'priority'	=> 11,
	) ); 

		$wp_customize->add_setting( 'awpbusinesspress_theme_blog_category',array('capability'     => 'edit_theme_options',) );	
		$wp_customize->add_control( new awpbusinesspress_Customize_Category_Control( $wp_customize, 'awpbusinesspress_theme_blog_category', array(
			'label'   => __('Choose Blog Category','awp-companion'),
			'section' => 'awpbusinesspress_theme_blog',
			'settings'   => 'awpbusinesspress_theme_blog_category',
			'sanitize_callback' => 'sanitize_text_field',
		) ) );
}
add_action( 'customize_register', 'awp_awpbusinesspress_frontpage_sections_settings' );


function AWP_awpbusinesspress_Customizer_selective_refresh_settings($wp_customize) {
	
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	
	
	// Service
	$wp_customize->add_setting( 'awpbusinesspress_service_area_title',array(
		'default'			=> __('Our Services','awp-companion'),
		'sanitize_callback'	=> 'sanitize_text_field',
		'transport'			=> $selective_refresh,
	));	
	$wp_customize->add_control( 'awpbusinesspress_service_area_title',array(
		'label'			=> esc_html__( 'Section Title', 'awp-companion' ),
		'section'		=> 'awpbusinesspress_theme_service',
		'priority'		=> 4,
		'type'			=> 'text',
	));	

	$wp_customize->add_setting( 'awpbusinesspress_service_area_des',array(
		'default'			=> __('We provide the worlds best consulting related services to growth your business.','awp-companion'),
		'sanitize_callback'	=> 'sanitize_text_field',
		'transport'			=> $selective_refresh,
	));	
	$wp_customize->add_control( 'awpbusinesspress_service_area_des',array(
		'label'		=> esc_html__( 'Section Description', 'awp-companion' ),
		'section'	=> 'awpbusinesspress_theme_service',
		'priority'	=> 5,
		'type'		=> 'textarea',
	));	

	// Testimonial
	$wp_customize->add_setting( 'awpbusinesspress_testimonial_area_title',array(
		'default' => __('Testimonials','awp-companion'),
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => $selective_refresh,
	));	
	$wp_customize->add_control( 'awpbusinesspress_testimonial_area_title',array(
		'label'   => esc_html__( 'Section Title', 'awp-companion' ),
		'section' => 'awpbusinesspress_theme_testimonial',
		'priority'        => 4,
		'type' => 'text',
	));	
	$wp_customize->add_setting( 'awpbusinesspress_testimonial_area_des',array(
		'default' => __('What our customers are saying about us after using our products.','awp-companion'),
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => $selective_refresh,
	));	
	$wp_customize->add_control( 'awpbusinesspress_testimonial_area_des',array(
		'label'   => esc_html__( 'Section Description', 'awp-companion' ),
		'section' => 'awpbusinesspress_theme_testimonial',
		'priority'        => 5,
		'type' => 'textarea',
	));


	// Blog
	$wp_customize->add_setting( 'awpbusinesspress_blog_area_title',array(
		'default' => __('Latest News','awp-companion'),
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => $selective_refresh,
	));	
	$wp_customize->add_control( 'awpbusinesspress_blog_area_title',array(
		'label'   => esc_html__( 'Section Title', 'awp-companion' ),
		'section' => 'awpbusinesspress_theme_blog',
		'priority'        => 4,
		'type' => 'text',
	));	
	$wp_customize->add_setting( 'awpbusinesspress_blog_area_des',array(
		'default' => __('Stay updated with the latest news by reading our articles written by content writers in the industry.','awp-companion'),
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => $selective_refresh,
	));	
	$wp_customize->add_control( 'awpbusinesspress_blog_area_des',array(
		'label'   => esc_html__( 'Section Description', 'awp-companion' ),
		'section' => 'awpbusinesspress_theme_blog',
		'priority'        => 5,
		'type' => 'textarea',
	));

	// CallOut
	$wp_customize->add_setting( 'awpbusinesspress_cta_area_subtitle',array(
		'default' => 'Do you have any questions?',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => $selective_refresh,
	));	
	$wp_customize->add_control( 'awpbusinesspress_cta_area_subtitle',array(
		'label'   => esc_html__( 'Title', 'awp-companion' ),
		'section' => 'awpbusinesspress_theme_cta',
		'priority'        => 5,
		'type' => 'text',
	));	
	$wp_customize->add_setting( 'awpbusinesspress_cta_area_des',array(
		'default' => 'How can we help your business? Because many people love our free consultation for growing their businesses which gives the user complete freedom to set up a business.',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => $selective_refresh,
	));	
	$wp_customize->add_control( 'awpbusinesspress_cta_area_des',array(
		'label'   => esc_html__( 'Description', 'awp-companion' ),
		'section' => 'awpbusinesspress_theme_cta',
		'priority'        => 6,
		'type' => 'textarea',
	));	
	$wp_customize->add_setting( 'awpbusinesspress_cta_button_text',array(
		'default' => 'Contact Us',
		'sanitize_callback' => 'sanitize_text_field',
		'transport' => $selective_refresh,
	));	
	$wp_customize->add_control( 'awpbusinesspress_cta_button_text',array(
		'label'   => esc_html__( 'Button Text', 'awp-companion' ),
		'section' => 'awpbusinesspress_theme_cta',
		'priority'        => 10,
		'type' => 'text',
	));

}
add_action( 'customize_register', 'AWP_awpbusinesspress_Customizer_selective_refresh_settings' );