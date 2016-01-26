<?php
/*
Template Name: Search Page
*/
?>
<?php //page_id=180 ?>

<?php get_header(); ?>

<div class="illu illu-common"  data-parallax="scroll" data-image-src="<?php bloginfo('template_url'); ?>/img/illu-lighthouse-1366x200.jpg">
    <h1 class="title main__page__title illu__text">Recherche</h1>
</div>
<div class="main main__content">
    <div>
        <?php get_search_form(); ?>
        <?php
            global $query_string;

            $query_args = explode("&", $query_string);
            $search_query = array();

            foreach($query_args as $key => $string) {
                $query_split = explode("=", $string);
                $search_query[$query_split[0]] = urldecode($query_split[1]);
            } // foreach

            $search = new WP_Query($search_query);
        ?>
        <?php if ( $search->have_posts() ) : ?>
            <?php while ( $search->have_posts() ) : $search->the_post(); ?>
                <section class="media">
                    <p class="media__text">
                        <a class="media__link" href="<?php get_permalink(); ?>" title="Voir l'article; ?>">
                            Voir l'article
                        </a>
                    </p>
                    <h2 class="title media__title"><?php the_title(); ?></h2>
                    <div>
                        <?php the_content(); ?>
                    </div>
                </section>
                <hr>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>