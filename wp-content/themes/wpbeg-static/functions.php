<?php
    //テーマサポート
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' ); 
    function wpbeg_script() {
        wp_enqueue_style( 'Sacramento', '//fonts.googleapis.com/css?family=Sacramento&amp;amp;subset=latin-ext', array() );
        wp_enqueue_style( 'wpbeg', get_template_directory_uri() . '/css/wpbeg.css', array(), '1.0.0' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
        wp_enqueue_script( 'main', get_template_directory_uri() . '/main.js', array(), '1.0.0', true );add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );
    }
    add_action( 'wp_enqueue_scripts', 'wpbeg_script', 'main_script',  'init', 'load_js' );