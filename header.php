<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title><?php the_title(); ?></title>
    <meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
    <meta name="author" content="www.zerotheme.com">

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<div class="wrap-body">

    <!--////////////////////////////////////Header-->
    <!--Top-->
    <div id="top">
        <div class="zerogrid">
            <div class="row">
                <div class="col-2-3">
                    <ul class="list-inline top-link link">
                        <li><i class="fa fa-map-marker"></i> 9876 Diamond hwy, California, US</li>
                        <li><a href="contact.html"><i class="fa fa-phone"></i> 123 456 7890</a></li>
                        <li><i class="fa fa-clock-o"></i> Mo-Fr 11:00-00:00, Sa-Sa 15:00-00:00</li>
                    </ul>
                </div>
                <div class="col-1-3">
                    <ul class="list-inline top-social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <header>

        <nav class="wrap-menu">
            <div class="zerogrid">
                <div id="menu-trigger">Menu</div>
              <?php wp_nav_menu([
                'theme_location' => 'top',
                'container'      => 'ul',
                'menu_id'        => 'menu'
              ]) ?>
            </div>
        </nav>

        <div class="wrap-header">
            <div class="main-header">
                <div class="zerogrid">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="t-center">
                            <span>Bringing People Together  with a Tasty Pizza</span>
                            <h1>Welcome to zDominos !</h1>
                            <p>Thanks for voting us #1 Pizza in The World.<br>Call (999)123-4567</p>
                            <a href="#" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
                        </div>
                    </div><!-- /header-text -->
                </div>
            </div>
        </div>
    </header>