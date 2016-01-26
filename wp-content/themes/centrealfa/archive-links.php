<?php get_header(); ?>

<div class="illu illu-common"  data-parallax="scroll" data-image-src="<?php bloginfo('template_url'); ?>/img/illu-lighthouse-1366x200.jpg">
    <h1 class="title main__page__title illu__text">Liens Externes</h1>
</div>
<div class="main main__content">
    <div>
        <?php $query = new WP_Query('post_type=links&order=ASC'); ?>
        <?php if ( $query->have_posts() ) : ?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <section class="media">
                        <div class="anchor" id="<?php the_field('post_slug'); ?>"></div>
                        <h2 class="title media__title">
                            <a class="media__link" href="<?php the_field('link'); ?>" title="Visiter le site de <?php the_title(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>
                        <?php if(get_field('description')): ?>
                            <p class="media__text">
                                <?php the_field('description'); ?>
                            </p>
                        <?php endif; ?>
                    </section>
                <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>