<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
<aside id="sidebar">

  <section>
    <span class="title">search</span>
    <?php get_search_form(); ?>
  </section>
  <section>
    <span class="title">featured gfw user</span>
    <div>
      <img src="LOL">
      <span>octavia</span>
      <span>coordinator</span>
    </div>
  </section>
  <section>
    <span class="title">tags</span>
    <ul>
      <?php

        $args = array(
          'orderby'                  => 'count',
          'order'                    => 'DESC',
          'hide_empty'               => 1
        );
        $max = null; 
        $categories = get_categories( $args );
        foreach($categories as $category) {
          echo '<li>'.$category->name;
          echo '<div class="line-wrapper">';
          if ($max == null) {
            echo '<span class="line first" style="width:100%;"></span>';
            $max = $category->count;
          } else {
            echo '<span class="line" style="width:'.($category->count*100)/$max.'%"></span>';
          }
          echo '<span class="total_posts" style="left:calc(100% - '.(100 - (($category->count*100)/$max)).'% + 2px)">'.$category->count.'</span></div></li>';
        } 
      ?>
    </ul>
  </section>

</aside>

