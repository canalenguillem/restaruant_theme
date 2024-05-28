<?php
function courseenguillem_setup() {
    // Soporte para la etiqueta de título
    add_theme_support( 'title-tag' );

    // Soporte para miniaturas (imágenes destacadas)
    add_theme_support( 'post-thumbnails' );

    // Registro de menús
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'courseenguillem' ),
    ) );
}
add_action( 'after_setup_theme', 'courseenguillem_setup' );

function courseenguillem_scripts() {
    // Registro y carga de hojas de estilo y scripts
    wp_enqueue_style( 'courseenguillem-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'courseenguillem_scripts' );
