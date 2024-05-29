<?php
function courseenguillem_styles()
{
    // Registro y carga de hojas de estilo y scripts
    //normalize
    //https://necolas.github.io/normalize.css/
    wp_enqueue_style('normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0');

}
add_action('wp_enqueue_scripts', 'courseenguillem_styles');

//add menus
function courseenguillem_menus(){
    register_nav_menus(array(
        'header-menu'=> __('Header Menu','restaurant'),
        'social-menu'=> __('Social Menu','restaurant')

    ));

}
add_action('init', 'courseenguillem_menus');
