<?php
/**
 * @package GFW blog
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <div class="entry-meta">
    <?php /* gfw_blog_posted_by(); */ ?>

    <div class="share_buttons">
      <div id="fb-root"></div>
      <a href="http://twitter.com/share" target="_blank" class="twitter-share-button" data-url="<?php the_permalink(); ?>" data-text="Global Forest Watch">Tweet</a>
      <div class="g-plusone" data-size="medium" data-href="<?php the_permalink(); ?>"></div>
      <div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div>
    </div>
  </div><!-- .entry-meta -->

  <div class="entry-content">
    <?php the_content(); ?>
    <?php
      wp_link_pages( array(
        'before' => '<div class="page-links">' . __( 'Pages:', 'gfw-blog' ),
        'after'  => '</div>',
      ) );
    ?>
  </div><!-- .entry-content -->
</article><!-- #post-## -->
