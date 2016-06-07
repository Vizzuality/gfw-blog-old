<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>

<h2 class="tagstitle pagetitle"></h2>
<div id="main" role="main">
  <p class="tagstitle-list"></p>
  <div class="columns">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>

        <article id="post-<?php the_ID(); ?>" class="card" data-link="<?php the_permalink() ?>">
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

            <img src="<?php echo $image[0]; ?>">
          
          <header>
            <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
          </header>
          <div class="content">
            <footer>
              <?php the_category(', ') ?>
              <span><?php the_time('F jS, Y') ?></span>
            </footer>
          </div>
        </article>
      <?php endwhile; ?>
      <nav class="prev-p-cont">
        <span class="navigation-dir"><?php posts_nav_link('','<span class="prev-p"></span>',''); ?></span>
        <span class="navigation-dir"><?php posts_nav_link('','','<span class="prev-p next"></span>'); ?></span>
      </nav>
    <?php else : ?>

      <h2>Not Found</h2>
      <p>Sorry, but you are looking for something that isn't here.</p>
      <?php get_search_form(); ?>

    <?php endif; ?>
  </div>
  <?php if (function_exists("pagination")) {
      pagination($additional_loop->max_num_pages);
  } ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
