<?php
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * AWP Plugin Customizer Class
 *
 * @package awp-companion
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'AWP_awpbusinesspress_Customizer' ) ) :

	// awpbusinesspress Customizer class
	class AWP_awpbusinesspress_Customizer {
		public function AWP_awpbusinesspress_Customizer_settings() {
           	require awp_companion_plugin_dir . 'inc/awpbusinesspress/customizer/frontpage-sections/awp-companion-awpbusinesspress-slider-customizer-settings.php';
			require awp_companion_plugin_dir . 'inc/awpbusinesspress/customizer/frontpage-sections/awp-companion-awpbusinesspress-service-customizer-settings.php';
			require awp_companion_plugin_dir . 'inc/awpbusinesspress/customizer/frontpage-sections/awp-companion-awpbusinesspress-testimonial-customizer-settings.php';
		    require awp_companion_plugin_dir . 'inc/awpbusinesspress/customizer/frontpage-sections/awp-companion-awpbusinesspress-cta-customizer-settings.php';
			require awp_companion_plugin_dir . 'inc/awpbusinesspress/customizer/frontpage-sections/awp-companion-awpbusinesspress-blog-customizer-settings.php';
		}
	}
endif;

$customizer_settings = new AWP_awpbusinesspress_Customizer();

$customizer_settings->AWP_awpbusinesspress_Customizer_settings();