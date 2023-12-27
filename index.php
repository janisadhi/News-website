<?php get_header(); ?>

<div class="zigzag-container">
<div class="zigzag-top-card">
    <?php
    $args = array(
        'post_type'      => 'post',
        'posts_per_page' => 1,
        'category_name'  => 'breaking-news',
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
    ?>
            <div class="thumbnail">
                <?php if (has_post_thumbnail()) : ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                        <?php the_post_thumbnail('top-image'); ?>
                    </a>
                <?php endif; ?>
            </div>
            <h2 class="text-shadow"><?php the_title(); ?></h2>
    <?php
        endwhile;
        wp_reset_postdata();
    else :
        echo 'No breaking news posts found.';
    endif;
    ?>
</div>


    <div class="zigzag-content container-xl">
        <div class="row">
            <div class="col-md-8">
                <h3>Latest News</h3>
                <div class="row">
                    <?php
                    while (have_posts()) {
                        the_post();
                    ?>
                        <div class="col-md-6 mb-4">
                            <div class="first_class card ">
                                <img src="<?php echo get_the_post_thumbnail_url(null, array(300, 200)); ?>" class="card-img-top" alt="Card Image">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h5>
                                    <p class="card-text"><?php  echo custom_excerpt(get_the_excerpt(), 15); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read More</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <?php echo wp_pagenavi(); ?>
            </div>
            <div class="col-md-4">
                <h3>Quick Updates</h3>
                <?php
                $args = array(
                    'post_type'     => 'post',
                    'category_name' => 'quick-update',
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) :
                    while ($query->have_posts()) : $query->the_post();
                ?>
                        <div class="card bg-dark text-white mb-3">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-img" alt="Update Image">
                            <div class="card-img-overlay">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <p class="card-text"><?php the_excerpt(); ?></p>
                            </div>
                        </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    echo 'No quick update posts found.';
                endif;
                ?>

            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
