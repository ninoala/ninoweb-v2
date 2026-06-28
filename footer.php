<footer class="site-footer">
    <div class="container">

        <div class="footer-main">

            <div class="footer-brand">
                <a
                    class="footer-logo"
                    href="<?php echo esc_url(home_url('/')); ?>"
                    aria-label="NinoWeb home"
                >
                    Nino<span>Web</span>
                </a>

                <p>
                    Professional WordPress websites designed to help small
                    businesses build trust and grow online.
                </p>

                <p class="footer-location">
                    <i
                        class="fa-solid fa-location-dot"
                        aria-hidden="true"
                    ></i>

                    Ottawa, Ontario
                </p>
            </div>

            <nav
                class="footer-column"
                aria-label="Footer navigation"
            >
                <h4>Explore</h4>

                <ul>
                    <li>
                        <a href="<?php echo esc_url(home_url('/#services')); ?>">
                            Services
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(home_url('/#projects')); ?>">
                            Projects
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(home_url('/#about')); ?>">
                            About NinoWeb
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo esc_url(home_url('/#contact')); ?>">
                            Start a Project
                        </a>
                    </li>
                </ul>
            </nav>

            <div class="footer-column">
                <h4>Services</h4>

                <ul>
                    <li>Custom WordPress Websites</li>
                    <li>Website Redesigns</li>
                    <li>Maintenance &amp; Support</li>
                </ul>
            </div>

            <div class="footer-column footer-contact">
                <h4>Get in Touch</h4>

                <p>
                    Have a project in mind? Send me a message and I’ll get
                    back to you.
                </p>

                <a
                    class="footer-email"
                    href="mailto:hello@ninoweb.net"
                >
                    hello@ninoweb.net
                    <i
                        class="fa-solid fa-arrow-up-right-from-square"
                        aria-hidden="true"
                    ></i>
                </a>
            </div>

        </div>

        <div class="footer-bottom">
            <p>
                &copy; <?php echo esc_html(wp_date('Y')); ?>
                NinoWeb. All rights reserved.
            </p>

            <?php if (get_privacy_policy_url()) : ?>
                <a href="<?php echo esc_url(get_privacy_policy_url()); ?>">
                    Privacy Policy
                </a>
            <?php endif; ?>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>