<article class="post-format-video">
    <h1 class="vermelho"><?php the_title(); ?></h1>
    <?php the_post_thumbnail('thumbnail'); ?>
    <p>Publicado em: <?php echo get_the_date();?> por <?php the_author(); ?></p>
    <p>Categorias: <?php the_category(' ')?></p>
    <p><?php the_content(); ?></p>
</article>