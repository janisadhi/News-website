<?php get_header(); ?>

<div class="container my-5">
    <?php
    while (have_posts()) :
        the_post();
    ?>
        <article <?php post_class('card mb-4'); ?>>
            <div class="card-body">
                <h1 class="card-title"><?php the_title(); ?></h1>
                <div class="post-meta">
                    <span class="text-muted small"><?php the_author(); ?> | <?php the_date(); ?></span>
                </div>
                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('large'); ?>" class="card-img-top my-3" alt="<?php the_title_attribute(); ?>">
                <?php endif; ?>
                <div class="post-content mt-3">
                    <?php the_content(); ?>
                </div>
            </div>
        </article>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>
