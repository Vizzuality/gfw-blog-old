<?php
/**
 * The Template for displaying all single posts.
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

      <?php get_template_part( 'content', 'single' ); ?>

      <?php gfw_blog_post_nav(); ?>

      <?php
        // If comments are open or we have at least one comment, load up the comment template
        // if ( comments_open() || '0' != get_comments_number() ) :
        //  comments_template();
        // endif;
      ?>

      <div id="comments" class="comments-area">
        <div id="disqus_thread"></div>
        <script type="text/javascript">
            /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
            var disqus_shortname = 'gfw20'; // required: replace example with your forum shortname

            /* * * DON'T EDIT BELOW THIS LINE * * */
            (function() {
                var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
            })();
        </script>
        <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
      </div>
    <?php endwhile; // end of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?#php get_sidebar(); ?>
<?php get_footer(); ?>