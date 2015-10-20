<?php get_header(); ?>

<div class="illu illu-common"  data-parallax="scroll" data-image-src="<?php bloginfo('template_url'); ?>/img/illu-tunnel-1366x200.jpg">
    <h1 class="title main__page__title illu__text">Nous contacter</h1>
</div>
<div class="main main__content">
    <div class="content-preview">
        <h2 class="content-preview__title title">Sommaire</h2>
        <?php $contact = new WP_Query('post_type=contact&order=ASC'); ?>
        <?php if ( $contact->have_posts() ) : ?>
            <ul class="content-preview__list">
                <?php while ( $contact->have_posts() ) : $contact->the_post(); ?>
                    <li class="content-preview__list__item">
                        <a class="content-preview__list__link" href="<?php get_page_link(); ?>#<?php the_field('post_slug'); ?>"><?php the_title(); ?></a>
                    </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
    <div>
        <?php $contact = new WP_Query('post_type=contact&order=ASC'); ?>
        <?php if ( $contact->have_posts() ) : ?>
            <section class="media">
                <?php while ( $contact->have_posts() ) : $contact->the_post(); ?>
                    <div class="anchor" id="<?php the_field('post_slug'); ?>"></div>
                    <h2 class="title media__title"><?php the_title(); ?></h2>
                    <div>
                        <?php if(get_field('description')): ?>
                            <p class="media__text">
                                <?php the_field('description'); ?>
                            </p>
                        <?php endif; ?>
                        <?php if(get_field('horaires')): ?>
                            <div class="media__person">
                                <p class="media__person__name">Heures d'ouverture</p>
                                <p class="media__person__text">
                                    <?php the_field('horaires'); ?>
                                </p>
                            </div>
                        <?php endif; ?>
                        <div class="media__person">
                            <p class="media__person__name">Adresse</p>
                            <p class="media__person__text">
                                <?php the_field('street_number'); ?><br>
                                <?php the_field('post_number'); ?> <?php the_field('city'); ?><br>
                            </p>
                            <p class="media__person__text">
                                Tél. : <?php the_field('tel'); ?>
                            </p>
                            <?php if(get_field('fax')): ?>
                                <p class="media__person__text">
                                    Fax : <?php the_field('fax'); ?>
                                </p>
                            <?php endif; ?>
                            <?php if(get_field('mobile')): ?>
                                <p class="media__person__text">
                                    GSM : <?php the_field('mobile'); ?>
                                </p>
                            <?php endif; ?>
                        </div>
                        <?php if(get_field('mail')): ?>
                            <div class="media__person">
                                <p class="media__person__name">Email</p>
                                <p class="media__person__text">
                                    <?php the_field('mail'); ?>
                                </p>
                            </div>
                        <?php endif; ?>
                        <?php if(get_field('bank_account') || get_field('entreprise_number')): ?>
                            <div class="media__person">
                                <?php if(get_field('bank_account')): ?>
                                    <p class="media__person__name">Compte</p>
                                    <p class="media__person__text">
                                        <?php the_field('bank_account'); ?>
                                    </p>
                                <?php endif; ?>
                                <?php if(get_field('entreprise_number')): ?>
                                    <p class="media__person__name">N° d'Entreprise</p>
                                    <p class="media__person__text">
                                        <?php the_field('entreprise_number'); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile; ?>
            </section>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>