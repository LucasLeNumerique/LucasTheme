<?php
get_header();
?>

<main id="site-content">
    <?php
    if ( is_category() ) {
        echo '<h1>' . sprintf( __( 'Catégorie : %s', 'lucastheme' ), single_cat_title( '', false ) ) . '</h1>';
    } elseif ( is_tag() ) {
        echo '<h1>' . sprintf( __( 'Tag : %s', 'lucastheme' ), single_tag_title( '', false ) ) . '</h1>';
    } elseif ( is_author() ) {
        echo '<h1>' . sprintf( __( 'Auteur : %s', 'lucastheme' ), get_the_author() ) . '</h1>';
    } elseif ( is_date() ) {
        echo '<h1>' . __( 'Archives par date', 'lucastheme' ) . '</h1>';
    } else {
        echo '<h1>' . __( 'Archives', 'lucastheme' ) . '</h1>';
    }
    ?>

    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="entry-meta">
                    <span><?php the_time('j F Y'); ?> | <?php the_author(); ?></span>
                </div>
                <div class="entry-summary">
                    <?php the_excerpt(); ?>
                </div>
                <a href="<?php the_permalink(); ?>"><?php _e('Lire la suite', 'lucastheme'); ?></a>
            </article>
        <?php endwhile; ?>

        <div class="pagination">
            <?php
            echo paginate_links();
            ?>
        </div>

    <?php else : ?>
        <p><?php _e('Aucun contenu trouvé.', 'lucastheme'); ?></p>
    <?php endif; ?>
</main>

<?php
get_sidebar();
get_footer();