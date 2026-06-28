<!doctype html>

<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        rel="preconnect"
        href="https://fonts.gstatic.com"
        crossorigin
    >
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet"
    >

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="skip-link" href="#main-content">
    Skip to content
</a>

<header class="site-header">
    <div class="container header-inner">

        <a
            class="site-logo"
            href="<?php echo esc_url(home_url('/')); ?>"
            aria-label="NinoWeb home"
        >
            Nino<span>Web</span>
        </a>

        <button
            class="menu-toggle"
            type="button"
            aria-expanded="false"
            aria-controls="site-navigation"
            aria-label="Open navigation"
        >
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </button>

        <nav
            id="site-navigation"
            class="site-nav"
            aria-label="Primary navigation"
        >
            <a href="<?php echo esc_url(home_url('/#services')); ?>">
                Services
            </a>

            <a href="<?php echo esc_url(home_url('/#projects')); ?>">
                Projects
            </a>

            <a href="<?php echo esc_url(home_url('/#about')); ?>">
                About
            </a>

            <a
                class="nav-cta"
                href="<?php echo esc_url(home_url('/#contact')); ?>"
            >
                Contact
            </a>
        </nav>

    </div>
</header>