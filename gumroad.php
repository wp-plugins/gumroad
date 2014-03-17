<?php

/**
 * Gumroad Overlay & Embed
 *
 * @package   GUM
 * @author    Phil Derksen <pderksen@gmail.com>, Nick Young <mycorpweb@gmail.com>
 * @license   GPL-2.0+
 * @link      http://philderksen.com
 * @copyright 2013-2014 Phil Derksen
 *
 * @wordpress-plugin
 * Plugin Name: Gumroad Overlay & Embed
 * Plugin URI: http://philderksen.com/gumroad-for-wordpress/
 * Description: Display your Gumroad purchase pages in a pretty lightbox or embed them right on your pages using shortcodes.
 * Version: 1.1.0
 * Author: Phil Derksen
 * Author URI: http://philderksen.com
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) )
	exit;

require_once( plugin_dir_path( __FILE__ ) . 'class-gumroad.php' );

define( 'GUM_MAIN_FILE', __FILE__ );

// Register hooks that are fired when the plugin is activated, deactivated, and uninstalled, respectively.
register_activation_hook( __FILE__, array( 'Gumroad', 'activate' ) );

Gumroad::get_instance();
