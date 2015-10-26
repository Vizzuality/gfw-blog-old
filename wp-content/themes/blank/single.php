<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>

<div id="main" role="main">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

  <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
    <header>
    </header>
    <?php the_content('Read the rest of this entry &raquo;'); ?>
    <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
    
    <div class="share_buttons">
      <div id="fb-root"></div>
      <a href="http://twitter.com/share" target="_blank" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-text="Global Forest Watch">Tweet</a>
      <div class="g-plusone" data-size="medium" data-href="<?php the_permalink(); ?>"></div>
      <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
    </div>
    <footer>
      <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
    <nav>
      <div><?php previous_post_link('&laquo; %link') ?></div>
      <div><?php next_post_link('%link &raquo;') ?></div>
    </nav>
    <hr>
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

      <?php edit_post_link('Edit this entry','','.'); ?>
      </p>
    </footer>
  </article>

<?php endwhile; else: ?>

  <p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>

</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
