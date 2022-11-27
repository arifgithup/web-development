<?php wp_enqueue_style( 'style-name', get_stylesheet_uri() );
      wp_enqueue_style( 'style-boot', get_template_directory_uri().'/asetess/css/bootstrap.min.css');


      wp_enqueue_script( 'script-name', get_template_directory_uri().'/asetess/css/bootstrap.min.js', array(),'1.0.0.0.0', true);

      add_theme_support( 'title-teg' );
      add_theme_support( 'custom-logo' );
