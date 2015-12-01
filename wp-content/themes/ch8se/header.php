<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

  <header id="masthead" class="site-header" role="banner">
    <nav class="site-nav clearfix">
      <i class="fa fa-bars"></i>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">Home</a>


      <ul>
        <li>
          <span>Shop</span>
          <div>
            <ul class="man-woman">
              <li><a href="<?php echo esc_url( home_url( '/products-men' ) ); ?>">Men</a></li>
              <li><a href="<?php echo esc_url( home_url( '/products-woman' ) ); ?>">Woman</a></li>
            </ul>
          </div>
        </li>
        <li>
          <span>Impact</span>
          <div>
            <ul class="stack">
              <li><a href="<?php echo esc_url( home_url( '/impact' ) ); ?>">How it works</a></li>
              <li><a href="<?php echo esc_url( home_url( '/impact/#causes' ) ); ?>">Causes</a></li>
              <li><a href="<?php echo esc_url( home_url( '/impact/#transparency' ) ); ?>">Transparency</a></li>
            </ul>
          </div>
        </li>
        <li>
          <span>Community</span>
          <div>
            <ul>
              <li><a href="<?php echo esc_url( home_url( '/ch8seday' ) ); ?>">ch8seday Tuesday<br><span>The critical mass of fashion.</span></a></li>
              <li>
                <a href="<?php echo esc_url( home_url( '/ch8sers' ) ); ?>">Ch8sers</a>
                <ul>
                  <li><a href="<?php echo esc_url( home_url( '/ch8sers/#firestarters' ) ); ?>">Firestarters</a></li>
                  <li><a href="<?php echo esc_url( home_url( '/ch8sers/#ambassadors' ) ); ?>">Ambassadors</a></li>
                </ul>
              </li>
              <li><a href="<?php echo esc_url( home_url( '/coming-soon' ) ); ?>">Blog</a></li>
            </ul>
          </div>
        </li>
        <li>
          <span>Creation</span>
          <div>
            <ul>
              <li>
                <a href="<?php echo esc_url( home_url( '/design' ) ); ?>">Design</a>
              </li>
              <li>
                <a href="<?php echo esc_url( home_url( '/coming-soon' ) ); ?>">Craftsmanship</a>
              </li>
            </ul>
          </div>
        </li>
        <li>
          <a href="<?php echo esc_url( home_url( '/about-us' ) ); ?>">About us</a>
        </li>
        <li class="youtube-play">
          <i class="fa fa-youtube-play"></i>
          <br>
          <span>play the video</span>
        </li>
        <li class="subscribe">Coming soon on Indiegogo <span class="btn invert">GET NOTIFIED</span></li>
      </ul>
    </nav>
  </header><!-- .site-header -->

  <?php /*get_sidebar(); */?>
  <div class="wrap">
    <div id="content" class="site-content">
