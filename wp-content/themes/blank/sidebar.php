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
    <div class="f-user">
      <img src="http://gfw.blog.s3.amazonaws.com/2016/01/campaign-on-mangrove-protection.jpg">
      <span class="name"><a href="http://blog.globalforestwatch.org/2016/02/gfw-user-profile-craig-leisher/" target="_blank">Craig Leisher</a></span>
      <span class="name pro">Director of Monitoring and Evaluations in Africa</span>
      
    </div>
  </section>
  <section>
    <span class="title">categories</span>
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
          if ($category->count < 2) return;
          echo '<li><a href="/category/'.$category->slug.'">'.$category->name.'</a>';
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

