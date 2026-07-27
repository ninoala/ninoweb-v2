<?php

if (! defined('ABSPATH')) {
    exit;
}

get_header();

?>

<main id="primary" class="site-main section">
    <div class="container">

        <?php if (have_posts()) : ?>

            <div class="posts-list">

                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>

                    <article
                        id="post-<?php the_ID(); ?>"
                        <?php post_class('post-card'); ?>
                    >
                        <h1 class="post-card__title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h1>

                        <div class="post-card__excerpt">
                            <?php the_excerpt(); ?>
                        </div>
                    </article>

                <?php endwhile; ?>

            </div>

            <?php the_posts_pagination(); ?>

        <?php else : ?>

            <section class="empty-content">
                <h1>
                    <?php esc_html_e('Nothing found', 'ninoweb'); ?>
                </h1>

                <p>
                    <?php
                    esc_html_e(
                        'There is currently no content to display.',
                        'ninoweb'
                    );
                    ?>
                </p>
            </section>

        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>