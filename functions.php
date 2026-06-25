<?php

function ninoweb_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    register_nav_menus([
        'primary' => __('Primary Menu', 'ninoweb'),
    ]);
}

add_action('after_setup_theme', 'ninoweb_setup');


function ninoweb_enqueue_assets() {
    wp_enqueue_style(
        'ninoweb-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'ninoweb-style',
        get_stylesheet_uri(),
        ['ninoweb-fonts'],
        filemtime(get_theme_file_path('/style.css'))
    );

    wp_enqueue_script(
        'font-awesome',
        'https://kit.fontawesome.com/9fa7db7f27.js',
        [],
        null,
        false
    );

    wp_enqueue_script(
        'ninoweb-navigation',
        get_theme_file_uri('/assets/js/navigation.js'),
        [],
        filemtime(get_theme_file_path('/assets/js/navigation.js')),
        true
    );
}

add_action('wp_enqueue_scripts', 'ninoweb_enqueue_assets');

function ninoweb_handle_contact_form() {
    if (
        ! isset($_POST['ninoweb_contact_nonce']) ||
        ! wp_verify_nonce(
            sanitize_text_field(
                wp_unslash($_POST['ninoweb_contact_nonce'])
            ),
            'ninoweb_contact_form'
        )
    ) {
        wp_die('The form could not be verified.');
    }

    // Honeypot spam protection.
    if (! empty($_POST['website'])) {
        wp_safe_redirect(home_url('/'));
        exit;
    }

    $name = isset($_POST['name'])
        ? sanitize_text_field(wp_unslash($_POST['name']))
        : '';

    $email = isset($_POST['email'])
        ? sanitize_email(wp_unslash($_POST['email']))
        : '';

    $project_type = isset($_POST['project_type'])
        ? sanitize_text_field(wp_unslash($_POST['project_type']))
        : '';

    $message = isset($_POST['message'])
        ? sanitize_textarea_field(wp_unslash($_POST['message']))
        : '';

    if ('' === $name || ! is_email($email) || '' === $message) {
        wp_safe_redirect(
            add_query_arg('contact', 'error', home_url('/')) . '#contact'
        );
        exit;
    }

    $recipient = get_option('admin_email');

    $subject = sprintf(
        'New NinoWeb inquiry from %s',
        $name
    );

    $email_body  = "Name: {$name}\n";
    $email_body .= "Email: {$email}\n";
    $email_body .= "Project type: {$project_type}\n\n";
    $email_body .= "Project details:\n{$message}\n";

    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        sprintf('Reply-To: %s <%s>', $name, $email),
    ];

    $sent = wp_mail(
        $recipient,
        $subject,
        $email_body,
        $headers
    );

    $status = $sent ? 'success' : 'error';

    wp_safe_redirect(
        add_query_arg('contact', $status, home_url('/')) . '#contact'
    );

    exit;
}

add_action(
    'admin_post_nopriv_ninoweb_contact',
    'ninoweb_handle_contact_form'
);

add_action(
    'admin_post_ninoweb_contact',
    'ninoweb_handle_contact_form'
);