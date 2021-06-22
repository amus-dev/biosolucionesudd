<?php

//Register Styles
add_action('wp_enqueue_scripts', 'enqueue_my_styles');
function enqueue_my_styles()
{
    wp_register_style('bootstrapcss', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css');
    wp_enqueue_style('bootstrapcss');

    wp_register_style('styles', get_template_directory_uri() . '/dist/css/main.min.css');
    wp_enqueue_style('styles');
}


//Register scripts
add_action('wp_footer', 'my_footer_scripts');
function my_footer_scripts()
{
    wp_deregister_script('bootstrap');
    wp_register_script('bootstrap', 'https://getbootstrap.com/docs/5.0/dist/js/bootstrap.bundle.min.js');
    wp_enqueue_script('bootstrap');

    wp_deregister_script('bundle');
    wp_register_script('bundle', get_template_directory_uri() . '/dist/js/bundle.min.js');
    wp_enqueue_script('bundle');
}

if (function_exists('acf_add_options_page')) {
    acf_set_options_page_title(__('Theme Options'));

    acf_add_options_sub_page(array(
        'page_title'     => 'Configuración Menu',
        'menu_title'    => 'Menu',
    ));

    acf_add_options_sub_page(array(
        'page_title'     => 'Configuración Footer',
        'menu_title'    => 'Footer',
    ));
}
