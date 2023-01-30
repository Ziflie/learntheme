<?php

    function followrayan_theme_support() {
         // Adds dynamic title tag support
        add_theme_support('title-tag');
        add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme', 'followrayan_theme_support');
    
    function followrayan_menus() {
        $locations = array(
            'primary' => "Desktop navbar on top",
        );
        register_nav_menus($locations);
    }
 
    add_action('init', 'followrayan_menus');


    // creates an custom post type, see favorites in google chrome to get docs
    function create_posttype() {
        register_post_type('team', 
        array(
            'labels' => array(
                'name' => __( 'team' ),
                'singular_name' => __( 'teamLid' )
               ),
               'public' => true,
               'has_archive' => false,
               'rewrite' => array('slug' => 'team'),
        )
            );
    }

    add_action('init', 'create_posttype');

   function load_css() {
     wp_enqueue_style('bootstrap.css', get_template_directory_uri() . '/followrayan/style/style.css');
}
    add_action('wp_enqueue_scripts', 'load_css');


?>