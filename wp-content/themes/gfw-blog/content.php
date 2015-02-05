<?php
/**
 * @package GFW blog
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <!-- <div class="entry-meta">
    <?php /* gfw_blog_posted_by(); */?>
  </div> --><!-- .entry-meta -->

  <header class="entry-header">
    <h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

    <?php if ( 'post' == get_post_type() ) : ?>
    <div class="entry-meta">
      <p class="posted-on"><?php gfw_blog_posted_on(); ?></p>

      <?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
        <?php
          /* translators: used between list items, there is a space after the comma */
          $categories_list = get_the_category_list( __( ', ', 'gfw-blog' ) );
          if ( $categories_list && gfw_blog_categorized_blog() ) :
        ?>
        <span class="sep"><span>·</span></span>
        <span class="cat-links">
          <?php printf( __( '%1$s', 'gfw-blog' ), $categories_list ); ?>
        </span>
        <?php endif; // End if categories ?>

        <?php
          /* translators: used between list items, there is a space after the comma */
          $tags_list = get_the_tag_list( '', __( ', ', 'gfw-blog' ) );
          if ( $tags_list ) :
        ?>
        <span class="sep"><span>·</span></span>
        <span class="tags-links">
          <?php printf( __( '%1$s', 'gfw-blog' ), $tags_list ); ?>
        </span>
        <?php endif; // End if $tags_list ?>
      <?php endif; // End if 'post' == get_post_type() ?>

      <?php edit_post_link( __( 'Edit', 'gfw-blog' ), '<span class="sep"><span>·</span></span><span class="edit-link">', '</span>' ); ?>
    </div><!-- .entry-meta -->
    <?php endif; ?>
  </header><!-- .entry-header -->

  <?php if ( is_search() ) : // Only display Excerpts for Search ?>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div><!-- .entry-summary -->
  <?php else : ?>
  <div class="entry-content">
    <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'gfw-blog' ) ); ?>
  </div><!-- .entry-content -->
  <?php endif; ?>
</article><!-- #post-## -->
