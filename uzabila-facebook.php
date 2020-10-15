<?php
/**
 * Plugin Name:       Uzabila Facebook
 * Plugin URI:        https://uzabila.com/plugins/uzabila-facebook/
 * Description:       Ads a Facebook profile Link to the end of the post.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Sergei Ermilov
 * Author URI:        https://sergeiermilov.github.io/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       uzabila-facebook
 * Domain Path:       /languages
 */

// exit if accessed directly
if ( !defined('ABSPATH') ){
	exit;
};

// global options variable
$uzabila_facebook_options = get_option( 'uzabila_facebook_settings' );

// load script
require_once(plugin_dir_path( __FILE__ ).'/includes/facebook-script.php');
// load content
require_once(plugin_dir_path( __FILE__ ).'/includes/facebook-content.php');
// Settings
if (is_admin()) {
	require_once(plugin_dir_path( __FILE__ ).'/includes/facebook-settings.php');
};