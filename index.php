<?php
/**
 * Template fallback universel du thème.
 *
 * @package lucastheme
 */

get_header();
?>

<main id="site-content">

    <?php if ( have_posts() ) : ?>

        <?php while ( have_posts() ) : the_post(); ?>

            <?php
            // Si c’est un article ou une page dans une liste, utiliser l’excerpt
            if ( ! is_singular() ) :
                get_template_part( 'template-parts/content', 'excerpt' );
            else :
                get_template_part( 'template-parts/content', get_post_type() );
            endif;
            ?>

        <?php endwhile; ?>

        <?php
        // Pagination si plus d’un article
        if ( ! is_singular() ) :
            the_posts_pagination( array(
                'prev_text' => __('« Précédent', 'lucastheme'),
                'next_text' => __('Suivant »', 'lucastheme'),
            ) );
        endif;
        ?>

    <?php else : ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>

</main>

<?php
get_sidebar();
get_footer();