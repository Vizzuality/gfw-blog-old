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
    <?php
      $featuredUser = get_page_by_title( 'FEATURED GFW USER TEMPLATE',OBJECT,'post' );
      $FeaturedUserPic = get_post_meta($featuredUser->ID, 'FeaturedUserPic',true);
      $FeaturedUserUrl = get_post_meta($featuredUser->ID, 'FeaturedUserUrl',true);
      $FeaturedUserName = get_post_meta($featuredUser->ID, 'FeaturedUserName',true);
      $FeaturedUserPro = get_post_meta($featuredUser->ID, 'FeaturedUserPro',true);

    ?>
    <span class="title">featured gfw user</span>
    <div class="f-user">
      <img src="<?php echo $FeaturedUserPic; ?>">
      <span class="name"><a href="<?php echo $FeaturedUserUrl; ?>" target="_blank"><?php echo $FeaturedUserName; ?></a></span>
      <span class="name pro"><?php echo $FeaturedUserPro; ?></span>
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

