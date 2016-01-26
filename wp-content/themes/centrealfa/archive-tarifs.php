<?php get_header(); ?>

<div class="illu illu-common"  data-parallax="scroll" data-image-src="<?php bloginfo('template_url'); ?>/img/illu-lighthouse-1366x200.jpg">
    <h1 class="title main__page__title illu__text">Nos Tarifs</h1>
</div>
<div class="main main__content">
    <div class="content-preview">
        <h2 class="content-preview__title title">Sommaire</h2>
        <?php $tarifs = new WP_Query('post_type=tarifs&order=ASC'); ?>
        <?php if ( $tarifs->have_posts() ) : ?>
            <ul class="content-preview__list">
                <?php while ( $tarifs->have_posts() ) : $tarifs->the_post(); ?>
                    <li class="content-preview__list__item">
                        <a class="content-preview__list__link" href="<?php get_page_link(); ?>#<?php the_field('post_slug'); ?>"><?php the_title(); ?></a>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
    <div>
        <?php $tarifs = new WP_Query('post_type=tarifs&order=ASC'); ?>
        <?php if ( $tarifs->have_posts() ) : ?>
            <section class="media">
                <?php while ( $tarifs->have_posts() ) : $tarifs->the_post(); ?>
                    <div class="anchor" id="<?php the_field('post_slug'); ?>"></div>
                    <h2 class="title media__title"><?php the_title(); ?></h2>
                    <div>
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>
            </section>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>