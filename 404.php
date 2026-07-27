<?php

if (! defined('ABSPATH')) {
    exit;
}

$home_url = function_exists('pll_home_url')
    ? pll_home_url()
    : home_url('/');

get_header();

?>

<main
    id="primary"
    class="site-main error-404 section"
>
    <div class="container error-404__inner">

        <p class="section-eyebrow">
            404
        </p>

        <h1>
            <?php
            echo esc_html(
                ninoweb_text('404_heading')
            );
            ?>
        </h1>

        <p class="error-404__description">
            <?php
            echo esc_html(
                ninoweb_text('404_description')
            );
            ?>
        </p>

        <a
            class="btn btn-primary"
            href="<?php echo esc_url($home_url); ?>"
        >
            <?php
            echo esc_html(
                ninoweb_text('404_button')
            );
            ?>

            <i
                class="fa-solid fa-arrow-right"
                aria-hidden="true"
            ></i>
        </a>

    </div>
</main>

<?php get_footer(); ?>