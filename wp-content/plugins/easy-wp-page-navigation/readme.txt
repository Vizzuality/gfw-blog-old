=== Easy WP Page Navigation ===
Contributors: bboy8k
Donate link: http://wordpress.org/
Tags: easy wp page navigation, page navigation, page navigation in wordpress, taxonomies, admin, wp pagenavi, easy wp pagenavi, pagination wordpress, pagination wp, wp_pagenavi, easy add pagination, pagination plugin wordpress, wp-pagenavi plugin, page navigation wordpress, add pagination to wordpress, wordpress pagination, wordpress pagination plugin
Requires at least: 3.0
Tested up to: 4.2
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Easy to add page navigation in your blog

== Description ==

This plugin will create a new page navigation. Easy to use and custom it.
With this plugin, you don't worry about paging in your blog.
To using it in your blog, see the [installation instructions](http://wordpress.org/plugins/easy-wp-page-navigation/installation/)

= Support =

Support is handled in the [WordPress forums](http://wordpress.org/support/plugin/easy-wp-page-navigation). Please note that support is limited.

Please report any bugs, errors, warnings, code problems to support forum.

== Installation ==

1. Upload the `plugin` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Go to Settings>Easy WP Page Nav for configuration.
1. Use it to where you want to paging:
`
<?php echo easy_wp_pagenavigation(); ?>
`
Example for using with custom query:
`<?php
// You need protect against arbitrary paged values
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

$args = array(
	'post_type' => 'post',
	'posts_per_page' => 6,
	'paged' => $paged,
);

$my_query = new WP_Query( $args );
?>`
You can do that like so:
`
<?php echo easy_wp_pagenavigation( $my_query ); ?>
`
== Screenshots ==

1. Default styling
2. Gerenal options
3. Fill posts per page number for your taxonomies

== Frequently Asked Questions ==

= How to changing the CSS? =

If you need to configure the CSS of this plugin, you can copy the `easy-wp-pagenavigation.css` file  from the plugin directory to your theme's directory and make your modifications there.

Also, you can override the CSS of Easy WP Page Navigation in other CSS file.

Do it, you won't lose your changes when you update this plugin.

== Changelog ==

= 1.0 =
* Just release 1.0

== Upgrade Notice ==

= 1.0 =
* Just release 1.0