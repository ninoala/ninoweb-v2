<?php

$ninoweb_footer_home_url = function_exists('pll_home_url')
    ? pll_home_url()
    : home_url('/');

$ninoweb_footer_home_url = trailingslashit(
    $ninoweb_footer_home_url
);

?>

<footer class="site-footer">
    <div class="container">

        <div class="footer-main">

            <div class="footer-brand">
                <a
                    class="footer-logo"
                    href="<?php
                        echo esc_url(
                            $ninoweb_footer_home_url
                        );
                    ?>"
                    aria-label="<?php
                        echo esc_attr(
                            ninoweb_text('logo_home_label')
                        );
                    ?>"
                >
                    Nino<span>Web</span>
                </a>

                <p>
                    <?php
                    echo esc_html(
                        ninoweb_text('footer_description')
                    );
                    ?>
                </p>

                <p class="footer-location">
                    <?php echo ninoweb_icon( 'location-dot', 'solid', '' ); ?>

                    <?php
                    echo esc_html(
                        ninoweb_text('about_location')
                    );
                    ?>
                </p>
            </div>

            <nav
                class="footer-column"
                aria-label="<?php
                    echo esc_attr(
                        ninoweb_text(
                            'footer_navigation_label'
                        )
                    );
                ?>"
            >
                <h4>
                    <?php
                    echo esc_html(
                        ninoweb_text(
                            'footer_explore_heading'
                        )
                    );
                    ?>
                </h4>

                <ul>
                    <li>
                        <a
                            href="<?php
                                echo esc_url(
                                    $ninoweb_footer_home_url .
                                    '#services'
                                );
                            ?>"
                        >
                            <?php
                            echo esc_html(
                                ninoweb_text('services')
                            );
                            ?>
                        </a>
                    </li>

                    <li>
                        <a
                            href="<?php
                                echo esc_url(
                                    $ninoweb_footer_home_url .
                                    '#projects'
                                );
                            ?>"
                        >
                            <?php
                            echo esc_html(
                                ninoweb_text('projects')
                            );
                            ?>
                        </a>
                    </li>

                    <li>
                        <a
                            href="<?php
                                echo esc_url(
                                    $ninoweb_footer_home_url .
                                    '#about'
                                );
                            ?>"
                        >
                            <?php
                            echo esc_html(
                                ninoweb_text('about_eyebrow')
                            );
                            ?>
                        </a>
                    </li>

                    <li>
                        <a
                            href="<?php
                                echo esc_url(
                                    $ninoweb_footer_home_url .
                                    '#contact'
                                );
                            ?>"
                        >
                            <?php
                            echo esc_html(
                                ninoweb_text('contact_eyebrow')
                            );
                            ?>
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="footer-column">
                <h4>
                    <?php
                    echo esc_html(
                        ninoweb_text('services')
                    );
                    ?>
                </h4>

                <ul>
                    <li>
                        <a
                            href="<?php
                                echo esc_url(
                                    $ninoweb_footer_home_url .
                                    '#services'
                                );
                            ?>"
                        >
                            <?php
                            echo esc_html(
                                ninoweb_text(
                                    'footer_service_websites'
                                )
                            );
                            ?>
                        </a>
                    </li>

                    <li>
                        <a
                            href="<?php
                                echo esc_url(
                                    $ninoweb_footer_home_url .
                                    '#services'
                                );
                            ?>"
                        >
                            <?php
                            echo esc_html(
                                ninoweb_text(
                                    'footer_service_redesigns'
                                )
                            );
                            ?>
                        </a>
                    </li>

                    <li>
                        <a
                            href="<?php
                                echo esc_url(
                                    $ninoweb_footer_home_url .
                                    '#services'
                                );
                            ?>"
                        >
                            <?php
                            echo esc_html(
                                ninoweb_text(
                                    'service_support_title'
                                )
                            );
                            ?>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="footer-column footer-contact">
                <h4>
                    <?php
                    echo esc_html(
                        ninoweb_text(
                            'footer_contact_heading'
                        )
                    );
                    ?>
                </h4>

                <p>
                    <?php
                    echo esc_html(
                        ninoweb_text('footer_contact_text')
                    );
                    ?>
                </p>

                <a
                    class="footer-email"
                    href="mailto:hello@ninoweb.net"
                >
                    hello@ninoweb.net

                    <?php echo ninoweb_icon( 'arrow-up-right-from-square', 'solid', '' ); ?>
                </a>
            </div>

        </div>

        <div class="footer-bottom">
            <p>
                &copy;
                <?php echo esc_html(wp_date('Y')); ?>
                NinoWeb.
                <?php
                echo esc_html(
                    ninoweb_text('footer_rights')
                );
                ?>
            </p>

            <?php if (get_privacy_policy_url()) : ?>
                <a
                    href="<?php
                        echo esc_url(
                            get_privacy_policy_url()
                        );
                    ?>"
                >
                    <?php
                    echo esc_html(
                        ninoweb_text(
                            'footer_privacy_policy'
                        )
                    );
                    ?>
                </a>
            <?php endif; ?>
        </div>

    </div>
</footer>

<?php
get_template_part(
    'template-parts/global/contact-dock'
);
?>

<?php
get_template_part(
    'template-parts/global/language-popup'
);
?>

<?php wp_footer(); ?>

</body>
</html>