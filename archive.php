<?php
/**
 * Template pour les archives (catégories, tags, auteurs, dates).
 *
 * @package lucastheme
 */

get_header();
?>

<main id="site-content">
    <header class="page-header">
        <h1 class="page-title">
            <?php the_archive_title(); ?>
        </h1>
        <?php the_archive_description( '<div class="archive-description">', '</div>' ); ?>
    </header>

    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php get_template_part( 'template-parts/content', 'excerpt' ); ?>
        <?php endwhile; ?>

        <?php the_posts_pagination(); ?>

    <?php else : ?>
        <?php get_template_part( 'template-parts/content', 'none' ); ?>
    <?php endif; ?>
</main>

<?php
get_sidebar();
get_footer();