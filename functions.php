<?php
// Incluindo arquivo costumizer
require get_template_directory().'/inc/customizer.php';
// Funções para Limpar o Header
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'start_post_rel_link', 10, 0 );
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_styles', 'print_emoji_styles');
// Função para carregar estilos e ecripts
function carrega_scripts(){
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.7', 'all');
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
// Suporte ao logo customizado
add_theme_support('custom-logo',array(
'width'  => '200', // Largura do Logo
'height' => '110', // Altura do Logo
));
// Suporte a Linguágem HTML5
add_theme_support('html5', array('search-form'));
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
    register_sidebar(
        array(
            'name' => 'Redes Sociais',
            'id'   => 'redes-sociais',
            'description' => 'Widget para redes sociais',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget_titulo">',
            'after_title' => '</h2>',
        )
    );
}
// Alterar o numero de itens por página no blog
function num_itens_blog( $query ){
    if( is_admin() || ! $query->is_main_query() )
        return;
// Pagina Blog
    if( is_home() ){
        $query->set('posts_per_page', 2 );
        return;
    }
}
add_action('pre_get_posts', 'num_itens_blog', 1 );
// Shortcodes para mostrar telefone na página de contato
function mostra_telefone(){
// Função para verificar se está acessando celular
    if(wp_is_mobile()){
        $resultado ='<div class="telefone"><p>Ligue agora: <a href="tel:1535322163">(15)3532-2163 </a></p></div>';
    }
    return $resultado;
}
add_shortcode('meutelefone', 'mostra_telefone');