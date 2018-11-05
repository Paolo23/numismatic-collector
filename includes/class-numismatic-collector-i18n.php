<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://alternativasweb.ga
 * @since      1.0.0
 *
 * @package    Numismatic_Collector
 * @subpackage Numismatic_Collector/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Numismatic_Collector
 * @subpackage Numismatic_Collector/includes
 * @author     Paolo Pacheco <paolopacheco23@gmail.com>
 */
class Numismatic_Collector_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'numismatic-collector',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
