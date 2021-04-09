<?php

/**
 * Fired during plugin activation
 *
 * @link       https://bobachat.app/
 * @since      1.0.0
 *
 * @package    Bobachat
 * @subpackage Bobachat/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Bobachat
 * @subpackage Bobachat/includes
 * @author     Bobachat <dev@bobachat.app>
 */
class Bobachat_Activator {

	/**
	 * @since    0.0.1
	 */
	public static function activate() {
		$siteName = get_bloginfo('name');
		$siteUrl = get_bloginfo('url');
		$siteDescription = get_bloginfo('name');
		$siteId = get_current_blog_id();
		$current_user = wp_get_current_user()->get_site_id();
		$websiteId = get_current_blog_id();
		$args = array(
			'timeout' => 120,
		  );
		$body = array('method' => 'POST', 'body' => array(
			'siteId' => $websiteId,
            'name' => $siteName,
            'description' => $siteDescription,
            'url'=>$siteUrl,
            'wordpressUserId'=>$current_user,
            'platform' => 'wordpress',
            'actionType'=> 'active',
		));
		$response = wp_remote_request('https://fpscg887e7.execute-api.us-east-1.amazonaws.com/staging/bes/wordpress/plugin/hook', $body);
	}

}
