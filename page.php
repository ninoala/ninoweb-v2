<?php
get_header();
?>

<main id="primary" class="site-main page-main">

    <?php
    while (have_posts()) :
        the_post();
        ?>

        <section class="page-hero section">
            <div class="container">
                <p class="section-eyebrow">
                    <?php echo esc_html(get_bloginfo('name')); ?>
                </p>

                <h1 class="page-title">
                    <?php the_title(); ?>
                </h1>
            </div>
        </section>

        <section class="page-content section">
            <div class="container container-narrow">
                <?php the_content(); ?>
            </div>
        </section>

    <?php endwhile; ?>

</main>

<?php
get_footer();