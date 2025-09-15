<?php get_header(); ?>

<main id="site-content">
    <h1><?php printf(__('Résultats de recherche pour : %s', 'lucastheme'), get_search_query()); ?></h1>

    <?php if (have_posts()) : ?>
        <ul class="search-results">
            <?php while (have_posts()) : the_post(); ?>
                <li>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <p><?php the_excerpt(); ?></p>
                </li>
            <?php endwhile; ?>
        </ul>

        <?php the_posts_navigation(); ?>
    <?php else : ?>
        <p><?php _e('Aucun résultat trouvé.', 'lucastheme'); ?></p>
        <?php get_search_form(); ?>
    <?php endif; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>