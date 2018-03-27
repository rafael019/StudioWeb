<?php
// Template Name: Home
get_header(); ?>

<div class="conteudo">
    <main>
        <section class="slide">
         <div class="container">Slide</div>
         </section>
        <section class="servicos">
        <div class="container">Servicos</div>
        </section>
        <section class="meio">
        <div class="container">
            <div class="row">
                <aside class="barra-lateral col-md-3">Barra Lateral</aside>
                <div class="noticias col-md-9">
                    <?php
                        //Se houver algum post
                        if(have_posts()) : 
                            //Enquanto houver algum post, chame o post de determinada maneira
                            while(have_posts()) : the_post()
                    ?>   
                        <h1><?php the_title(); ?></h1>
                        <p>Publicado em: <?php echo get_the_date();?> por <?php the_author(); ?></p>
                        <p>Categorias: <?php the_category(' ')?></p>
                        <p><?php the_tags('Tags: ',', '); ?></p>
                        <p><?php the_content(); ?></p>
                    <?php endwhile; else: ?>
                        <p>Não tem nada ainda pra mostrar</p>
                    <?php endif; ?>
                    
                </div>
            </div>
            </div>
        </section>
        <section class="mapa">
        <div class="container">
        Mapa
        </div></section>
    </main>
</div>

<?php get_footer(); ?>