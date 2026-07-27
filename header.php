<?php

$ninoweb_home_url = function_exists('pll_home_url')
    ? pll_home_url()
    : home_url('/');

$ninoweb_home_url = trailingslashit($ninoweb_home_url);

$ninoweb_languages = [];

if (function_exists('pll_the_languages')) {
    $ninoweb_languages = pll_the_languages([
        'raw'                    => 1,
        'hide_current'           => 0,
        'hide_if_empty'          => 0,
        'hide_if_no_translation' => 0,
    ]);
}

?>

<!doctype html>

<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link" href="#main-content">
    <?php echo esc_html(ninoweb_text('skip_to_content')); ?>
</a>

<header class="site-header">
    <div class="container header-inner">

        <a
            class="site-logo"
            href="<?php echo esc_url($ninoweb_home_url); ?>"
            aria-label="<?php
                echo esc_attr(
                    ninoweb_text('logo_home_label')
                );
            ?>"
        >
            Nino<span>Web</span>
        </a>

        <button
            class="menu-toggle"
            type="button"
            aria-expanded="false"
            aria-controls="site-navigation"
            aria-label="<?php
                echo esc_attr(
                    ninoweb_text('toggle_navigation')
                );
            ?>"
        >
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </button>

        <nav
            id="site-navigation"
            class="site-nav"
            aria-label="<?php
                echo esc_attr(
                    ninoweb_text('primary_navigation')
                );
            ?>"
        >
            <a
                href="<?php
                    echo esc_url(
                        $ninoweb_home_url . '#services'
                    );
                ?>"
            >
                <?php echo esc_html(ninoweb_text('services')); ?>
            </a>

            <a
                href="<?php
                    echo esc_url(
                        $ninoweb_home_url . '#projects'
                    );
                ?>"
            >
                <?php echo esc_html(ninoweb_text('projects')); ?>
            </a>

            <a
                href="<?php
                    echo esc_url(
                        $ninoweb_home_url . '#about'
                    );
                ?>"
            >
                <?php echo esc_html(ninoweb_text('about')); ?>
            </a>

            <a
                class="nav-cta"
                href="<?php
                    echo esc_url(
                        $ninoweb_home_url . '#contact'
                    );
                ?>"
            >
                <?php echo esc_html(ninoweb_text('contact')); ?>
            </a>

            <?php if (! empty($ninoweb_languages)) : ?>
                <div class="language-switcher">
                    <span class="screen-reader-text">
                        <?php
                        echo esc_html(
                            ninoweb_text('language_selection')
                        );
                        ?>
                    </span>

                    <ul class="language-switcher-list">
                        <?php foreach ($ninoweb_languages as $language) : ?>
                            <?php

                            $language_slug = isset($language['slug'])
                                ? $language['slug']
                                : '';

                            $language_name = isset($language['name'])
                                ? $language['name']
                                : strtoupper($language_slug);

                            $language_url = isset($language['url'])
                                ? $language['url']
                                : '';

                            /*
                             * If this particular page does not have a
                             * translation, send visitors to that language's
                             * homepage instead.
                             */
                            if (
                                ! empty($language['no_translation']) &&
                                function_exists('pll_home_url')
                            ) {
                                $language_url = pll_home_url(
                                    $language_slug
                                );
                            }

                            $is_current = ! empty(
                                $language['current_lang']
                            );

                            $visible_label = 'ja' === $language_slug
                                ? '日本語'
                                : strtoupper($language_slug);

                            ?>

                            <li
                                class="language-switcher-item<?php
                                    echo $is_current
                                        ? ' is-current'
                                        : '';
                                ?>"
                            >
                                <a
                                    class="language-switcher-link"
                                    href="<?php
                                        echo esc_url($language_url);
                                    ?>"
                                    lang="<?php
                                        echo esc_attr($language_slug);
                                    ?>"
                                    hreflang="<?php
                                        echo esc_attr($language_slug);
                                    ?>"
                                    aria-label="<?php
                                        echo esc_attr($language_name);
                                    ?>"
                                    <?php if ($is_current) : ?>
                                        aria-current="page"
                                    <?php endif; ?>
                                >
                                    <?php
                                    echo esc_html($visible_label);
                                    ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>
        </nav>

    </div>
</header>