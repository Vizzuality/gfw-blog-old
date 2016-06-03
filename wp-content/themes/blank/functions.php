<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

// Custom HTML5 Comment Markup
function mytheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li>
     <article <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
       <header class="comment-author vcard">
          <?php echo get_avatar($comment,$size='48',$default='<path_to_url>' ); ?>
          <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
          <time><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a></time>
          <?php edit_comment_link(__('(Edit)'),'  ','') ?>
       </header>
       <?php if ($comment->comment_approved == '0') : ?>
          <em><?php _e('Your comment is awaiting moderation.') ?></em>
          <br />
       <?php endif; ?>

       <?php comment_text() ?>

       <nav>
         <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
       </nav>
     </article>
    <!-- </li> is added by wordpress automatically -->
<?php
}

automatic_feed_links();

// Widgetized Sidebar HTML5 Markup
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<section>',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}

// Custom Functions for CSS/Javascript Versioning
$GLOBALS["TEMPLATE_URL"] = get_bloginfo('template_url')."/";
$GLOBALS["TEMPLATE_RELATIVE_URL"] = wp_make_link_relative($GLOBALS["TEMPLATE_URL"]);

// Add ?v=[last modified time] to style sheets
function versioned_stylesheet($relative_url, $add_attributes=""){
  echo '<link rel="stylesheet" href="'.versioned_resource($relative_url).'" '.$add_attributes.'>'."\n";
}

// Add ?v=[last modified time] to javascripts
function versioned_javascript($relative_url, $add_attributes=""){
  echo '<script src="'.versioned_resource($relative_url).'" '.$add_attributes.'></script>'."\n";
}

// Add ?v=[last modified time] to a file url
function versioned_resource($relative_url){
  $file = $_SERVER["DOCUMENT_ROOT"].$relative_url;
  $file_version = "";

  if(file_exists($file)) {
    $file_version = "?v=".filemtime($file);
  }

  return $relative_url.$file_version;
}

function gfw_blog_setup() {

  /*
   * Make theme available for translation.
   * Translations can be filed in the /languages/ directory.
   * If you're building a theme based on GFW blog, use a find and replace
   * to change 'gfw-blog' to the name of your theme in all the template files
   */
  load_theme_textdomain( 'gfw-blog', get_template_directory() . '/languages' );

  // Add default posts and comments RSS feed links to head.
  add_theme_support( 'automatic-feed-links' );

  /*
   * Enable support for Post Thumbnails on posts and pages.
   *
   * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
   */
  add_theme_support( 'post-thumbnails' );

  // This theme uses wp_nav_menu() in one location.
  register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'gfw-blog' ),
  ) );

  // Enable support for Post Formats.
  add_theme_support( 'post-formats', array( 'aside', 'image', 'video', 'quote', 'link' ) );

  // Setup the WordPress core custom background feature.
  add_theme_support( 'custom-background', apply_filters( 'gfw_blog_custom_background_args', array(
    'default-color' => 'ffffff',
    'default-image' => '',
  ) ) );
}
add_action( 'after_setup_theme', 'gfw_blog_setup' );
function gfw_blog_posted_on() {
  $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time>';

  $time_string = sprintf( $time_string,
    esc_attr( get_the_date( 'c' ) ),
    esc_html( get_the_date() )
  );

  printf( __( '%1$s', 'gfw-blog' ),
    sprintf( '%1$s', $time_string )
  );
}
function pagination($pages = '', $range = 4)
{  
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
      echo "<div class=\"pagination\">";
      for ($i=1; $i <= $pages; $i++)
      {
        if ($i == $pages) {
          echo "<a href='".get_pagenum_link(($i))."' class=\"inactive\">...&nbsp;&nbsp;&nbsp;".($i)."</a>";
        }
        else if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems )) {
           echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
        }
      }
      echo "</div>\n";
     }
}

add_action( 'wp_ajax_get_post_by_tag', 'get_post_by_tag' );
add_action( 'wp_ajax_nopriv_get_post_by_tag', 'get_post_by_tag' );
function get_post_by_tag(){
  $args=array(
    'tag'         => $_REQUEST['tag'],
    'posts_per_page'   => 10,
    // 'order'       => 'DESC',
    // 'orderby'     => 'date',
    'post_type'   => 'post',
    // 'post_status' => 'publish',
    'offset'       => $_REQUEST['offset']
    );
  $my_query = new WP_Query($args);

  foreach ($my_query->posts as $mypost) {
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $mypost->ID ), 'single-post-thumbnail' );
    $thispost = array(
      'id' => $mypost->ID,
      'link' => $mypost->guid,
      'title' => $mypost->post_title,
      'date' => $mypost->post_date,
      'categories' => get_the_category($mypost->ID),
      'picture' => $image[0],
      'class' => 'card'
      );
    $returnedposts[] = $thispost;
  }
  echo json_encode($returnedposts);
  wp_reset_query();
  exit();
}
