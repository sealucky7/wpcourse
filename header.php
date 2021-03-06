<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="<?php echo P_IMG_DIR ?>fav.png">
  <!-- Author Meta -->
  <meta name="author" content="colorlib">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="<?php bloginfo( 'charset' ); ?>">

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">

  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<header id="header">
  <div class="container main-menu">
    <div class="row align-items-center justify-content-between d-flex">
      <div id="logo">
        <a href="<?php echo home_url(); ?>"><img src="<?php echo P_IMG_DIR ?>logo.png" alt="" title="" /></a>
      </div>
      <nav id="nav-menu-container">
        <?php wp_nav_menu(array(
          'theme_location' => 'top',
          'container'      => 'ul',
          'menu_class'     => 'nav-menu'
        )) ?>
        <!--<ul class="nav-menu">
          <li><a href="index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="services.html">Services</a></li>
          <li><a href="portfolio.html">Portfolio</a></li>
          <li><a href="price.html">Pricing</a></li>
          <li class="menu-has-children"><a href="">Blog</a>
            <ul>
              <li><a href="blog-home.html">Blog Home</a></li>
              <li><a href="blog-single.html">Blog Single</a></li>
            </ul>
          </li>
          <li class="menu-has-children"><a href="">Pages</a>
            <ul>
              <li><a href="elements.html">Elements</a></li>
              <li class="menu-has-children"><a href="">Level 2 </a>
                <ul>
                  <li><a href="#">Item One</a></li>
                  <li><a href="#">Item Two</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="contact.html">Contact</a></li>
        </ul>-->
      </nav><!-- #nav-menu-container -->
    </div>
  </div>
</header><!-- #header -->


