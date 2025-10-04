<?php get_header(); ?>

<main id="site-content">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            
            <?php get_template_part( 'template-parts/content', get_post_type() ); ?>
            
            <nav class="post-navigation">
                <div class="nav-previous">
                    <?php previous_post_link( '%link', '← %title' ); ?>
                </div>
                <div class="nav-next">
                    <?php next_post_link( '%link', '%title →' ); ?>
                </div>
            </nav>

            <?php
            // Si tu veux activer les commentaires :
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
            ?>

        <?php endwhile; ?>
    <?php else : ?>
        <?php get_template_part( 'template-parts/content', 'none' ); ?>
    <?php endif; ?>
</main>

<?php
get_sidebar();
get_footer();