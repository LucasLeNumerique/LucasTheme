<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="meta">Publié le <?php the_time(get_option('date_format')); ?> par <?php the_author(); ?></p>
    </header>
    <div class="entry-content">
        <?php if (is_singular()) : ?>
            <?php the_content(); ?>
        <?php else : ?>
            <?php the_excerpt(); ?>
        <?php endif; ?>
    </div>
</article>