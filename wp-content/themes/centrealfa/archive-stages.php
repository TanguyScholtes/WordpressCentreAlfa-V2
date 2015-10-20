<?php get_header(); ?>

<div class="illu illu-common"  data-parallax="scroll" data-image-src="<?php bloginfo('template_url'); ?>/img/illu-tunnel-1366x200.jpg">
    <h1 class="title main__page__title illu__text">Stages / Jobs au Centre Alfa</h1>
</div>
<div class="main main__content">
    <div class="content-preview">
        <h2 class="content-preview__title title">Sommaire</h2>
        <?php $query = new WP_Query('post_type=stages&order=ASC'); ?>
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
        <?php $query = new WP_Query('post_type=stages&order=ASC'); ?>
        <?php if ( $query->have_posts() ) : ?>
                <?php while ( $query->have_posts() ) : $query->the_post(); ?>
                    <section class="media">
                        <div class="anchor" id="<?php the_field('post_slug'); ?>"></div>
                        <h2 class="title media__title"><?php the_title(); ?></h2>
                        <p class="media__text">
                            <span class="media__title">Type :</span> <?php the_field('type'); ?>
                        </p>
                        <p class="media__text">
                            <span class="media__title">Domaine :</span> <?php the_field('domain'); ?>
                        </p>
                        <p class="media__text">
                            <span class="media__title">Durée :</span> <?php the_field('length'); ?>
                        </p>
                        <p class="media__text">
                            <span class="media__title">Profil souhaité :</span> <?php the_field('profile'); ?>
                        </p>
                        <p class="media__text">
                            <span class="media__title">Description :</span> <?php the_field('description'); ?>
                        </p>
                        <p class="media__text">
                            <span class="media__title">Contact :</span> Si vous êtes intéressé(e), contactez-nous via <?php the_field('contact'); ?>
                        </p>
                    </section>
                <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>