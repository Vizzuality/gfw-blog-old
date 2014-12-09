<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
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

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() ) :
						comments_template();
					endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
