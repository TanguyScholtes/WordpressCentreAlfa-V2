<?php get_header(); ?>

<div class="illu illu-common"  data-parallax="scroll" data-image-src="<?php bloginfo('template_url'); ?>/img/illu-tunnel-1366x200.jpg">
    <h1 class="title main__page__title illu__text">Nos Partenariats</h1>
</div>
<div class="main main__content">
    <div>
        <?php $query = new WP_Query('post_type=partners&order=ASC'); ?>
        <?php if ( $query->have_posts() ) : ?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <section class="media">
                        <?php if ( get_field('partner-icon') ) : ?>
                            <div class="media__image__wrapper">
                                <?php if ( get_field('link') ) : ?>
                                    <a class="media__link" href="<?php the_field('link') ?>">
                                <?php endif; ?>
                                <img class="media__image" src="<?php the_field('partner-icon'); ?>">
                                <?php if ( get_field('link') ) : ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        <h2 class="title media__title">
                            <?php if ( get_field('link') ) : ?>
                                <a class="media__link" href="<?php the_field('link') ?>">
                            <?php endif; ?>
                            <?php the_title(); ?>
                            <?php if ( get_field('link') ) : ?>
                                </a>
                            <?php endif; ?>
                        </h2>
                        <?php if ( get_field('link') ) : ?>
                            <p class="media__text">
                                <span class="media__title">Description :</span> <?php the_field('description'); ?>
                            </p>
                        <?php endif; ?>
                    </section>
                <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>