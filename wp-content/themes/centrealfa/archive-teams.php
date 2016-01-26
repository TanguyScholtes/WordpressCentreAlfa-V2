<?php get_header(); ?>

<div class="illu illu-common"  data-parallax="scroll" data-image-src="<?php bloginfo('template_url'); ?>/img/illu-lighthouse-1366x200.jpg">
    <h1 class="title main__page__title illu__text">Nos Équipes</h1>
</div>
<div class="main main__content">
    <div class="content-preview">
        <h2 class="content-preview__title title">Sommaire</h2>
        <ul class="content-preview__list">
            <li class="content-preview__list__item">
                <a class="content-preview__list__link" href="<?php get_page_link(); ?>#direction">La Direction</a>
            </li>
            <li class="content-preview__list__item">
                <a class="content-preview__list__link" href="<?php get_page_link(); ?>#therapy-team">Équipes Thérapeutiques</a>
            </li>
            <li class="content-preview__list__item">
                <a class="content-preview__list__link" href="<?php get_page_link(); ?>#medical-team">Équipe Médicale</a>
            </li>
            <li class="content-preview__list__item">
                <a class="content-preview__list__link" href="<?php get_page_link(); ?>#support-parents">Support aux parents toxicomanes et à leurs enfants</a>
            </li>
            <li class="content-preview__list__item">
                <a class="content-preview__list__link" href="<?php get_page_link(); ?>#risks-reduce">Réduction des risques</a>
            </li>
            <li class="content-preview__list__item">
                <a class="content-preview__list__link" href="<?php get_page_link(); ?>#prevent-team">Service prévention / formation / accompagnement d'adultes relais</a>
            </li>
            <li class="content-preview__list__item">
                <a class="content-preview__list__link" href="<?php get_page_link(); ?>#secretariat">Secrétariat</a>
            </li>
        </ul>
    </div>
    
    <div>
        <?php $args = array('post_type' => 'teams',
	                        'tax_query' => array(
		                                      array('taxonomy' => 'specialties',
                                                    'field'    => 'slug',
                                                    'terms'    => 'direction',
		                                      ),
	                         ),
                );
              $direction = new WP_Query( $args ); ?>
        <?php if ( $direction->have_posts() ) : ?>
            <section class="media">
                <div class="anchor" id="direction"></div>
                <h2 class="title media__title">La Direction</h2>
                <?php while ( $direction->have_posts() ) : $direction->the_post(); ?>
                    <div class="media__person">
                        <p class="media__person__name"><?php the_field('teams-name'); ?></p>
                        <p class="media__person__text"><?php the_field('teams-function'); ?></p>
                    </div>
                <?php endwhile; ?>
            </section>
        <?php endif; ?>
    </div>
    
    <div>
        <div class="anchor" id="therapy-team"></div>
        <h2 class="title media__title" id="equipes-therapeutiques">Équipes Thérapeutiques</h2>
        <?php $args = array('post_type' => 'teams',
	                        'tax_query' => array(
		                                      array('taxonomy' => 'specialties',
                                                    'field'    => 'slug',
                                                    'terms'    => 'social-team',
		                                      ),
	                         ),
                );
              $social_team = new WP_Query( $args ); ?>
        <?php if ( $social_team->have_posts() ) : ?>
            <section class="media">
                <div class="anchor" id="social-team"></div>
                <h3 class="title media__title">Service social, Premier accueil et Suivi psychosocial</h3>
                <?php while ( $social_team->have_posts() ) : $social_team->the_post(); ?>
                    <div class="media__person">
                        <p class="media__person__name"><?php the_field('teams-name'); ?></p>
                        <p class="media__person__text"><?php the_field('teams-function'); ?></p>
                    </div>
                <?php endwhile; ?>
            </section>
        <?php endif; ?>
        
        <?php $args = array('post_type' => 'teams',
	                        'tax_query' => array(
		                                      array('taxonomy' => 'specialties',
                                                    'field'    => 'slug',
                                                    'terms'    => 'psychotherapy',
		                                      ),
	                         ),
                );
              $psychotherapy = new WP_Query( $args ); ?>
        <?php if ( $psychotherapy->have_posts() ) : ?>
            <section class="media">
                <div class="anchor" id="psychotherapy"></div>
                <h3 class="title media__title">Psychothérapies individuelles</h3>
                <?php while ( $psychotherapy->have_posts() ) : $psychotherapy->the_post(); ?>
                    <div class="media__person">
                        <p class="media__person__name"><?php the_field('teams-name'); ?></p>
                        <p class="media__person__text"><?php the_field('teams-function'); ?></p>
                    </div>
                <?php endwhile; ?>
            </section>
        <?php endif; ?>

        <?php $args = array('post_type' => 'teams',
	                        'tax_query' => array(
		                                      array('taxonomy' => 'specialties',
                                                    'field'    => 'slug',
                                                    'terms'    => 'couple-therapy',
		                                      ),
	                         ),
                );
              $couple_therapy = new WP_Query( $args ); ?>
        <?php if ( $couple_therapy->have_posts() ) : ?>
            <section class="media">
                <div class="anchor" id="couple-therapy"></div>
                <h3 class="title media__title">Thérapies de couples et de familles</h3>
                <?php while ( $couple_therapy->have_posts() ) : $couple_therapy->the_post(); ?>
                    <div class="media__person">
                        <p class="media__person__name"><?php the_field('teams-name'); ?></p>
                        <p class="media__person__text"><?php the_field('teams-function'); ?></p>
                    </div>
                <?php endwhile; ?>
            </section>
        <?php endif; ?>
        
        <?php $args = array('post_type' => 'teams',
	                        'tax_query' => array(
		                                      array('taxonomy' => 'specialties',
                                                    'field'    => 'slug',
                                                    'terms'    => 'aide-alcool',
		                                      ),
	                         ),
                );
              $aide_alcool = new WP_Query( $args ); ?>
        <?php if ( $aide_alcool->have_posts() ) : ?>
            <section class="media">
                <div class="anchor" id="aide-alcool"></div>
                <h3 class="title media__title">Accompagnement en ligne - Équipe Aide-Alcool.be</h3>
                <?php while ( $aide_alcool->have_posts() ) : $aide_alcool->the_post(); ?>
                    <div class="media__person">
                        <p class="media__person__name"><?php the_field('teams-name'); ?></p>
                        <p class="media__person__text"><?php the_field('teams-function'); ?></p>
                    </div>
                <?php endwhile; ?>
            </section>
        <?php endif; ?>
    </div>
    
    <div>
        <?php $args = array('post_type' => 'teams',
	                        'tax_query' => array(
		                                      array('taxonomy' => 'specialties',
                                                    'field'    => 'slug',
                                                    'terms'    => 'medical-team',
		                                      ),
	                         ),
                );
              $medical_team = new WP_Query( $args ); ?>
        <?php if ( $medical_team->have_posts() ) : ?>
            <section class="media">
                <div class="anchor" id="medical-team"></div>
                <h2 class="title media__title">Équipe Médicale</h2>
                <?php while ( $medical_team->have_posts() ) : $medical_team->the_post(); ?>
                    <div class="media__person">
                        <p class="media__person__name"><?php the_field('teams-name'); ?></p>
                        <p class="media__person__text"><?php the_field('teams-function'); ?></p>
                    </div>
                <?php endwhile; ?>
            </section>
        <?php endif; ?>
    </div>
    
    <div>
        <?php $args = array('post_type' => 'teams',
	                        'tax_query' => array(
		                                      array('taxonomy' => 'specialties',
                                                    'field'    => 'slug',
                                                    'terms'    => 'support-parents',
		                                      ),
	                         ),
                );
              $support_parents = new WP_Query( $args ); ?>
        <?php if ( $support_parents->have_posts() ) : ?>
            <section class="media">
                <div class="anchor" id="support-parents"></div>
                <h2 class="title media__title">Support aux parents toxicomanes et à leurs enfants</h2>
                <?php while ( $support_parents->have_posts() ) : $support_parents->the_post(); ?>
                    <div class="media__person">
                        <p class="media__person__name"><?php the_field('teams-name'); ?></p>
                        <p class="media__person__text"><?php the_field('teams-function'); ?></p>
                    </div>
                <?php endwhile; ?>
            </section>
        <?php endif; ?>
    </div>
    
    <div>
        <?php $args = array('post_type' => 'teams',
	                        'tax_query' => array(
		                                      array('taxonomy' => 'specialties',
                                                    'field'    => 'slug',
                                                    'terms'    => 'risks-reduce',
		                                      ),
	                         ),
                );
              $risks_reduce = new WP_Query( $args ); ?>
        <?php if ( $risks_reduce->have_posts() ) : ?>
            <section class="media">
                <div class="anchor" id="risks-reduce"></div>
                <h2 class="title media__title">Réduction des risques</h2>
                <?php while ( $risks_reduce->have_posts() ) : $risks_reduce->the_post(); ?>
                    <div class="media__person">
                        <p class="media__person__name"><?php the_field('teams-name'); ?></p>
                        <p class="media__person__text"><?php the_field('teams-function'); ?></p>
                    </div>
                <?php endwhile; ?>
            </section>
        <?php endif; ?>
    </div>
    
    <div>
        <?php $args = array('post_type' => 'teams',
	                        'tax_query' => array(
		                                      array('taxonomy' => 'specialties',
                                                    'field'    => 'slug',
                                                    'terms'    => 'prevent-team',
		                                      ),
	                         ),
                );
              $prevent_team = new WP_Query( $args ); ?>
        <?php if ( $prevent_team->have_posts() ) : ?>
            <section class="media">
                <div class="anchor" id="prevent-team"></div>
                <h2 class="title media__title">Service prévention / formation / accompagnement d'adultes relais</h2>
                <?php while ( $prevent_team->have_posts() ) : $prevent_team->the_post(); ?>
                    <div class="media__person">
                        <p class="media__person__name"><?php the_field('teams-name'); ?></p>
                        <p class="media__person__text"><?php the_field('teams-function'); ?></p>
                    </div>
                <?php endwhile; ?>
            </section>
        <?php endif; ?>
    </div>
    
    <div>
        <?php $args = array('post_type' => 'teams',
	                        'tax_query' => array(
		                                      array('taxonomy' => 'specialties',
                                                    'field'    => 'slug',
                                                    'terms'    => 'secretariat',
		                                      ),
	                         ),
                );
              $secretariat = new WP_Query( $args ); ?>
        <?php if ( $secretariat->have_posts() ) : ?>
            <section class="media">
                <div class="anchor" id="secretariat"></div>
                <h2 class="title media__title">Secrétariat</h2>
                <?php while ( $secretariat->have_posts() ) : $secretariat->the_post(); ?>
                    <div class="media__person">
                        <p class="media__person__name"><?php the_field('teams-name'); ?></p>
                        <p class="media__person__text"><?php the_field('teams-function'); ?></p>
                    </div>
                <?php endwhile; ?>
            </section>
        <?php endif; ?>
    </div>
    
</div>

<?php get_footer(); ?>