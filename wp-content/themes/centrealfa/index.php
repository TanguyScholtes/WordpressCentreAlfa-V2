<?php get_header(); ?>
            
            <div class="illu illu-title" data-parallax="scroll" data-image-src="<?php bloginfo('template_url'); ?>/img/illu-lighthouse-1366x485.jpg">
                <div class="illu__text illu__text-title center">
                    <h1 class="title main__page__title"><?php bloginfo('title'); ?></h1>
                    <p class="title main__page__subtitle"><?php bloginfo('description'); ?></p>
                </div>
            </div>
            
            <div class="main main__content ">
                <section class="media center">
                        <h2 class="title media__title"><a class="media__link" href="about.html">À propos du Centre</a></h2>
                        <p class="media__text">L'ALFA est une asbl fondée en 1962. Le Centre est agréé comme Service de Santé Mentale depuis 1975...</p>
                        <p class="button"><a class="button__link" href="about.html">En apprendre plus à propos du Centre Alfa</a></p>
                    </section>
            </div>
            <div class="illu illu-contact" data-parallax="scroll" data-image-src="<?php bloginfo('template_url'); ?>/img/illu-sunset-1366x485.jpg">
                <section class="media center">
                        <h2 class="title media__title">Ne restez pas seul</h2>
                        <p class="media__text">Sur simple rendez-vous, vous pourrez discuter avec des psychologues, des psychiatres et des assistants sociaux afin d’aborder vos problèmes de la meilleure manière possible.</p>
                        <p class="media__text">Vous n’êtes pas obligé de garder le silence. Ne restez pas seul. Contactez-nous.</p>
                        <p class="button"><a class="button__link" href="http://centrealfa.tanguyscholtes.be/?post_type=contact">Contacter le Centre Alfa</a></p>
                    </section>
            </div><!-- .main .main__content -->
            
            <div class="main main__content">
                <section class="news">
                    <h2 class="title center">News</h2>
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