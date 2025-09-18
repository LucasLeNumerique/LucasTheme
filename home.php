<?php get_header(); ?>

<main id="site-content">
    <h1><?php _e( 'Derniers articles', 'lucastheme' ); ?></h1>

    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'template-parts/content', 'excerpt' ); ?>
        <?php endwhile; ?>

        <?php the_posts_pagination(); ?>

    <?php else : ?>
        <?php get_template_part( 'template-parts/content', 'none' ); ?>
    <?php endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>