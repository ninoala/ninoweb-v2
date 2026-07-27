<section id="about" class="about section">
    <div class="container">

        <div class="about-heading">
            <p class="section-eyebrow">
                <?php
                echo esc_html(
                    ninoweb_text('about_eyebrow')
                );
                ?>
            </p>

            <h2>
                <?php
                echo esc_html(
                    ninoweb_text('about_heading')
                );
                ?>
            </h2>

            <p class="about-intro">
                <?php
                echo esc_html(
                    ninoweb_text('about_intro')
                );
                ?>
            </p>
        </div>

        <div class="about-grid">

            <div class="about-panel">
                <div class="about-brand">
                    <h3>Nino<span>Web</span></h3>

                    <p>
                        <?php
                        echo esc_html(
                            ninoweb_text('about_brand_description')
                        );
                        ?>
                    </p>
                </div>

                <ul class="about-services">
                    <li>
                        <i
                            class="fa-solid fa-comments"
                            aria-hidden="true"
                        ></i>

                        <span>
                            <?php
                            echo esc_html(
                                ninoweb_text(
                                    'about_service_communication'
                                )
                            );
                            ?>
                        </span>
                    </li>

                    <li>
                        <i
                            class="fa-solid fa-list-check"
                            aria-hidden="true"
                        ></i>

                        <span>
                            <?php
                            echo esc_html(
                                ninoweb_text(
                                    'about_service_process'
                                )
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
                                ninoweb_text(
                                    'about_service_mobile'
                                )
                            );
                            ?>
                        </span>
                    </li>

                    <li>
                        <i
                            class="fa-solid fa-headset"
                            aria-hidden="true"
                        ></i>

                        <span>
                            <?php
                            echo esc_html(
                                ninoweb_text(
                                    'about_service_support'
                                )
                            );
                            ?>
                        </span>
                    </li>
                </ul>

                <div class="about-location">
                    <div class="about-location-icon">
                        <i
                            class="fa-solid fa-location-dot"
                            aria-hidden="true"
                        ></i>
                    </div>

                    <div>
                        <strong>
                            <?php
                            echo esc_html(
                                ninoweb_text('about_location')
                            );
                            ?>
                        </strong>

                        <p>
                            <?php
                            echo esc_html(
                                ninoweb_text(
                                    'about_location_description'
                                )
                            );
                            ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="about-content">
                <p class="about-kicker">
                    <?php
                    echo esc_html(
                        ninoweb_text('about_kicker')
                    );
                    ?>
                </p>

                <div class="about-person">
                    <div class="about-photo">
                        <img
                            src="<?php
                                echo esc_url(
                                    get_template_directory_uri() .
                                    '/assets/images/yegor-headshot.png'
                                );
                            ?>"
                            alt="<?php
                                echo esc_attr(
                                    ninoweb_text('about_photo_alt')
                                );
                            ?>"
                            width="180"
                            height="180"
                            loading="lazy"
                            decoding="async"
                        >
                    </div>

                    <div class="about-person-heading">
                        <h3>
                            <?php
                            echo esc_html(
                                ninoweb_text(
                                    'about_person_heading'
                                )
                            );
                            ?>
                        </h3>

                        <p>
                            <?php
                            echo esc_html(
                                ninoweb_text(
                                    'about_person_description'
                                )
                            );
                            ?>
                        </p>
                    </div>
                </div>

                <div class="about-line"></div>

                <p>
                    <?php
                    echo esc_html(
                        ninoweb_text('about_paragraph_one')
                    );
                    ?>
                </p>

                <p>
                    <?php
                    echo esc_html(
                        ninoweb_text('about_paragraph_two')
                    );
                    ?>
                </p>

                <ul class="about-points">
                    <li>
                        <i
                            class="fa-solid fa-check"
                            aria-hidden="true"
                        ></i>

                        <span>
                            <?php
                            echo esc_html(
                                ninoweb_text('about_point_one')
                            );
                            ?>
                        </span>
                    </li>

                    <li>
                        <i
                            class="fa-solid fa-check"
                            aria-hidden="true"
                        ></i>

                        <span>
                            <?php
                            echo esc_html(
                                ninoweb_text('about_point_two')
                            );
                            ?>
                        </span>
                    </li>

                    <li>
                        <i
                            class="fa-solid fa-check"
                            aria-hidden="true"
                        ></i>

                        <span>
                            <?php
                            echo esc_html(
                                ninoweb_text('about_point_three')
                            );
                            ?>
                        </span>
                    </li>
                </ul>

                <a class="about-link" href="#contact">
                    <?php
                    echo esc_html(
                        ninoweb_text('about_cta')
                    );
                    ?>

                    <i
                        class="fa-solid fa-arrow-right"
                        aria-hidden="true"
                    ></i>
                </a>
            </div>

        </div>
    </div>
</section>