<?php

    add_filter('show_admin_bar', '__return_false');

    define('THEME_ROOT', get_template_directory_uri() );
    define('IMG_DIR', THEME_ROOT . '/assets/images');

    add_action('wp_enqueue_scripts', function (){
        wp_enqueue_style('zerogrid', get_template_directory_uri() . '/assets/css/zerogrid.css');
        wp_enqueue_style('menuCss', get_template_directory_uri() . '/assets/css/menu.css');
        wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/font-awesome/css/font-awesome.min.css');
        wp_enqueue_style('owlCarousel', get_template_directory_uri() . '/assets/owl-carousel/owl.carousel.css');
        wp_enqueue_style('owlTheme', get_template_directory_uri() . '/assets/owl-carousel/owl.theme.css');
        wp_enqueue_style('mainCss', get_template_directory_uri() . '/assets/css/style.css');

        wp_enqueue_script('jQuery', get_template_directory_uri() . '/assets/js/jquery-2.1.1.js' );
        wp_enqueue_script('jQuery183', get_template_directory_uri() . '/assets/js/jquery183.min.js' );
        wp_enqueue_script('owlCarouselJs', get_template_directory_uri() . '/assets/owl-carousel/owl.carousel.js');
        wp_enqueue_script('script', get_template_directory_uri() . '/assets/js/script.js' );
    });

    add_action('after_setup_theme', function (){
        register_nav_menu('top', 'Верхнее меню');
    })



?>