<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <div class="title">
        <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
        <p><?php bloginfo('description'); ?></p>
    </div>

    <button class="menu-toggle" aria-expanded="false">☰</button>

    <nav>
        <?php wp_nav_menu([
            'theme_location' => 'primary',
            'menu_class' => 'menu',
        ]); ?>
    </nav>
</header>