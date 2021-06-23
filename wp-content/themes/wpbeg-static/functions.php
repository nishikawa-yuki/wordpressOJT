<?php
    //テーマサポート
    add_theme_support( 'menus' );
    add_theme_support( 'title-tag' );
    //アイキャッチ導入
    add_theme_support( 'post-thumbnails' );

    //タイトル出力
    // function wpbeg_title( $title ) {
    //     if ( is_front_page() && is_home() ) { //トップページなら
    //         $title = get_bloginfo( 'name', 'display' );
    //     } elseif ( is_singular() ) { //シングルページなら
    //         $title = single_post_title( '', false );
    //     }
    //         return $title;
    //     }
    // add_filter( 'pre_get_document_title', 'wpbeg_title' );
    // add_theme_support( 'post-thumbnails' ); 
    function wpbeg_script() {
        wp_enqueue_style( 'Sacramento', '//fonts.googleapis.com/css?family=Sacramento&amp;amp;subset=latin-ext', array() );
        wp_enqueue_style( 'wpbeg', get_template_directory_uri() . '/css/wpbeg.css', array(), '1.0.0' );
        wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0.0' );
        wp_enqueue_script( 'main', get_template_directory_uri() . '/main.js', array(), '1.0.0', true );add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );
    }
    add_action( 'wp_enqueue_scripts', 'wpbeg_script', 'main_script',  'init', 'load_js' );