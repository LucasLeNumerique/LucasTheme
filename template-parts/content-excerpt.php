<article class="article-preview" id="post-<?php the_ID(); ?>" <?php post_class('excerpt'); ?>>
    <div class="article-header">
        <a class="anchor-title" href="<?php the_permalink(); ?>">
            <h3 class="entry-title"><?php the_title(); ?></h3>
        </a>    
        <div class="entry-meta">
            <span><?php the_time('j F Y'); ?> | <?php the_author(); ?></span>
        </div>
    </div>

    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div>

    <a class="anchor-button" href="<?php the_permalink(); ?>">
        <button class="btn btn-primary">
            <?php _e('Lire la suite', 'lucastheme'); ?>
        </button>
    </a>
</article>