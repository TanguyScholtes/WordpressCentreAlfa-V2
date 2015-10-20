<?php get_header(); ?>

<div class="illu illu-common"  data-parallax="scroll" data-image-src="<?php bloginfo('template_url'); ?>/img/illu-tunnel-1366x200.jpg">
    <h1 class="title main__page__title illu__text">Service de Prévention / Formation / Accompagnement d'Adultes Relais</h1>
</div>
<div class="main main__content">
    <div class="content-preview">
        <h2 class="content-preview__title title">Sommaire</h2>
        <?php $query = new WP_Query('post_type=prevent-service&order=ASC'); ?>
        <?php if ( $query->have_posts() ) : ?>
            <ul class="content-preview__list">
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <li class="content-preview__list__item">
                        <a class="content-preview__list__link" href="<?php get_page_link(); ?>#<?php the_field('post_slug'); ?>"><?php the_title(); ?></a>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
    <div>
        <?php $query = new WP_Query('post_type=prevent-service&order=ASC'); ?>
        <?php if ( $query->have_posts() ) : ?>
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                <section class="media">
                    <div class="anchor" id="<?php the_field('post_slug'); ?>"></div>
                    <h2 class="title media__title"><?php the_title(); ?></h2>
                    <div>
                        <?php the_content(); ?>
                    </div>
                </section>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>