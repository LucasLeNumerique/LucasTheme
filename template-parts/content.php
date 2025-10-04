<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <div class="entry-meta">
            <span><?php the_time('j F Y'); ?> | <?php the_author(); ?></span>
        </div>
    </header>

    <div class="entry-content">
        <?php the_content(); ?>
    </div>

    <footer class="entry-footer">
        <?php the_category(', '); ?>
        <?php the_tags('<span class="tags">', ', ', '</span>'); ?>
    </footer>
</article>