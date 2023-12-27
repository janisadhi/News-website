<?php
/*
Template Name: Custom Contact
*/
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main container">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header text-center">
            </header>

            <div class="entry-content">
                <div class="about-us mb-5">
                    <h2 class="text-center mb-4">About Us</h2>
                    <p class="lead text-center">                <?php the_content(); ?>
</p>
                </div>

                <div class="contact-form p-4 bg-light rounded">
                    <h2 class="text-center mb-4">Contact Us</h2>
                    <!-- <form>
                        
                    </form> -->
                    <?php echo do_shortcode('[contact-form-7 id="b70b489" title="Contact form 1"]')?>
                </div>

                <div class="map-section mt-5">
                    <h2 class="text-center mb-4">Our Location</h2>
                    <!-- Replace the iframe code with your actual map embed code -->
                    <iframe
                        width="100%"
                        height="400"
                        frameborder="0" style="border: 0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.880344741475!2d-86.24088468559545!3d39.76838807942955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x886b50f8e22c6f09%3A0x50fa28a24961ca8!2sMonument%20Circle!5e0!3m2!1sen!2sus!4v1587713496166!5m2!1sen!2sus"
                        allowfullscreen=""
                    ></iframe>
                </div>
            </div>
        </article>
    </main>
</div>

<?php
get_footer();
?>
