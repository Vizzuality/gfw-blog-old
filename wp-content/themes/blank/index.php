<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>

<div id="main" role="main">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" class="card">
        <header>
          <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        </header>
        <?php the_content('Read the rest of this entry &raquo;'); ?>
        <footer>
          <?php the_tags('Tags: ', ', ', '<br />'); ?> 
          <?php the_category(', ') ?>
          <?php the_time('F jS, Y') ?>
          <?php /*edit_post_link('Edit', '', ' | '); */?>
          <?php /* comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); */?>
        </footer>
      </article>

    <?php endwhile; ?>

  <?php else : ?>

    <h2>Not Found</h2>
    <p>Sorry, but you are looking for something that isn't here.</p>
    <?php get_search_form(); ?>

  <?php endif; ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>


