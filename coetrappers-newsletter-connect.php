<?php
/**
 * Plugin Name: Coetrappers Newsletter Connect
 * Description: Starter plugin for routing subscribers from WordPress forms into newsletter platforms.
 * Version: 0.1.0
 * Author: Coetrappers
 * License: GPL-2.0-or-later
 * Requires at least: 6.4
 * Requires PHP: 7.4
 * Text Domain: coetrappers-newsletter-connect
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'COETRAPPERS_NEWSLETTER_CONNECT_VERSION', '0.1.0' );
define( 'COETRAPPERS_NEWSLETTER_CONNECT_FILE', __FILE__ );
define( 'COETRAPPERS_NEWSLETTER_CONNECT_PATH', plugin_dir_path( __FILE__ ) );
define( 'COETRAPPERS_NEWSLETTER_CONNECT_URL', plugin_dir_url( __FILE__ ) );

require_once COETRAPPERS_NEWSLETTER_CONNECT_PATH . 'includes/class-coetrappers-newsletter-connect.php';

function coetrappers_newsletter_connect_bootstrap() {
	$plugin = new \Coetrappers\CoetrappersNewsletterConnect\CoetrappersNewsletterConnectPlugin();
	$plugin->boot();
}

coetrappers_newsletter_connect_bootstrap();
