<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package GFW blog
 */

$localhost = (substr($_SERVER['REMOTE_ADDR'], 0, 4) == '127.' || $_SERVER['REMOTE_ADDR'] == '::1');
$staging = ($_SERVER['REMOTE_ADDR'] == 'http://wp-wri-staging.herokuapp.com') ? true : false;

if (!$localhost && $staging) {
	if ( ! $_COOKIE['accepted_v4'] ) {
	  wp_redirect( 'http://www.globalforestwatch.org/accept_terms?return_to=' . home_url(add_query_arg(array(), $wp->request)) );
	  exit;
	}    
}

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'gfw-blog' ); ?></h1>
					<div class="entry-meta"><?php _e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'gfw-blog' ); ?></div>
				</header><!-- .page-header -->

				<div class="entry-content">
					<?php if ( gfw_blog_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<div class="widget widget_categories">
						<h2 class="widgettitle"><?php _e( 'Most Used Categories', 'gfw-blog' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->
					<?php endif; ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>