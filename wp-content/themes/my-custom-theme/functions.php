<?php

add_theme_support( 'post-thumbnails' );

function my_custom_theme_registrar_menus() {
    register_nav_menus( array(
        'menu-principal' => __( 'Menu Principal', 'my-custom-theme' ),
    ));
}
add_action( 'after_setup_theme', 'my_custom_theme_registrar_menus' );

function my_custom_theme_estilos_scripts() {

    wp_enqueue_style( 'my-custom-theme-style', get_template_directory_uri() . '/style/styles.css' );
    wp_enqueue_style( 'my-custom-theme-style', get_template_directory_uri() . '/style.css' );


    wp_enqueue_script( 'my-custom-theme-script', get_template_directory_uri() . '/js/script.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'my_custom_theme_estilos_scripts' );

add_theme_support( 'title-tag' );

add_theme_support( 'widgets' );

function my_custom_theme_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Barra lateral', 'my-custom-theme' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action( 'widgets_init', 'my_custom_theme_widgets_init' );

function load_bootstrap() {
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/libs/bootstrap/css/bootstrap.min.css', false, null );
    wp_enqueue_script( 'jquery' ); 
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/libs/bootstrap/js/bootstrap.min.js', array('jquery'), null, true );
}
add_action( 'wp_enqueue_scripts', 'load_bootstrap' );
?>
