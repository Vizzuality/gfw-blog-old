<?php
/*
Plugin Name: Easy WP Page Navigation
Plugin URI: http://bigdigital.vn/
Description: Easy add paging navigation to your theme
Version: 1.0
Author: KanG
Author URI: http://bigdigital.vn/
License: GPLv2 or later
Text Domain: easy-wp-page-navigation

Copyright @2015  KanG  (email: phamanhtuan1208@gmail.com)
*/

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) )
	exit;

/**
 * Define
 */
define( 'EASY_WP_PAGE_DIR', plugin_dir_path( __FILE__ ) );
define( 'EASY_WP_PAGE_URL', plugin_dir_url( __FILE__ ) );
define( 'EWPN', 'easy-wp-page-navigation' );
define( 'EWPN_ST', 'easy_wp_page_navigation' );

/**
 * Easy_WP_Page_Navigation Class
 *
 * This class will run main modules of plugin
 */
if ( ! class_exists( 'Easy_WP_Page_Navigation' ) ) :

	class Easy_WP_Page_Navigation
	{
		/**
		 * Global plugin version
		 */
		static $version = '1.0';

		/**
		 * Easy_WP_Page_Navigation Constructor.
		 *
		 * @access public
		 * @return Easy_WP_Page_Navigation
		 * @since  1.0
		 */
		public function __construct()
		{
			// Include handling files
			include_once( 'inc/functions.php' );

			// Handle when plugin is active
			register_activation_hook( __FILE__, array( $this, 'active_plugin' ) );

			// load plugin text domain for translations
			add_action( 'plugins_loaded', array( $this, 'load_text_domain' ) );

			// enqueue main style for front-end
			add_action( 'wp_enqueue_scripts', array( $this, 'front_style' ) );

			// register admin options
			add_action( 'admin_init', array( $this, 'admin_options' ) );

			// add plugin options page
			add_action( 'admin_menu', array( $this, 'add_options_page' ) );

			// enqueue script and style in back-end
			add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue' ) );

			// add settings link to plugins page
			add_filter( 'plugin_action_links', array( $this, 'add_settings_links' ), 10, 2 );
		}

		/**
		 * Active this plugin
		 * Set default values for general options
		 *
		 * @access public
		 * @return void
		 * @since  1.0
		 */
		public function active_plugin()
		{
			$defaults = array(
				'first_text' => __( '&laquo; First', EWPN ),
				'last_text'  => __( 'Last &raquo;', EWPN ),
				'prev_text'  => __( '&laquo;', EWPN ),
				'next_text'  => __( '&raquo;', EWPN ),
				'align'      => 'left',
			);
			add_option( EWPN_ST, $defaults );
		}

		/**
		 * Transition ready
		 *
		 * @access public
		 * @return void
		 * @since  1.0
		 */
		public function load_text_domain()
		{
			load_plugin_textdomain( EWPN, false, EASY_WP_PAGE_DIR . '/languages/' );
		}

		/**
		 * Enqueue style for front-end
		 *
		 * @access public
		 * @return void
		 * @since  1.0
		 */
		public function front_style()
		{
			wp_enqueue_style( 'easy-wp-page-nav', EASY_WP_PAGE_URL . '/css/easy-wp-pagenavigation.css', false, self::$version );
		}

		/**
		 * Whitelist plugin options
		 *
		 * @access public
		 * @return void
		 * @since  1.0
		 */
		public function admin_options()
		{
			register_setting( EWPN_ST, EWPN_ST, array( $this, 'validate_options' ) );
		}

		/**
		 * Sanitize and validate options
		 *
		 * @access public
		 * @param  array $input
		 * @return array
		 * @since  1.0
		 */
		public function validate_options( $input )
		{

			$options  = array();
			$defaults = array(
				'first_text' => __( '&laquo; First', EWPN ),
				'last_text'  => __( 'Last &raquo;', EWPN ),
				'prev_text'  => __( '&laquo;', EWPN ),
				'next_text'  => __( '&raquo;', EWPN ),
				'align'      => 'left',
			);

			foreach ( $defaults as $name => $val )
			{
				$options[$name] = isset( $input[$name] ) ? $input[$name] : $val;
			}

			// Get all taxonomy can view in front-end and validate it
			$args = array(
				'public'  => true,
				'show_ui' => true
			);

			$taxonomies = get_taxonomies( $args );

			if ( ! empty( $taxonomies ) )
				foreach ( $taxonomies as $tax )
				{
					$options[$tax] = $input[$tax];
				}

			return $options;
		}

		/**
		 * Add options page of plugin
		 *
		 * @access public
		 * @return void
		 * @since  1.0
		 */
		public function add_options_page()
		{
			add_options_page( __( 'Easy WP Page Navigation Options', EWPN ), __( 'Easy WP Page Nav', EWPN ), 'manage_options', 'easy-wp-pagenavigation', array( $this, 'plugin_form' ) );
		}

		/**
		 * Render the Plugin options form
		 *
		 * @access public
		 * @return void
		 * @since  1.0
		 */
		public function plugin_form()
		{
			include( 'inc/plugin-form.php' );
		}

		/**
		 * Enqueue script and style in back-end
		 *
		 * @access public
		 * @return void
		 * @since  1.0
		 */
		public function admin_enqueue()
		{
			wp_enqueue_style( 'easy-wp-page-nav-admin', EASY_WP_PAGE_URL . '/css/admin.css', false, self::$version );
			wp_enqueue_script( 'easy-wp-page-nav', EASY_WP_PAGE_URL . '/js/admin.js', array( 'jquery' ), self::$version, true );
		}

		/**
		 * Display a Settings url on the main plugins page
		 *
		 * @access public
		 *
		 * @param  array  $links
		 * @param  string $file
		 *
		 * @return array
		 * @since  1.0
		 */
		public function add_settings_links( $links, $file )
		{

			if ( $file == plugin_basename( __FILE__ ) )
			{
				$plugin_link = '<a href="' . admin_url( 'options-general.php?page=easy-wp-pagenavigation' ) . '">' . __( 'Settings', EWPN ) . '</a>';
				// make the 'Settings' link appear first
				array_unshift( $links, $plugin_link );
			}

			return $links;
		}

		/**
		 * Get all taxonomies
		 *
		 * @access public
		 * @return array
		 * @since  1.0
		 */
		public static function get_all_taxonomies()
		{
			$args = array(
				'public'  => true,
				'show_ui' => true,
			);

			$taxonomies = get_taxonomies( $args, 'objects' );

			return $taxonomies;
		}
	}

endif; // End class

new Easy_WP_Page_Navigation();