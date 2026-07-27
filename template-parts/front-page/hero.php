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

                    <i
                        class="fa-solid fa-arrow-right"
                        aria-hidden="true"
                    ></i>
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
                src="<?php
                    echo esc_url(
                        get_template_directory_uri() .
                        '/assets/images/heroimage.png'
                    );
                ?>"
                alt="<?php
                    echo esc_attr(
                        ninoweb_text('hero_image_alt')
                    );
                ?>"
                loading="eager"
                fetchpriority="high"
            >
        </div>

    </div>

    <ul class="hero-services">
        <li>
            <i
                class="fa-solid fa-bezier-curve"
                aria-hidden="true"
            ></i>

            <span>
                <?php
                echo esc_html(
                    ninoweb_text('hero_feature_custom')
                );
                ?>
            </span>
        </li>

        <li>
            <i
                class="fa-solid fa-mobile-screen-button"
                aria-hidden="true"
            ></i>

            <span>
                <?php
                echo esc_html(
                    ninoweb_text('hero_feature_mobile')
                );
                ?>
            </span>
        </li>

        <li>
            <i
                class="fa-solid fa-magnifying-glass"
                aria-hidden="true"
            ></i>

            <span>
                <?php
                echo esc_html(
                    ninoweb_text('hero_feature_seo')
                );
                ?>
            </span>
        </li>

        <li>
            <i
                class="fa-solid fa-screwdriver-wrench"
                aria-hidden="true"
            ></i>

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