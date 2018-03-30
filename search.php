<!-- Página que mostra dos resultados da busca -->
<?php get_header(); ?>
<div id="primery">
    <main id="main">
        <div class="container">
            <h2>Resultados de pesquisa para: <?php echo get_search_query(); ?> </h2>
            <?php get_search_form();?>
            <div class="row">
                <?php while(have_posts()): the_post();
                get_template_part('content', 'search');
                if( comments_open() || get_comments_number()):
                    comments_template();
                endif;
            endwhile;
            the_posts_pagination(
                array(
                    'prev_text' => 'Anterior',
                    'next_text' => 'Próximo'
                )
            );
            ?>
        </div>
    </div>
</main>
</div>
<?php get_footer(); ?>
