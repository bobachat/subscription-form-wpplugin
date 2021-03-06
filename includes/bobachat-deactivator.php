<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://bobachat.app/
 * @since      1.0.0
 *
 * @package    Bobachat
 * @subpackage Bobachat/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    Bobachat
 * @subpackage Bobachat/includes
 * @author     Bobachat <dev@bobachat.app>
 */
class Bobachat_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
		delete_option('bobachat_uniq_key');
	}

}
