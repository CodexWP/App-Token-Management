<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.codexwp.com/about/
 * @since      1.0.0
 *
 * @package    Cwp_App_Tokens
 * @subpackage Cwp_App_Tokens/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Cwp_App_Tokens
 * @subpackage Cwp_App_Tokens/includes
 * @author     Codex WP <info@codexwp.com>
 */
class Cwp_App_Tokens_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'cwp-app-tokens',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
