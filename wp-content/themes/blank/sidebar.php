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
        $categories = get_categories( $args );
        foreach($categories as $category) { 
          echo '<li>'.$category->name.': '.$category->count.'</li>';
        } 
      ?>
    </ul>
  </section>

</aside>

