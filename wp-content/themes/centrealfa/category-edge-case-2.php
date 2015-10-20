<?php get_header(); ?>

<section>
    <h2>Les super articles de <i>C'est Bon Pour Ce Que Tu As</i> qui appartiennent à la catégorie "Edge Case" !</h2>
    
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="<?php the_ID(); ?>">
                <h3><?php the_title(); ?></h3>
                <div class="content"><?php the_content(); ?></div>
            </article>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>
</section>

<section>
    <h2>Les articles de Admin</h2>
    <?php $the_query = new WP_Query(['author_name' => 'admin']); ?>
    <?php if( $the_query->have_posts()) : ?>
        <?php while($the_query->have_posts()) : $the_query->the_post(); ?>
            <article id="<?php the_ID(); ?>">
                <h3><?php the_title(); ?></h3>
                <div class="content"><?php the_content(); ?></div>
            </article>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>
</section>

<?php get_footer(); ?>