<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">

    <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
       Remove this if you use the .htaccess -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    
    <meta name="description" content="">
    <meta name="author" content="">
    
    <meta name="viewport" content="width=device-width">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/css/normalize.css") ?>
    <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/css/main.css") ?>
    
    <!-- Wordpress Templates require a style.css in theme root directory -->
    <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."style.css") ?>
    
    <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
    <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."html5-boilerplate/js/vendor/modernizr-2.6.1.min.js") ?>

    <!-- Wordpress Head Items -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_head(); ?>
<div id="headerGfw"></div>

</head>
<body <?php body_class(); ?>>
  <!--[if lt IE 7]>
    <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
  <![endif]-->

  <div id="container">
    <header role="banner">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Home" class="logo">&nbsp;</a>
      <nav id="main-sections">
        <a href="#">updates</a>
        <a href="#">news roundup</a>
        <a href="#">featured posts</a>
        <a href="#">map of the week</a>
      </nav>
    <?php if (is_single()) : ?>
      <h1><a href="<?php echo get_option('home'); ?>/"><?php the_title(); ?></a></h1>
      <p class="description"><?php echo get_the_category_list( __( ', ', 'gfw-blog' ) ); ?></p>
      <p class="posted"><?php gfw_blog_posted_on(); ?></p>
      <span class="attribution"><?php echo get_post_meta($post->ID, 'PhotoAttribution', true); ?></span>
      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
      <script type="text/javascript">
      document.querySelectorAll('header[role=banner]')[0].style.background = '#ccc url("<? echo $image[0] ?>") 50%'
      </script>
    <?php elseif (is_category() && in_category( 'News roundups' )) : ?>
      <h1><a href="<?php echo get_option('home'); ?>/">GFW News roundups</a></h1>
      <p class="description">A recurring digest of news stories on forest science, conservation, and monitoring</p>
      <span class="attribution">MARCO SIMOLA/ CIFOR</span>
    <?php elseif (is_category() && in_category( 'Map of the day' )) : ?>
      <h1><a href="<?php echo get_option('home'); ?>/">GFW Map of the day</a></h1>
      <p class="description">Connecting Global Forest Watch to current events</p>
      <span class="attribution">MARCO SIMOLA/ CIFOR</span>
    <?php elseif (is_category() && in_category( 'Feature posts' )) : ?>
      <h1><a href="<?php echo get_option('home'); ?>/">GFW Feature posts</a></h1>
      <p class="description">Original analysis and commentary authored by GFW experts and partners.</p>
      <span class="attribution">MARCO SIMOLA/ CIFOR</span>
    <?php elseif (is_category() && in_category( 'Update' )) : ?>
      <h1><a href="<?php echo get_option('home'); ?>/">GFW Update</a></h1>
      <p class="description">Short posts on recent news, updates to the GFW site, and reports on new analysis</p>
      <span class="attribution">MARCO SIMOLA/ CIFOR</span>
    <?php else : ?>
      <h1><a href="<?php echo get_option('home'); ?>/">Blog</a></h1>
      <p class="description">The GFW blog catalyzes conversations around improved forest management by providing timely, credible analysis on threats to global forests.</p>
      <span class="attribution">MARCO SIMOLA/ CIFOR</span>
    <?php endif; ?>
    </header>
