<?php get_header(); ?>

<main id="site-content">
    <section class="hero">
        <h1><?php bloginfo( 'name' ); ?></h1>
        <p><?php bloginfo( 'description' ); ?></p>
    </section>

    <section class="latest-posts">
        <h2><?php _e( 'Derniers articles', 'lucastheme' ); ?></h2>
        <div class="blog-post-excerpt-grid">
            <?php
            $latest = new WP_Query( array( 'posts_per_page' => 3 ) );
            if ( $latest->have_posts() ) :
                while ( $latest->have_posts() ) : $latest->the_post();
                    get_template_part( 'template-parts/content', 'excerpt' );
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </section>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>