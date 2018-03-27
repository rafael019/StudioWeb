<?php

// Função para carregar estilos e ecripts
function carrega_scripts(){

    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all');
    // Função carrega scripts JS
    wp_enqueue_script('bootstrap-js' , get_template_directory_uri(). '/js/bootstrap.min.js', array('jquery'), '3.3.7', true);
    // Função que carrega estilos
    wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
    
    wp_enqueue_script('template' , get_template_directory_uri(). '/js/template.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'carrega_scripts');

// Função para Menus
register_nav_menus(
    array( 
        'meu_menu_principal' => 'Menu Principal',
        'menu_rodape' => 'Menu Rodapé',
    )
);

// Suportes para Tema

// Customizar Fundo
add_theme_support('custom-background');
// Customizar Cabeçalho
add_theme_support('custom-header');
//Suporte a Thumbnail
add_theme_support('post-thumbnails');
// Suporte a Formato de post
add_theme_support('post-formats',array('video', 'image'));

// Registrando Sidebar
if (function_exists('register_sidebar')){
    register_sidebar(
        array(
            'name' => 'Barra Lateral 1',
            'id'   => 'sidebar-1',
            'description' => 'Barra lateral da página home',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget_titulo">',
            'after_title' => '</h2>',
        )
    );
     register_sidebar(
        array(
            'name' => 'Barra Lateral 2',
            'id'   => 'sidebar-2',
            'description' => 'Barra lateral da página blog',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget_titulo">',
            'after_title' => '</h2>',
        )
    );
}


?>