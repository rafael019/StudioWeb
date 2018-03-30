<?php
// Template Name: Home
get_header(); ?>

<div class="conteudo">
    <main>
        <section class="slide">
         <div class="container">
            <?php motoPressSlider('home-slider') ?>
         </div>
         </section>
        <section class="servicos">
        <div class="container">
            <div class="row">
                <div class="col-md-4 .col-sm-4 .col-xs-12">
                    <div class="servicos-item">
                        <div class="servicos-img">
                            <img src="<?php echo wp_get_attachment_image_url( get_theme_mod('set_servicos1')); ?>" alt="">
                        </div>
                        <div class="servicos-desc">
                            <h2><?php echo get_theme_mod('set_servicos1_titulo') ?></h2>
                            <p><?php echo get_theme_mod('set_servicos1_desc') ?></p>
                        </div>
                    </div>
                </div> 
                <div class="col-md-4 .col-sm-4 .col-xs-12">
                    <div class="servicos-item">
                        <div class="servicos-img">
                            <img src="<?php echo wp_get_attachment_image_url( get_theme_mod('set_servicos2')); ?>" alt="">
                        </div>
                        <div class="servicos-desc">
                            <h2><?php echo get_theme_mod('set_servicos2_titulo') ?></h2>
                            <p><?php echo get_theme_mod('set_servicos2_desc') ?></p>
                        </div>
                    </div>
                </div> 
                <div class="col-md-4 .col-sm-4 .col-xs-12">
                    <div class="servicos-item">
                        <div class="servicos-img">
                            <img src="<?php echo wp_get_attachment_image_url( get_theme_mod('set_servicos3')); ?>" alt="">
                        </div>
                        <div class="servicos-desc">
                            <h2><?php echo get_theme_mod('set_servicos3_titulo') ?></h2>
                            <p><?php echo get_theme_mod('set_servicos3_desc') ?></p>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
        </section>
        <section class="meio">
        <div class="container">
            <div class="row">
                <aside class="barra-lateral col-md-4">
                    <?php get_sidebar('home'); ?>
                </aside>
                <div class="noticias col-md-8">
                   <div class="row">
                        <?php $destaque = new WP_Query('post_type=post&posts_per_page=1&cat=13');

                            if( $destaque->have_posts()): while($destaque->have_posts()): $destaque->the_post(); ?>

                                    <div class="col-md-12">
                                        <?php get_template_part('content','destaque'); ?>
                                    </div>           

                        <?php endwhile; wp_reset_postdata(); endif; ?>

                         <?php 
                            $args =  array(
                                'post_type' => 'post',
                                'posts_per_page' => 2,
                                'category__not_in' => 13
                                //'offset' => 1, Pula o primeiro post
                            );
                            
                            $secundaria = new WP_Query($args);

                                if( $secundaria->have_posts()): while($secundaria->have_posts()): $secundaria->the_post(); ?>

                                        <div class="col-md-6">
                                            <?php get_template_part('content','secundaria'); ?>
                                        </div>           

                        <?php endwhile; wp_reset_postdata(); endif; ?>

                   </div>
                </div>
            </div>
            </div>
        </section>
        <section class="mapa">
                <div class="ondeestamos">
                    <h1>Onde Estamos?</h1>
                </div>
                <?php gmwd_map( 1, 1); ?>
        </section>
    </main>
</div>

<?php get_footer(); ?>