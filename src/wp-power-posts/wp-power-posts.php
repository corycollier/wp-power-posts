<?php
/**
 * Plugin Name: WP Power Posts Plugin
 * Plugin URI:  http://corycollier.com/wp-power-posts/
 * Description: This plugin allows posts to have more flexibility, that isn't given by default
 * Version:     @build-version@
 * Author:      Cory Collier
 * Author URI:  http://corycollier.com
 * License:     MIT
 */

$root = plugin_dir_path( __FILE__ );

require  $root . '/lib/functions.php';

defined('ABSPATH') or wppp_terminate('Direct access to the plugin file');

if ( is_admin() ) {
  require $root . '/lib/admin.php';
  add_action( 'admin_menu', 'wppp_create_menu' );
  add_action( 'admin_init', 'wppp_register_settings' );
}