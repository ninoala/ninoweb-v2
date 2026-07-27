<?php

if (! defined('ABSPATH')) {
    exit;
}

/* --------------------
   THEME SETUP
-------------------- */

function ninoweb_setup() {
    load_theme_textdomain(
        'ninoweb',
        get_template_directory() . '/languages'
    );

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo');

    register_nav_menus([
        'primary' => __('Primary Menu', 'ninoweb'),
    ]);
}

add_action('after_setup_theme', 'ninoweb_setup');


/* --------------------
   ASSET VERSION
-------------------- */

function ninoweb_asset_version($relative_path) {
    $file_path = get_theme_file_path($relative_path);

    if (file_exists($file_path)) {
        return (string) filemtime($file_path);
    }

    return wp_get_theme()->get('Version');
}


/* --------------------
   STYLES AND SCRIPTS
-------------------- */

function ninoweb_enqueue_assets() {
    wp_enqueue_style(
        'ninoweb-fonts',
        'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;600;700;800&family=Poppins:wght@300;400;500;600;700;800&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'ninoweb-style',
        get_stylesheet_uri(),
        ['ninoweb-fonts'],
        ninoweb_asset_version('/style.css')
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
        ninoweb_asset_version('/assets/js/navigation.js'),
        true
    );

    wp_enqueue_script(
        'ninoweb-accordion',
        get_theme_file_uri('/assets/js/accordeon.js'),
        [],
        ninoweb_asset_version('/assets/js/accordeon.js'),
        true
    );

    wp_enqueue_script(
    'ninoweb-language-popup',
    get_theme_file_uri('/assets/js/language-popup.js'),
    [],
    ninoweb_asset_version('/assets/js/language-popup.js'),
    true
);
}

add_action('wp_enqueue_scripts', 'ninoweb_enqueue_assets');


/* --------------------
   TRANSLATABLE STRINGS
-------------------- */

/**
 * This array will hold the English source text used throughout the theme.
 *
 * As we translate each section, its strings will be added here.
 */
function ninoweb_theme_strings() {
    return [
        'skip_to_content' => 'Skip to content',

        'contact_success' =>
            'Thank you. Your message has been sent.',

        'contact_error' =>
            'Something went wrong. Please try again or contact us directly.',

        'form_verification_error' =>
            'The form could not be verified.',
        'logo_home_label' =>
            'NinoWeb home',

        'toggle_navigation' =>
            'Toggle navigation',

        'primary_navigation' =>
            'Primary navigation',

        'services' =>
            'Services',

        'projects' =>
            'Projects',

        'about' =>
            'About',

        'contact' =>
            'Contact',

        'language_selection' =>
            'Language selection',

        'hero_eyebrow' =>
            'Web Design for Small Businesses',

        'hero_heading' =>
            'Professional websites that help businesses',

        'hero_heading_highlight' =>
            'grow.',

        'hero_description' =>
            'Custom WordPress websites that help your business stand out online, work beautifully on every device, and include reliable support after launch.',

        'hero_primary_cta' =>
            'Get a Free Quote',

        'hero_secondary_cta' =>
            'View Our Work',

        'hero_image_alt' =>
            'Example of a responsive website displayed on a laptop',

        'hero_feature_custom' =>
            'Custom Designed for Your Business',

        'hero_feature_mobile' =>
            'Look Great on Mobile',

        'hero_feature_seo' =>
            'Search Engine Optimized',

        'hero_feature_support' =>
            'Support After Launch',

        'services_heading' =>
            'What We Can Build for You',

        'service_website_title' =>
            'Custom WordPress Websites & More',

        'service_website_description' =>
            'Professional websites built around your business goals, designed to build trust, attract customers, and support your growth online.',

        'service_website_feature_one' =>
            'Custom design for your business',

        'service_website_feature_two' =>
            'Mobile-friendly on every screen',

        'service_website_feature_three' =>
            'Simple for you to update',

        'service_website_cta' =>
            'Start a new website',

        'service_redesign_badge' =>
            'Best for Existing Sites',

        'service_redesign_title' =>
            'Website Redesigns & Optimization',

        'service_redesign_description' =>
            'Transform an outdated website into a modern, responsive experience that performs better and represents your business professionally.',

        'service_redesign_feature_one' =>
            'Modern, professional appearance',

        'service_redesign_feature_two' =>
            'Clearer and easier navigation',

        'service_redesign_feature_three' =>
            'Improved speed and performance',

        'service_redesign_cta' =>
            'Discuss a redesign or update',

        'service_support_title' =>
            'Maintenance & Support',

        'service_support_description' =>
            'Reliable ongoing assistance to keep your website updated, secure, functional, and ready to support your customers.',

        'service_support_feature_one' =>
            'Regular website updates',

        'service_support_feature_two' =>
            'Security checks and backups',

        'service_support_feature_three' =>
            'Reliable help when needed',

        'service_support_cta' =>
            'Get ongoing website support',

        'projects_eyebrow' =>
            'Selected Work',

        'projects_heading' =>
            'A look at our work',

        'projects_intro' =>
            'A selection of projects focused on clear design, mobile usability, and real business goals.',

        'project_view' =>
            'View Project',


        'project_cardoctor_alt' =>
            'CarDoctor website screenshot',

        'project_cardoctor_label' =>
            'Car Repair Shop',

        'project_cardoctor_description' =>
            'Custom WordPress website for an automotive service business.',

        'project_cardoctor_tag_one' =>
            'Custom Design',

        'project_cardoctor_tag_two' =>
            'Service Showcase',

        'project_cardoctor_tag_three' =>
            'Mobile Friendly',


        'project_nexter_alt' =>
            'Nexter real estate website screenshot',

        'project_nexter_label' =>
            'Luxury Real Estate',

        'project_nexter_title' =>
            'Real Estate Website (Nexter)',

        'project_nexter_description' =>
            'Responsive layout for property listings, agent branding, and lead generation.',

        'project_nexter_tag_one' =>
            'Property Listings',

        'project_nexter_tag_two' =>
            'Lead Generation',

        'project_nexter_tag_three' =>
            'Easy Navigation',


        'project_natours_alt' =>
            'Natours travel website screenshot',

        'project_natours_label' =>
            'Adventure Travel Company',

        'project_natours_description' =>
            'Travel landing page with strong visuals and clean, responsive sections.',

        'project_natours_tag_one' =>
            'Engaging Design',

        'project_natours_tag_two' =>
            'Tour Showcase',


        'project_ynino_alt' =>
            'YNino developer portfolio screenshot',

        'project_ynino_label' =>
            'Personal Portfolio',

        'project_ynino_description' =>
            'A personal website created to showcase development work and experience.',

        'project_ynino_tag_one' =>
            'Project Showcase',

        'project_ynino_tag_two' =>
            'Interactive Design',

        'project_ynino_tag_three' =>
            'Clear Navigation',


        'project_trillo_alt' =>
            'Trillo booking application screenshot',

        'project_trillo_label' =>
            'Hotel Booking Platform',

        'project_trillo_title' =>
            'Trillo Booking App',

        'project_trillo_description' =>
            'Responsive travel booking interface focused on clear navigation and flexible layouts.',

        'project_trillo_tag_one' =>
            'Booking Experience',

        'project_trillo_tag_two' =>
            'Search & Filters',


        'about_eyebrow' =>
            'About NinoWeb',

        'about_heading' =>
            'Direct, practical web design for small businesses',

        'about_intro' =>
            'Work directly with the person designing and building your website, with clear communication from the first conversation through launch and beyond.',

        'about_brand_description' =>
            'Independent web design and development',

        'about_service_communication' =>
            'Direct Communication',

        'about_service_process' =>
            'Clear Project Process',

        'about_service_mobile' =>
            'Mobile-Friendly Design',

        'about_service_support' =>
            'Support After Launch',

        'about_location' =>
            'Ottawa, Ontario',

        'about_location_description' =>
            'Available for projects across Canada and remotely',

        'about_kicker' =>
            'Meet Your Developer',

        'about_photo_alt' =>
            'Yegor Nino, web designer and developer behind NinoWeb',

        'about_person_heading' =>
            'Hi, I’m Yegor — the person behind NinoWeb.',

        'about_person_description' =>
            'Independent web designer and developer based in Ottawa.',

        'about_paragraph_one' =>
            'I help small businesses build modern, professional websites without the complexity of working with a large agency. You communicate directly with me throughout the entire project.',

        'about_paragraph_two' =>
            'I graduated from the British Columbia Institute of Technology in 2022 with a Front-End Web Development diploma, earning distinction. Since 2024, I have been designing and building websites for clients, combining clean, professional design with practical and user-friendly development.',

        'about_point_one' =>
            'Clear explanations without confusing technical language',

        'about_point_two' =>
            'Design decisions based on your business goals',

        'about_point_three' =>
            'A website you can confidently manage after launch',

        'about_cta' =>
            'Tell me about your project',

            'faq_eyebrow' =>
            'Frequently Asked Questions',

        'faq_heading' =>
            'A few things you may want to know',

        'faq_intro' =>
            'Clear answers about pricing, timelines, website updates, and what happens after your website launches.',

        'faq_contact_cta' =>
            'Have another question?',

        'faq_question_one' =>
            'How much does a small-business website cost?',

        'faq_answer_one' =>
            'Most small-business websites fall between $1,500 and $3,000 CAD. The final cost depends on the size of the website, the features you need, and whether content or branding work is required. After an initial conversation, you’ll receive a clear proposal outlining the scope, timeline, and price.',

        'faq_question_two' =>
            'How long does it take to build a website?',

        'faq_answer_two' =>
            'Most small-business websites take around three to six weeks. The exact timeline depends on the project size, how quickly content is provided, and the feedback process.',

        'faq_question_three' =>
            'Can you redesign my existing website?',

        'faq_answer_three' =>
            'Yes. An existing website can be redesigned to improve its appearance, mobile experience, navigation, performance, and overall effectiveness.',

        'faq_question_four' =>
            'Will my website work properly on mobile?',

        'faq_answer_four' =>
            'Yes. Every website is designed to work across phones, tablets, laptops, and larger desktop screens.',

        'faq_question_five' =>
            'Will I be able to update the website myself?',

        'faq_answer_five' =>
            'Yes. Your WordPress website can be set up so common content, such as text, images, services, and contact information, is straightforward to update.',

        'faq_question_six' =>
            'Do you provide support after launch?',

        'faq_answer_six' =>
            'Yes. Monthly maintenance plans are available and can include updates, backups, security monitoring, content changes, and general website support.',

            /* Contact */

        'contact_eyebrow' =>
            'Start a Project',

        'contact_heading' =>
            'Let’s talk about your website',

        'contact_intro' =>
            'Tell me about your business, your current website, and what you would like to improve. I’ll review the details and get back to you with clear next steps.',

        'contact_channels_label' =>
            'Quick contact options',

        'contact_line_label' =>
            'Message NinoWeb on LINE',

        'contact_whatsapp_label' =>
            'Message NinoWeb on WhatsApp',

        'contact_instagram_label' =>
            'Visit NinoWeb on Instagram',

        'contact_whatsapp_message' =>
            'Hi! I’m interested in a website for my business.',

        'contact_benefit_consultation_title' =>
            'Free initial consultation',

        'contact_benefit_consultation_text' =>
            'No pressure and no obligation',

        'contact_benefit_proposal_title' =>
            'Clear project proposal',

        'contact_benefit_proposal_text' =>
            'Scope, timeline, and pricing explained clearly',

        'contact_benefit_response_title' =>
            'Quick response',

        'contact_benefit_response_text' =>
            'Usually within 1–2 business days',

        'contact_form_eyebrow' =>
            'Project Inquiry',

        'contact_form_heading' =>
            'Tell me what you need',

        'contact_name_label' =>
            'Name',

        'contact_name_placeholder' =>
            'Your name',

        'contact_email_label' =>
            'Email',

        'contact_service_label' =>
            'What do you need?',

        'contact_service_placeholder' =>
            'Select a service',

        'contact_service_new' =>
            'A new website',

        'contact_service_redesign' =>
            'A website redesign',

        'contact_service_maintenance' =>
            'Maintenance and support',

        'contact_service_other' =>
            'Something else',

        'contact_details_label' =>
            'Project details',

        'contact_details_placeholder' =>
            'Tell me about your business and what you would like your website to achieve.',

        'contact_submit' =>
            'Send Project Details',

        'contact_privacy' =>
            'Your information will only be used to respond to your inquiry.',

            'footer_description' =>
            'Professional WordPress websites designed to help small businesses build trust and grow online.',

        'footer_navigation_label' =>
            'Footer navigation',

        'footer_explore_heading' =>
            'Explore',

        'footer_service_websites' =>
            'Custom WordPress Websites',

        'footer_service_redesigns' =>
            'Website Redesigns',

        'footer_contact_heading' =>
            'Get in Touch',

        'footer_contact_text' =>
            'Have a project in mind? Send me a message and I’ll get back to you.',

        'footer_rights' =>
            'All rights reserved.',

        'footer_privacy_policy' =>
            'Privacy Policy',

        '404_heading' =>
            'Page not found',

        '404_description' =>
            'The page you are looking for may have been moved, deleted, or never existed.',

        '404_button' =>
            'Return to the homepage',
        ];
}


/**
 * Register theme strings in:
 *
 * WordPress Dashboard → Languages → Translations
 */
function ninoweb_register_polylang_strings() {
    if (! function_exists('pll_register_string')) {
        return;
    }

    foreach (ninoweb_theme_strings() as $key => $text) {
        pll_register_string(
            'ninoweb_' . $key,
            $text,
            'NinoWeb Theme',
            false
        );
    }
}

add_action('init', 'ninoweb_register_polylang_strings');


/**
 * Retrieve a translated theme string by its key.
 *
 * Example:
 *
 * echo esc_html(ninoweb_text('skip_to_content'));
 */
function ninoweb_text($key) {
    $strings = ninoweb_theme_strings();

    if (! isset($strings[$key])) {
        return '';
    }

    $text = $strings[$key];

    if (function_exists('pll__')) {
        return pll__($text);
    }

    return $text;
}


/* --------------------
   CONTACT REDIRECT URL
-------------------- */

/**
 * Return visitors to the same page and language after submitting the form.
 */
function ninoweb_contact_return_url() {
    $fallback_url = home_url('/');
    $referer      = wp_get_referer();

    if (! $referer) {
        return $fallback_url;
    }

    $return_url = wp_validate_redirect(
        $referer,
        $fallback_url
    );

    return remove_query_arg(
        'contact',
        $return_url
    );
}

/* --------------------
   CONTACT FORM
-------------------- */

function ninoweb_enqueue_contact_script() {
    wp_enqueue_script(
        'ninoweb-contact-form',
        get_template_directory_uri() . '/assets/js/contact-form.js',
        array(),
        ninoweb_asset_version('/assets/js/contact-form.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'ninoweb_enqueue_contact_script');


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
        wp_send_json_error(
            array(
                'message' => ninoweb_text('form_verification_error'),
            ),
            403
        );
    }

    $name = isset($_POST['name'])
        ? sanitize_text_field(wp_unslash($_POST['name']))
        : '';

    $email = isset($_POST['email'])
        ? sanitize_email(wp_unslash($_POST['email']))
        : '';

    $service = isset($_POST['project_type'])
        ? sanitize_text_field(
        wp_unslash($_POST['project_type']))
        : '';

    $message = '';

    if (isset($_POST['message'])) {
        $message = sanitize_textarea_field(
            wp_unslash($_POST['message'])
        );
    } elseif (isset($_POST['details'])) {
        $message = sanitize_textarea_field(
            wp_unslash($_POST['details'])
        );
    }

    if (
        empty($name) ||
        empty($email) ||
        empty($message)
    ) {
        wp_send_json_error(
            array(
                'message' => ninoweb_text('contact_error'),
            ),
            400
        );
    }

    if (! is_email($email)) {
        wp_send_json_error(
            array(
                'message' => ninoweb_text('contact_error'),
            ),
            400
        );
    }

    $to      = get_option('admin_email');
    $subject = 'New NinoWeb inquiry from ' . $name;

    $body  = "Name: {$name}\n";
    $body .= "Email: {$email}\n";

    if (! empty($service)) {
        $body .= "Service: {$service}\n";
    }

    $body .= "\nMessage:\n{$message}\n";

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>',
    );

    $sent = wp_mail(
        $to,
        $subject,
        $body,
        $headers
    );

    if (! $sent) {
        wp_send_json_error(
            array(
                'message' => ninoweb_text('contact_error'),
            ),
            500
        );
    }

    wp_send_json_success(
        array(
            'message' => ninoweb_text('contact_success'),
        )
    );
}

add_action(
    'wp_ajax_ninoweb_contact_form',
    'ninoweb_handle_contact_form'
);

add_action(
    'wp_ajax_nopriv_ninoweb_contact_form',
    'ninoweb_handle_contact_form'
);