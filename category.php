<?php get_header(); ?>

<div class="container my-5">
    <h1 class="text-center"><?php single_cat_title(); ?></h1>

    <div class="row">
        <?php
        while (have_posts()) {
            the_post();
        ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php echo get_the_post_thumbnail_url(null, array(200, 150)); ?>" class="card-img-top" alt="Card Image">
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title"><?php the_title(); ?></h5>
                        <p class="card-text"><?php echo custom_excerpt(get_the_excerpt(), 15); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<?php get_footer(); ?>
