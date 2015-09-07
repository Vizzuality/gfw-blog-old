<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
<aside id="sidebar">

  <section>
    <span>search</span>
    <?php get_search_form(); ?>
  </section>
  <section>
    <span>featured gfw user</span>
    <div>
      <img src="LOL">
      <span>octavia</span>
      <span>coordinator</span>
    </div>
  </section>
  <section>
    <span>tags</span>
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
          echo '<span class="total_posts">'.$category->count.'</span></div></li>';
        } 
      ?>
    </ul>
  </section>

</aside>

