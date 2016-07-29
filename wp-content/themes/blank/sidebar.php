<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
<aside id="sidebar">

  <section class="feed">
    <a href="<?php bloginfo('rss2_url'); ?>">Subscribe to our RSS <?php echo file_get_contents(get_template_directory_uri()."/img/rss.svg"); ?></a>
  </section>

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
    <span class="title">featured gfw user</span> <?php echo file_get_contents("kiwi.svg"); ?>
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
  <section class="tags-list lang">
        <span class="title">languages<span class="slug-content all">Select all  <input type="checkbox" value="all_l" id="tagoption-all_l" ><label for="tagoption-all_l"><span></span></label></span> </span>
    <ul>
      <?php
      $count_posts = wp_count_posts();
      ?>
      <li><span class="slug-content"><span style="width:100%;"><b>English (all)</b></span> <em><?php echo $count_posts->publish; ?></em></span><input data-name="all" type="checkbox" value="all_e" id="tagoption-all_e" ><label for="tagoption-all_e"><span></span></label></li>
      <?php
        $max = null;
        $langs = array("fr-lang", "zh-lang", "id-lang", "es-lang", "pt-lang");
        foreach (get_categories('orderby=count&order=DESC') as $category ) 
        {
          if (in_array($category->slug, $langs)) {
            echo '<li><span class="slug-content"><span style="width:'.($category->count*100)/$count_posts->publish.'%"><b>' . $category->name . '</b></span> <em>' . $category->count . '</em></span><input data-name="'.$category->name.'" type="checkbox" value="'.substr($category->slug,0, -5).'" id="tagoption-'.$category->slug.'" ><label for="tagoption-'.$category->slug.'"><span></span></label></li>';
          }
        }
      ?>
    </ul>
  </section>
</aside>

