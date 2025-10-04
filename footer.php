<footer id="colophon" class="footer">
    <div class="first-row">
        <div class="footer-widgets">
            <?php if (is_active_sidebar('footer-1')) : ?>
                <?php dynamic_sidebar('footer-1'); ?>
            <?php endif; ?>
        </div>
    
        <nav class="footer-navigation" aria-label="<?php esc_attr_e('Menu du pied de page', 'lucastheme'); ?>">
            <p>Liens utiles</p>
            <?php
            wp_nav_menu([
                'theme_location' => 'footer',
                'menu_class'     => 'footer-menu',
                'container'      => false,
            ]);
            ?>
        </nav>
    </div>

    <div class="site-info">
        <p>Lucas Schrever &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. <?php _e('Tous droits réservés.', 'lucastheme'); ?></p>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>