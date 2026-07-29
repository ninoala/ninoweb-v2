<?php
$hero_480 = get_theme_file_uri(
    '/assets/images/heroimage-480.webp'
);

$hero_768 = get_theme_file_uri(
    '/assets/images/heroimage-768.webp'
);

$hero_960 = get_theme_file_uri(
    '/assets/images/heroimage-960.webp'
);

$hero_1536 = get_theme_file_uri(
    '/assets/images/heroimage-1536.webp'
);

$hero_srcset = sprintf(
    '%1$s 480w, %2$s 768w, %3$s 960w, %4$s 1536w',
    $hero_480,
    $hero_768,
    $hero_960,
    $hero_1536
);
?>

<section
    class="hero"
    aria-labelledby="hero-heading"
>
    <div class="container hero-inner">

        <div class="hero-content">
            <p class="eyebrow">
                <?php
                echo esc_html(
                    ninoweb_text('hero_eyebrow')
                );
                ?>
            </p>

            <h1 id="hero-heading">
                <?php
                echo esc_html(
                    ninoweb_text('hero_heading')
                );
                ?>

                <span class="hero-highlight">
                    <?php
                    echo esc_html(
                        ninoweb_text('hero_heading_highlight')
                    );
                    ?>
                </span>
            </h1>

            <p class="hero-text">
                <?php
                echo esc_html(
                    ninoweb_text('hero_description')
                );
                ?>
            </p>

            <div class="hero-actions">
                <a
                    class="btn btn-primary"
                    href="#contact"
                >
                    <?php
                    echo esc_html(
                        ninoweb_text('hero_primary_cta')
                    );
                    ?>

                    <?php echo ninoweb_icon( 'arrow-right', 'solid', '' ); ?>
                </a>

                <a
                    class="btn btn-secondary"
                    href="#projects"
                >
                    <?php
                    echo esc_html(
                        ninoweb_text('hero_secondary_cta')
                    );
                    ?>
                </a>
            </div>
        </div>

        <div class="hero-image">
            <img
                src="<?php echo esc_url($hero_1536); ?>"
                srcset="<?php echo esc_attr($hero_srcset); ?>"
                sizes="(max-width: 767px) 92vw, 75vw"
                width="1536"
                height="1024"
                alt="<?php echo esc_attr(
                    ninoweb_text('hero_image_alt')
                ); ?>"
                loading="eager"
                fetchpriority="high"
                decoding="async"
            >
        </div>

    </div>

    <ul class="hero-services">
        <li>
            <?php echo ninoweb_icon( 'bezier-curve', 'solid', '' ); ?>

            <span>
                <?php
                echo esc_html(
                    ninoweb_text('hero_feature_custom')
                );
                ?>
            </span>
        </li>

        <li>
            <?php echo ninoweb_icon( 'mobile-screen-button', 'solid', '' ); ?>

            <span>
                <?php
                echo esc_html(
                    ninoweb_text('hero_feature_mobile')
                );
                ?>
            </span>
        </li>

        <li>
            <?php echo ninoweb_icon( 'magnifying-glass', 'solid', '' ); ?>

            <span>
                <?php
                echo esc_html(
                    ninoweb_text('hero_feature_seo')
                );
                ?>
            </span>
        </li>

        <li>
            <?php echo ninoweb_icon( 'screwdriver-wrench', 'solid', '' ); ?>

            <span>
                <?php
                echo esc_html(
                    ninoweb_text('hero_feature_support')
                );
                ?>
            </span>
        </li>
    </ul>
</section>