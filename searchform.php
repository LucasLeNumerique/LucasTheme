<?php
/**
 * Formulaire de recherche personnalisé pour lucastheme
 *
 * @package lucastheme
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <h2>Vous cherchez une page précise ?</h2>
    <div class="search-frame">
        <label>
            <span class="screen-reader-text"><?php _e('Rechercher :', 'lucastheme'); ?></span>
            <input 
                type="search" 
                class="search-field" 
                placeholder="<?php esc_attr_e('Rechercher une page...', 'lucastheme'); ?>" 
                value="<?php echo get_search_query(); ?>" 
                name="s"
            >
        </label>
        <button type="submit" class="search-submit"><?php _e('OK', 'lucastheme'); ?></button>
    </div>
</form>