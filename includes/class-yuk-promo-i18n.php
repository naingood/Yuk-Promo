<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://www.yukdiorder.com
 * @since      1.0.0
 *
 * @package    Yuk_Promo
 * @subpackage Yuk_Promo/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Yuk_Promo
 * @subpackage Yuk_Promo/includes
 * @author     Isnainy Nasrullah <nain.client@gmail.com>
 */
class Yuk_Promo_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'yuk-promo',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
