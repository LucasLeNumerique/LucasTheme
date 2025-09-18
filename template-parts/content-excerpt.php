<article id="post-<?php the_ID(); ?>" <?php post_class('excerpt'); ?>>
    <h2 class="entry-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>

    <div class="entry-meta">
        <span><?php the_time('j F Y'); ?> | <?php the_author(); ?></span>
    </div>

    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div>

    <a class="read-more" href="<?php the_permalink(); ?>">
        <?php _e('Lire la suite', 'lucastheme'); ?>
    </a>
</article>