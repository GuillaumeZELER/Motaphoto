<?php

    function enqueue_my_theme_styles() {
        wp_enqueue_style('my-theme-style', get_stylesheet_uri());
    }

    add_action('wp_enqueue_scripts', 'enqueue_my_theme_styles');
    
// mise en place des menus header et footers
    function register_my_menus() {
        register_nav_menus(
            array(
                'header' => __('Menu du header'),
                'footer' => __('Menu du footer')
            )
        );
    }
    add_action('after_setup_theme', 'register_my_menus');

    //enqueue scripts.js
function enqueue_custom_script() {
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/menu.js', array('jquery'), '1.0', true);
  }
  add_action('wp_enqueue_scripts', 'enqueue_custom_script');

?>
