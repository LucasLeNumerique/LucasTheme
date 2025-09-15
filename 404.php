<?php get_header(); ?>

<main id="main" class="site-main">
    <section class="error-404 not-found">
        <h1><?php _e('Oups ! Cette page est introuvable.', 'lucastheme'); ?></h1>
        <p><?php _e('Il semble que rien n’a été trouvé à cette adresse. Essayez une recherche ou revenez à l’accueil.', 'lucastheme'); ?></p>

        <?php get_search_form(); ?>

        <p>
            <a href="<?php echo esc_url(home_url('/')); ?>" class="btn">
                <?php _e('Retour à l’accueil', 'lucastheme'); ?>
            </a>
        </p>
    </section>
</main>

<?php get_footer(); ?>