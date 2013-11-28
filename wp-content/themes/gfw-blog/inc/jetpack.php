<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package GFW blog
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function gfw_blog_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'gfw_blog_jetpack_setup' );
