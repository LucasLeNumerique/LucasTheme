<section class="no-results not-found">
    <header class="page-header">
        <h2 class="page-title">
            <?php _e( 'Rien trouvé', 'lucastheme' ); ?>
        </h2>
    </header>

    <div class="page-content">
        <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

            <p>
                <?php printf(
                    __( 'Prêt à publier votre premier article ? <a href="%1$s">Commencez ici</a>.', 'lucastheme' ),
                    esc_url( admin_url( 'post-new.php' ) )
                ); ?>
            </p>

        <?php elseif ( is_search() ) : ?>

            <p><?php _e( 'Désolé, aucun résultat ne correspond à votre recherche. Essayez avec d’autres mots-clés.', 'lucastheme' ); ?></p>

        <?php else : ?>

            <p><?php _e( 'Nous n’avons rien trouvé ici. Essayez une recherche.', 'lucastheme' ); ?></p>

        <?php endif; ?>
    </div>
</section>