<?php
/*
Plugin Name: MyWebSQL Database Manager
Plugin URI: http://mywebsql.net/wordpress-plugin/
Description: This plugin adds MyWebSQL to Admin Panel Tools to manage your WordPress Database.
Author: Samnan ur Rehman
Version: 1.3.6
Author URI: http://mywebsql.net/
License: GPLv3
Copyright: Samnan ur Rehman
*/

if ( !is_admin() )
	return true;

define( 'MYWEBSQL_PLUGIN_PATH', plugin_dir_path(__FILE__) );
define( 'MYWEBSQL_PLUGIN_URL', plugin_dir_url(__FILE__) );
set_include_path( get_include_path() . PATH_SEPARATOR . MYWEBSQL_PLUGIN_PATH . '/mywebsql/' );

if( function_exists( 'add_action' ) ) {
	if (defined('MYWEBSQL_ACTIVE') && MYWEBSQL_ACTIVE == 1) {
		global $user_ID;
		if( $user_ID AND current_user_can('activate_plugins')) { 
			include( MYWEBSQL_PLUGIN_PATH . 'mywebsql/lib/session.php');
			Session::init();
			$wordpress_auth = array(
				'server_name' =>'WordPress Database',
				'host' => DB_HOST,
				'dbname' => DB_NAME,
				'driver' => (extension_loaded('mysqli') ? 'mysqli' : 'mysql5'),
				'user' => DB_USER,
				'pwd' => DB_PASSWORD
			);
			Session::set('auth', 'wordpress_auth', serialize($wordpress_auth), true);
			Session::close();
			echo '<div style="padding:10px"><iframe src="' . MYWEBSQL_PLUGIN_URL . 'mywebsql/index.php' . '" width="100%" height="800"></iframe></div>';
		} else {
			echo '<p>You do not have the proper permissions to access WordPress database</p>';
		}
	} else {
		add_action('admin_menu', 'add_mywebsql_menu');
		add_action('init', 'mywebsql_buffering');
		function add_mywebsql_menu() {
			add_management_page( 'MyWebSQL', 'MyWebSQL', 8, __FILE__ );
			define( 'MYWEBSQL_ACTIVE', '1' );
		}
		function mywebsql_buffering() {
			ob_start();
		}
	}
}
?>