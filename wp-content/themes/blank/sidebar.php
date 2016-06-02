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
  <section class="tags-list">
    <span class="title">tags<span class="slug-content all">Select all <input type="checkbox" value="all" id="tagoption-all" ><label for="tagoption-all"><span></span></label></span></span>
    <ul>
      <?php
        $args = array(
          'orderby'                  => 'count',
          'order'                    => 'DESC',
          'post_type'               => 'post',
          'post_status'              => 'publish',
          'hide_empty'               => 1
        );
        $max = null; 
        $categories = get_tags( $args );
        foreach($categories as $category) {
          if ($category->count < 2) break;
          if ($max == null) {
            $max = $category->count;
            echo '<li><span class="slug-content"><span style="width:100%;"><b>'.$category->name.'</b></span> <em>'.$category->count.'</em></span><input data-name="'.$category->name.'" type="checkbox" value="'.$category->slug.'" id="tagoption-'.$category->slug.'" ><label for="tagoption-'.$category->slug.'"><span></span></label></li>';
          } else {
            echo '<li><span class="slug-content"><span style="width:'.($category->count*100)/$max.'%"><b>'.$category->name.'</b></span> <em>'.$category->count.'</em></span><input data-name="'.$category->name.'" type="checkbox" value="'.$category->slug.'" id="tagoption-'.$category->slug.'" ><label for="tagoption-'.$category->slug.'"><span></span></label></li>';
          }
          // echo '<div class="line-wrapper">';
          // if ($max == null) {
          //   echo '<span class="line first" style="width:100%;"></span>';
          //   $max = $category->count;
          // } else {
          //   echo '<span class="line" style="width:'.($category->count*100)/$max.'%"></span>';
          // }
          // echo '<span class="total_posts" style="left:calc(100% - '.(100 - (($category->count*100)/$max)).'% + 2px)">'.$category->count.'</span></div></li>';
        } 
      ?>
    </ul>
    <a class="title" id="toggleMoreTagsSidebar">More tags ▼</a>
  </section>
  <section class="tags-list">
        <span class="title">languages<!--<span class="slug-content all">Select all  <input type="checkbox" value="all_l" id="tagoption-all_l" ><label for="tagoption-all_l"><span></span></label></span> --></span>
    <ul>
      <li>
        <span class="slug-content"><span style="width:100%;"><b>English</b></span> <em>13</em></span></li>
        <li><span class="slug-content"><span style="width:70%;"><b>Spanish</b></span> <em>10</em></span></li>
        <li><span class="slug-content"><span style="width:50%;"><b>French</b></span> <em>7</em></span></li>
    </ul>
  </section>
</aside>

