<?php

/**
 * Fired when the plugin is uninstalled.
 *
 * When populating this file, consider the following flow
 * of control:
 *
 * - This method should be static
 * - Check if the $_REQUEST content actually is the plugin name
 * - Run an admin referrer check to make sure it goes through authentication
 * - Verify the output of $_GET makes sense
 * - Repeat with other user roles. Best directly by using the links/query string parameters.
 * - Repeat things for multisite. Once for a single site in the network, once sitewide.
 *
 * This file may be updated more in future version of the Boilerplate; however, this is the
 * general skeleton and outline for how the file should work.
 *
 * For more information, see the following discussion:
 * https://github.com/tommcfarlin/WordPress-Plugin-Boilerplate/pull/123#issuecomment-28541913
 *
 * @link       https://bobachat.app/
 * @since      1.0.0
 *
 * @package    Bobachat
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}
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
		'actionType'=> 'uninstall',
	));
	$response = wp_remote_request('https://fpscg887e7.execute-api.us-east-1.amazonaws.com/staging/bes/wordpress/plugin/hook', $body);