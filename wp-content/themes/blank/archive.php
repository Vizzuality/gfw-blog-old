<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>

    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
    <?php /* If this is a category archive */ if (is_category()) { ?>
    <h2 class="pagetitle">
      Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category
      <?php if (in_category( 'stories' )) { ?>
        <a href="http://www.globalforestwatch.org/stories/new" class="add-button">
          <div class="add-button-text">Add your own story</div>
          <div class="add-button-bubble">+</div>
        </a>
        <div class="stories-description">Stories submitted by GFW users</div>
      <?php } ?>
    </h2>
    <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
    <h2 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
    <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
    <h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>
    <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
    <h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>
    <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
    <h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>
    <?php /* If this is an author archive */ } elseif (is_author()) { ?>
    <h2 class="pagetitle">Author Archive</h2>
    <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
    <h2 class="pagetitle">Blog Archives</h2>
    <?php } ?>
<div id="main" role="main">
  <div class="columns">
    <?php if (have_posts()) : ?>

    <section>
      <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" class="card" data-link="<?php the_permalink() ?>">
          <?php if (has_post_thumbnail( $post->ID ) ): ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
          <?php endif; ?>
            <img src="<? echo $image[0];?>">

          <header>
            <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          </header>
          <div class="content">
            <footer>
              <?php /*the_tags('Tags: ', ', ', '<br />'); */?>
              <?php the_category(', ') ?>
              <span><?php the_time('F jS, Y') ?></span>
              <?php /*edit_post_link('Edit', '', ' | '); */?>
              <?php /* comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); */?>
            </footer>
          </div>
        </article>
      <?php endwhile; ?>
      <nav class="prev-p-cont">
        <span class="navigation-dir"><?php posts_nav_link('','<span class="prev-p"></span>',''); ?></span>
        <span class="navigation-dir"><?php posts_nav_link('','','<span class="prev-p next"></span>'); ?></span>
      </nav>

    <?php else :

    if ( is_category() ) { // If this is a category archive
      printf("<h2>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
    } else if ( is_date() ) { // If this is a date archive
      echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
    } else if ( is_author() ) { // If this is a category archive
      $userdata = get_userdatabylogin(get_query_var('author_name'));
      printf("<h2>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
    } else {
      echo("<h2>No posts found.</h2>");
    }
    get_search_form();

    endif;
    ?>
  </div>
    <?php if (function_exists("pagination")) {
      pagination($additional_loop->max_num_pages);
  } ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
