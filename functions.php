<?php

    add_filter('show_admin_bar', '__return_false');

    define('P_THEME_ROOT', get_template_directory_uri() );
    define('P_CSS_DIR', P_THEME_ROOT . '/assets/css/');
    define('P_IMG_DIR', P_THEME_ROOT . '/assets/img/');
    define('P_JS_DIR', P_THEME_ROOT . '/assets/js/');

    add_action('wp_enqueue_scripts', function (){
        wp_enqueue_style('linearIcons', P_CSS_DIR . 'linearicons.css');
        wp_enqueue_style('fontAwesome', P_CSS_DIR . 'font-awesome.min.css');
        wp_enqueue_style('bootstrapCss', P_CSS_DIR . 'bootstrap.css');
        wp_enqueue_style('magnificPopupCss', P_CSS_DIR . 'magnific-popup.css');
        wp_enqueue_style('niceSelectCss', P_CSS_DIR . 'nice-select.css');
        wp_enqueue_style('animate', P_CSS_DIR . 'animate.min.css');
        wp_enqueue_style('owlCarouselCss', P_CSS_DIR . 'owl.carousel.css');
        wp_enqueue_style('mainCss', P_CSS_DIR . 'main.css');

        if ( !is_admin() ) wp_deregister_script('jquery');

        wp_enqueue_script('jQuery', P_JS_DIR .  'vendor/jquery-2.2.4.min.js' );
        wp_enqueue_script('popper', P_JS_DIR .  'popper.min.js' );
        wp_enqueue_script('bootstrapJs', P_JS_DIR .  'vendor/bootstrap.min.js' );
        wp_enqueue_script('googleMaps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA' );
        wp_enqueue_script('easing', P_JS_DIR .  'easing.min.js' );
        wp_enqueue_script('hoverIntent', P_JS_DIR .  'hoverIntent.js' );
        wp_enqueue_script('superfish', P_JS_DIR .  'superfish.min.js' );
        wp_enqueue_script('ajaxChimp', P_JS_DIR .  'jquery.ajaxchimp.min.js' );
        wp_enqueue_script('magnificPopupJs', P_JS_DIR .  'jquery.magnific-popup.min.js' );
        wp_enqueue_script('tabsJs', P_JS_DIR .  'jquery.tabs.min.js' );
        wp_enqueue_script('niceSelectJs', P_JS_DIR .  'jquery.nice-select.min.js' );
        wp_enqueue_script('isotope', P_JS_DIR .  'isotope.pkgd.min.js' );
        wp_enqueue_script('waypoints', P_JS_DIR .  'waypoints.min.js' );
        wp_enqueue_script('counterup', P_JS_DIR .  'jquery.counterup.min.js' );
        wp_enqueue_script('simpleSkillbar', P_JS_DIR .  'simple-skillbar.js' );
        wp_enqueue_script('owlCarouselJs', P_JS_DIR .  'owl.carousel.min.js' );
        wp_enqueue_script('mailscript', P_JS_DIR .  'mail-script.js' );
        wp_enqueue_script('mainJS', P_JS_DIR .  'main.js' );
    });

    add_action('after_setup_theme', function (){
        register_nav_menu('top', 'Верхнее меню');
        add_theme_support('post-thumbnails');
        add_theme_support('title-tag');
    });

    add_action('widgets_init', function (){
        register_sidebar( array(
            'name'          => 'Правый сайдбар',
            'id'            => "right-sidebar",
            'description'   => '',
            'class'         => '',
            'before_widget' => '<div id="%1$s" class="widget single-sidebar-widget %2$s">',
            'after_widget'  => "</div>\n",
            'before_title'  => '<div class="widgettitle">',
            'after_title'   => "</div>\n",
        ) );
    });

    // удаляет H2 из шаблона пагинации
    add_filter('navigation_markup_template', function ( $template, $class ){

        return '
        <nav class="navigation %1$s" role="navigation">
            <div class="nav-links">%3$s</div>
        </nav>    
        ';
    }, 10, 2 );


?>