<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package GFW blog
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
 <link href='http://fonts.googleapis.com/css?family=Fira+Sans:400,300italic,500italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Fira+Sans:500,400,300italic,500italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Fira+Sans:300,400,500,400italic' rel='stylesheet' type='text/css'>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="headerGfw"></div>
<div id="page" class="hfeed site">
  <?php do_action( 'before' ); ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

  <?php if (is_category() && in_category( 'Update' )) : ?>
    <header id="masthead" role="banner" class="site-header update-header">
    <div class="badge badge-credit">Photo: Ollivier Girard/ CIFOR</div>
  <?php elseif (is_category() && in_category( 'Feature posts' )) : ?>
    <header id="masthead" role="banner" class="site-header feature-header">
    <div class="badge badge-credit">Photo: Kate Evans/ CIFOR</div>
  <?php elseif (in_category( 'News roundups' )) : ?>
    <header id="masthead" role="banner" class="site-header news-header">
    <div class="badge badge-credit">Photo: Ollivier Girard/ CIFOR</div>
  <?php elseif (in_category( 'Map of the day' )) : ?>
    <header id="masthead" role="banner" class="site-header mapoftheday-header">
    <div class="badge badge-credit">Photo: CIFOR</div>
  <?php elseif (is_single()) : ?>
    <header id="masthead" role="banner" style="background-image: url('<?php echo $image[0]; ?>'); -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;" class="site-header">
  <?php else : ?>
    <header id="masthead" role="banner" class="site-header">
    <div class="badge badge-credit">Photo: Marco Simola/ CIFOR</div>
  <?php endif; ?>

    <div class="header-inner">
      <nav id="site-navigation" class="main-navigation" role="navigation">
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
      </nav><!-- #site-navigation -->

      <?php if (is_single()) : ?>
        <div class="site-branding">
          <p class="post-description"><?php gfw_blog_posted_on(); ?></p>
          <div class="site-branding-sep"></div>
          <h1 class="post-title"><a href="<?php the_permalink(); ?>" rel="home"><?php the_title(); ?></a></h1>
          <div class="site-branding-sep"></div>
          <?php get_search_form(); ?>
          <div class="entry-meta">
            <?php
              /* translators: used between list items, there is a space after the comma */
              $category_list = get_the_category_list( __( ', ', 'gfw-blog' ) );

              /* translators: used between list items, there is a space after the comma */
              $tag_list = get_the_tag_list( '', __( ', ', 'gfw-blog' ) );

              if ( ! gfw_blog_categorized_blog() ) {
                // This blog only has 1 category so we just need to worry about tags in the meta text
                if ( '' != $tag_list ) {
                  $meta_text = __( '<span class="cat-links">%2$s</span><span class="sep"><span>·</span></span>', 'gfw-blog' );
                }

              } else {
                // But this blog has loads of categories so we should probably display them here
                if ( '' != $tag_list ) {
                  $meta_text = __( '<span class="cat-links">%1$s</span><span class="sep"><span>·</span></span><span class="tags-links">%2$s</span>', 'gfw-blog' );
                } else {
                  $meta_text = __( '<span class="cat-links">%1$s</span>', 'gfw-blog' );
                }

              } // end check for categories on this blog

              printf(
                $meta_text,
                $category_list,
                $tag_list
              );
            ?>

            <?php edit_post_link( __( 'Edit', 'gfw-blog' ), '<span class="sep"><span>·</span></span><span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-meta -->
        </div>
      <?php elseif (is_category() && in_category( 'News roundups' )) : ?>
        <div class="site-branding">
          <div class="site-branding-sep top"></div>
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">GFW News roundups</a></h1>
          <p class="site-description">A recurring digest of news stories on forest science, conservation, and monitoring</p>
          <div class="site-branding-sep"></div>
          <?php get_search_form(); ?>
        </div>
      <?php elseif (is_category() && in_category( 'Map of the day' )) : ?>
        <div class="site-branding">
          <div class="site-branding-sep top"></div>
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">GFW Map of the day</a></h1>
          <p class="site-description">Connecting Global Forest Watch to current events</p>
          <div class="site-branding-sep"></div>
          <?php get_search_form(); ?>
        </div>
      <?php elseif (is_category() && in_category( 'Feature posts' )) : ?>
        <div class="site-branding">
          <div class="site-branding-sep top"></div>
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">GFW Feature posts</a></h1>
          <p class="site-description">Original analysis and commentary authored by GFW experts and partners.</p>
          <div class="site-branding-sep"></div>
          <?php get_search_form(); ?>
        </div>
      <?php elseif (is_category() && in_category( 'Update' )) : ?>
        <div class="site-branding">
          <div class="site-branding-sep top"></div>
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">GFW Update</a></h1>
          <p class="site-description">Short posts on recent news, updates to the GFW site, and reports on new analysis</p>
          <div class="site-branding-sep"></div>
          <?php get_search_form(); ?>
        </div>
      <?php else : ?>
        <div class="site-branding">
          <div class="site-branding-sep top"></div>
          <h1 class="site-title main-site-header"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
          <p class="site-description"><?php bloginfo( 'description' ); ?></p>
          <div class="site-branding-sep"></div>
          <p><?php get_search_form(); ?></p>
        </div>
      <?php endif; ?>
    </div><!-- .header-inner -->

    <?php if (is_single() && in_category( 'News roundups' )) : ?>
      <div class="badge badge-news"><i></i>News roundups</div>
    <?php elseif (is_single() && in_category( 'Feature posts' )) : ?>
      <div class="badge badge-feature"><i></i>Feature posts</div>
    <?php elseif (is_single() && in_category( 'Update' )) : ?>
      <div class="badge badge-updates"><i></i>Update</div>
    <?php endif; ?>
  </header><!-- #masthead -->

  <div id="content" class="site-content">
    <div class="tag-cloud-gfw">
      <ul>
        <li><a href="/tag/forests/">Forests</a></li>
        <li><a href="/tag/commodities/">Commodities</a></li>
        <li><a href="/tag/data/">Data</a></li>
        <li><a href="/tag/deforestation/">Deforestation</a></li>
        <li><a href="/tag/fires/">Fires</a></li>
        <li><a href="/tag/indonesia-forest-fires/">Indonesia forest fires</a></li>
        <li><a href="/tag/maps/">Maps</a></li>
        <li><a href="/tag/palm-oil/">Palm oil</a></li>
        <li><a href="/tag/satellite/">Satellite</a></li>
        <li><a href="/tag/partners/">Partners</a></li>
      </ul>
    </div>
