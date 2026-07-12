<?php
$line_url = 'https://line.me/ti/p/VEZrRLxLJG';

$whatsapp_message = rawurlencode(
    "Hi! I'm interested in a website for my business."
);

$whatsapp_url = 'https://wa.me/17788587815?text=' .
    $whatsapp_message;

$instagram_url = 'https://www.instagram.com/ninoweb.jp/';
?>

<nav
    class="contact-dock"
    aria-label="Quick contact"
>
    <a
        class="contact-dock-link contact-dock-link--line"
        href="<?php echo esc_url($line_url); ?>"
        target="_blank"
        rel="noopener noreferrer"
        aria-label="Message NinoWeb on LINE"
    >
        <span class="contact-dock-icon">
            <i
                class="fa-brands fa-line"
                aria-hidden="true"
            ></i>
        </span>

        <span class="contact-dock-label">LINE</span>
    </a>

    <a
        class="contact-dock-link contact-dock-link--whatsapp"
        href="<?php echo esc_url($whatsapp_url); ?>"
        target="_blank"
        rel="noopener noreferrer"
        aria-label="Message NinoWeb on WhatsApp"
    >
        <span class="contact-dock-icon">
            <i
                class="fa-brands fa-whatsapp"
                aria-hidden="true"
            ></i>
        </span>

        <span class="contact-dock-label">WhatsApp</span>
    </a>

    <a
        class="contact-dock-link contact-dock-link--instagram"
        href="<?php echo esc_url($instagram_url); ?>"
        target="_blank"
        rel="noopener noreferrer"
        aria-label="Visit NinoWeb on Instagram"
    >
        <span class="contact-dock-icon">
            <i
                class="fa-brands fa-instagram"
                aria-hidden="true"
            ></i>
        </span>

        <span class="contact-dock-label">Instagram</span>
    </a>
</nav>