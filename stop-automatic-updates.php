<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://wpmastery.xyz
 * @since             1.0.0
 * @package           Stop_Automatic_Updates
 *
 * @wordpress-plugin
 * Plugin Name:       Stop Automatic Updates
 * Plugin URI:        https://github.com/jan-koch/stop-automatic-updates
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Jan Koch
 * Author URI:        https://wpmastery.xyz
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       stop-automatic-updates
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'STOP_AUTOMATIC_UPDATES_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-stop-automatic-updates-activator.php
 */
function sau_activate_stop_automatic_updates() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-stop-automatic-updates-activator.php';
	Stop_Automatic_Updates_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-stop-automatic-updates-deactivator.php
 */
function sau_deactivate_stop_automatic_updates() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-stop-automatic-updates-deactivator.php';
	Stop_Automatic_Updates_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'sau_activate_stop_automatic_updates' );
register_deactivation_hook( __FILE__, 'sau_deactivate_stop_automatic_updates' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-stop-automatic-updates.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function sau_run_stop_automatic_updates() {

	$plugin = new Stop_Automatic_Updates();

	// disable all automatic updates.
	add_filter( 'automatic_updater_disabled', '__return_true' );
	$plugin->run();

}
sau_run_stop_automatic_updates();
