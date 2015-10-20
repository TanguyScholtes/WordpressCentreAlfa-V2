<?php get_header(); ?>

<section>
    <h2>Les super articles de <i>C'est Bon Pour Ce Que Tu As</i> par catégories !</h2>
    
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article>
                <h3><?php the_title(); ?></h3>
                <div class="content"><?php the_content(); ?></div>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<?php get_footer(); ?>