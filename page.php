<?php
get_header();
?>

<main id="site-content">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            // Utilise le template-part content-page.php
            get_template_part( 'template-parts/content', 'page' );
    ?>
    <?php
        endwhile;
    else :
        echo '<p>' . __('Aucune page trouvée.', 'lucastheme') . '</p>';
    endif;
    ?>
</main>

<?php
get_sidebar();
get_footer();
