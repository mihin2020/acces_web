<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * @package	awp-companion
 */

// Customizer Sections
require awp_companion_plugin_dir . 'inc/awpbusinesspress/customizer/awp-companion-awpbusinesspress-customizer.php';
require awp_companion_plugin_dir . 'inc/awpbusinesspress/customizer/awp-companion-awpbusinesspress-customizer-options.php';
require awp_companion_plugin_dir . 'inc/awpbusinesspress/customizer/awp-companion-awpbusinesspress-customizer-default.php';

// Frontpage Sections
if ( ! function_exists( 'awp_awpbusinesspress_frontpage_sections' ) ) :
	function awp_awpbusinesspress_frontpage_sections(){
		require awp_companion_plugin_dir . 'inc/awpbusinesspress/front-page/awp-companion-awpbusinesspress-slider.php';
		require awp_companion_plugin_dir . 'inc/awpbusinesspress/front-page/awp-companion-awpbusinesspress-service.php';
		require awp_companion_plugin_dir . 'inc/awpbusinesspress/front-page/awp-companion-awpbusinesspress-testimonial.php';
		require awp_companion_plugin_dir . 'inc/awpbusinesspress/front-page/awp-companion-awpbusinesspress-blog.php';
		require awp_companion_plugin_dir . 'inc/awpbusinesspress/front-page/awp-companion-awpbusinesspress-callout.php';
	}
	add_action( 'awp_awpbusinesspress_frontpage', 'awp_awpbusinesspress_frontpage_sections' );
endif;