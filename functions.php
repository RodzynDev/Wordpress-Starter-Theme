<?php
  // Hide WP Version
  remove_action('wp_head', 'wp_generator');

  // Add themes supports for
  function project_add_theme_supports() {
    add_theme_support( 'post-thumbnails' );
  }

  add_action( 'after_setup_theme', 'project_add_theme_supports' );

  // Add main menu to configure
  if(function_exists('register_nav_menus')) {
    register_nav_menu('main_nav', 'Main menu');
    register_nav_menu('footer_nav', 'Footer menu');
  }

  add_action('wp_enqueue_scripts', function() {
    if(!is_admin()){
      wp_deregister_script('jquery');
      wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"), false, '3.3.1');
      wp_enqueue_script('jquery');
    }

    wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', false, '3.3.7', true); // BS 3.3.7
    wp_enqueue_script('slick', get_template_directory_uri().'/js/slick.min.js', false, '1.0.0');  // Awesome Slider [Slick.js]
    wp_enqueue_script('theme', get_template_directory_uri().'/js/project-theme.js', false, '1.0.0'); // Dedicated Theme JS 

    wp_register_style('font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'); // Added Font Awesome 4.7.0
    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'); // CSS of Bootstrap 3.3.7

    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('font-awesome');
    wp_enqueue_style('bootstrap');
  });