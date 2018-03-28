<!-- Pagina interna dos posts do blog -->
<?php get_header(); ?>
<div id="primery">
    <main id="main">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <?php while(have_posts()): the_post();
                        get_template_part('content', 'single'); ?>

                    <div class="paginacao text-left">
                        <?php previous_post_link();?>
                    </div>
                    <div class="paginacao text-right">
                        <?php next_post_link();?>
                    </div>

                    <?php if( comments_open() || get_comments_number()):
                        comments_template();

                        endif; endwhile; ?>
                </div>
                <div class="col-md-3 barra-lateral">
                    <?php get_sidebar('blog'); ?>
                </div>
            </div>
        </div>
    </main>
</div>
<?php get_footer(); ?>