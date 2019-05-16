<?php
/*
Plugin Name: Woocommerce Product Page Social Share
Plugin URI : https://github.com/Sajjad-Hossain-Sagor/Woo-Product-Social-Sharing
Description: Add attractive & responsive social sharing icons for Facebook, Twitter, Pinterest to your product pages.
Version: 1.0.0
Author: Sajjad Hossain Sagor
Author URI: https://profiles.wordpress.org/sajjad67
Text Domain: wpss

License: GPL2
This WordPress Plugin is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 2 of the License, or
any later version.

This free software is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this software. If not, see http://www.gnu.org/licenses/gpl-2.0.html.
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

// ---------------------------------------------------------
// Checking if Woocommerce is either installed or active
// ---------------------------------------------------------

register_activation_hook( __FILE__, 'wpss_check_woocommerce_activation_status' );

add_action( 'admin_init', 'wpss_check_woocommerce_activation_status' );

function wpss_check_woocommerce_activation_status(){

	if (!in_array('woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ))) {

		// Deactivate the plugin
		deactivate_plugins(__FILE__);

		// Throw an error in the wordpress admin console
		$error_message = __('Woocommerce Product Page Social Share requires <a href="http://wordpress.org/extend/plugins/woocommerce/">WooCommerce</a> plugin to be active! <a href="javascript:history.back()"> Go back & activate Woocommerce. </a>', 'woocommerce');

		wp_die( $error_message, "WooCommerce Not Found" );

	}

}

// ---------------------------------------------------------
// Define Plugin Folders Path
// ---------------------------------------------------------
define("WPSS_PLUGIN_PATH", plugin_dir_path( __FILE__ ));
define("WPSS_PLUGIN_URL", __FILE__);
define("WPSS_PLUGIN_INCLUDES_PATH", WPSS_PLUGIN_PATH . "includes/");
define("WPSS_PLUGIN_PARTIAL_TEMPLATE_PATH", WPSS_PLUGIN_INCLUDES_PATH . "partial-template/");

// ---------------------------------------------------------
// Add Plugin Settings page to wp dashboard
// ---------------------------------------------------------
add_action( 'admin_menu', 'wpss_add_dashboard_page' );

function wpss_add_dashboard_page() {
	add_menu_page( "Woo Social Sharing", "Social Sharing","manage_options" , "woo-social-sharing", "wpss_render_social_sharing", "dashicons-share");
}

// ---------------------------------------------------------
// Call Required Plugin Files
// ---------------------------------------------------------
require_once WPSS_PLUGIN_INCLUDES_PATH . "render_settings_panel.php";

add_action( "admin_enqueue_scripts", "wpss_enqueue_assets" );
require_once WPSS_PLUGIN_INCLUDES_PATH . "enqueue.php";

add_action( 'admin_init', 'wpss_register_settings' );
require_once WPSS_PLUGIN_INCLUDES_PATH . "register_settings.php";

require_once WPSS_PLUGIN_INCLUDES_PATH . "init.php";

?>