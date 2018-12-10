<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://wpmastery.xyz
 * @since      1.0.0
 *
 * @package    Stop_Automatic_Updates
 * @subpackage Stop_Automatic_Updates/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Stop_Automatic_Updates
 * @subpackage Stop_Automatic_Updates/includes
 * @author     Jan Koch <jan@wpmastery.xyz>
 */
class Stop_Automatic_Updates_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'stop-automatic-updates',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
