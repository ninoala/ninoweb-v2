<?php

$line_url = 'https://line.me/ti/p/VEZrRLxLJG';

$whatsapp_message = rawurlencode(
    ninoweb_text('contact_whatsapp_message')
);

$whatsapp_url = 'https://wa.me/17788587815?text=' .
    $whatsapp_message;

$instagram_url = 'https://www.instagram.com/ninowebstudio/';

?>

<nav
    class="contact-dock"
    aria-label="<?php
        echo esc_attr(
            ninoweb_text('contact_channels_label')
        );
    ?>"
>
    <a
        class="contact-dock-link contact-dock-link--line"
        href="<?php echo esc_url($line_url); ?>"
        target="_blank"
        rel="noopener noreferrer"
        aria-label="<?php
            echo esc_attr(
                ninoweb_text('contact_line_label')
            );
        ?>"
    >
        <span class="contact-dock-icon">
            <?php echo ninoweb_icon( 'line', 'brands', '' ); ?>
        </span>

        <span class="contact-dock-label">
            LINE
        </span>
    </a>

    <a
        class="contact-dock-link contact-dock-link--whatsapp"
        href="<?php echo esc_url($whatsapp_url); ?>"
        target="_blank"
        rel="noopener noreferrer"
        aria-label="<?php
            echo esc_attr(
                ninoweb_text('contact_whatsapp_label')
            );
        ?>"
    >
        <span class="contact-dock-icon">
            <?php echo ninoweb_icon( 'whatsapp', 'brands', '' ); ?>
        </span>

        <span class="contact-dock-label">
            WhatsApp
        </span>
    </a>

    <a
        class="contact-dock-link contact-dock-link--instagram"
        href="<?php echo esc_url($instagram_url); ?>"
        target="_blank"
        rel="noopener noreferrer"
        aria-label="<?php
            echo esc_attr(
                ninoweb_text('contact_instagram_label')
            );
        ?>"
    >
        <span class="contact-dock-icon">
            <?php echo ninoweb_icon( 'instagram', 'brands', '' ); ?>
        </span>

        <span class="contact-dock-label">
            Instagram
        </span>
    </a>
</nav>