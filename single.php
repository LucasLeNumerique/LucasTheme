<?php
get_header();
?>

<main id="site-content">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
    ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1><?php the_title(); ?></h1>
                <div class="entry-meta">
                    <span><?php the_time('j F Y'); ?> | <?php the_author(); ?></span>
                </div>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
                <div class="entry-footer">
                    <?php the_category(', '); ?> | <?php the_tags(); ?>
                </div>
            </article>

            <?php
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            ?>

    <?php
        endwhile;
    else :
        echo '<p>' . __('Aucun contenu trouvé.', 'lucastheme') . '</p>';
    endif;
    ?>
</main>

<?php
get_sidebar();
get_footer();