<?php
/**
 * The template for displaying Search Results pages.
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

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'gfw-blog' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'search' ); ?>

			<?php endwhile; ?>

			<?php gfw_blog_paging_nav(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
