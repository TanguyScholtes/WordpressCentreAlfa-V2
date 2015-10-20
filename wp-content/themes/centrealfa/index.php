<?php get_header(); ?>
            
            <div class="illu illu-title" data-parallax="scroll" data-image-src="<?php bloginfo('template_url'); ?>/img/illu-holding_hands-1366x485.jpg">
                <div class="illu__text illu__text-title">
                    <h1 class="title main__page__title">Bienvenue sur le site du <?php bloginfo('title'); ?></h1>
                    <p class="title main__page__subtitle"><?php bloginfo('description'); ?></p>
                </div>
            </div>
            
            <div class="main main__content ">
                <section class="media">
                        <h2 class="title media__title"><a class="media__link" href="about.html">À propos du Centre</a></h2>
                        <p class="media__text">L'ALFA est une asbl fondée en 1962. Le Centre est agréé comme Service de Santé Mentale depuis 1975...</p>
                        <p class="media__link"><a class="media__link" href="about.html">En apprendre plus à propos du Centre Alfa</a></p>
                    </section>
            </div>
            <div class="illu illu-contact" data-parallax="scroll" data-image-src="<?php bloginfo('template_url'); ?>/img/illu-woman-1366x485.jpg">
                <section class="media illu__text illu__text-contact">
                    <?php $welcomeMessage = new WP_Query('post_type=home-messages'); ?>
                    <?php if ( $welcomeMessage->have_posts() ) : ?>
                        <?php $i=1; while ( $welcomeMessage->have_posts() && i<=1) : $welcomeMessage->the_post(); ?>
                            <h2 class="title media__title"><?php the_title(); ?></h2>
                            <div class="media__text"><?php the_content(); ?></p>
                        <?php $i++; endwhile; ?>
                    <?php endif; ?>
                </section>
            </div><!-- .main .main__content -->
            
            <div class="main main__content">
                <section class="news">
                    <h2 class="title">News</h2>
                    <?php $newsList = new WP_Query('post_type=news'); ?>
                    <?php if ( $newsList->have_posts() ) : ?>
                        <ul class="news__list">
                            <?php $i=1; while ( $newsList->have_posts() && i<=10) : $newsList->the_post(); ?>
                                <li class="news__list__item">
                                    <?php the_content(); ?>
                                </li>
                            <?php $i++; endwhile; ?>
                        </ul>
                    <?php endif; ?>
                </section>
            </div>
        </div><!-- .wrapper .main__wrapper -->

<?php get_footer(); ?>