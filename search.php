<?php get_header(); ?>
    <div id="primery">
        <main id="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
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
                    <div class="col-md-3 barra-lateral">
                        <?php get_sidebar('blog'); ?>
                    </div>
                </div>
            </div>
        </main>
    </div>
<?php get_footer(); ?>
