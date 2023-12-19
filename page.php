<?php get_header();
      ?>

<div class="page-content container mt-4 ">
    <div class="row">
        <div class="col-lg-8">
            <h1><?php the_title(); ?></h1>
            <?php the_post_thumbnail('medium' )?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile;
            else : ?>
                <p><?php esc_html_e('Sorry, no content found', 'textdomain'); ?></p>
            <?php endif; ?>
        </div>

        <div class="col-lg-4">
            <!-- Add any additional sidebar content or widgets here -->
        </div>
    </div>
</div>

<?php get_footer(); ?>
