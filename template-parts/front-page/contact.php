<section id="contact" class="contact section">
    <div class="container contact-grid">
        <div class="contact-intro">
            <p class="section-eyebrow">Contact</p>

            <h2>Let’s build something great together</h2>

            <p>
                Tell me a little about your business, your website, and what
                you would like to improve. I’ll get back to you to discuss the
                project and the next steps.
            </p>

            <ul class="contact-benefits">
                <li>
                    <i class="fa-solid fa-comments"></i>
                    Free initial consultation
                </li>

                <li>
                    <i class="fa-solid fa-file-lines"></i>
                    Clear project proposal
                </li>

                <li>
                    <i class="fa-solid fa-location-dot"></i>
                    Based in Ottawa, available remotely
                </li>
            </ul>
        </div>

        <form
            class="contact-form"
            action="<?php echo esc_url(admin_url('admin-post.php')); ?>"
            method="post"
        >
            <input type="hidden" name="action" value="ninoweb_contact">

            <?php wp_nonce_field(
                'ninoweb_contact_form',
                'ninoweb_contact_nonce'
            ); ?>

            <div class="form-field">
                <label for="contact-name">Name</label>

                <input
                    id="contact-name"
                    name="name"
                    type="text"
                    autocomplete="name"
                    required
                >
            </div>

            <div class="form-field">
                <label for="contact-email">Email</label>

                <input
                    id="contact-email"
                    name="email"
                    type="email"
                    autocomplete="email"
                    required
                >
            </div>

            <div class="form-field">
                <label for="project-type">What do you need?</label>

                <select id="project-type" name="project_type">
                    <option value="New website">A new website</option>
                    <option value="Website redesign">A website redesign</option>
                    <option value="Maintenance">Maintenance and support</option>
                    <option value="Other">Something else</option>
                </select>
            </div>

            <div class="form-field">
                <label for="contact-message">Project details</label>

                <textarea
                    id="contact-message"
                    name="message"
                    rows="6"
                    required
                ></textarea>
            </div>

            <!-- Honeypot spam field -->
            <div class="form-honeypot" aria-hidden="true">
                <label for="contact-website">Website</label>
                <input
                    id="contact-website"
                    name="website"
                    type="text"
                    tabindex="-1"
                    autocomplete="off"
                >
            </div>

            <button class="btn btn-primary contact-submit" type="submit">
                Send Project Details
                <i class="fa-solid fa-arrow-right"></i>
            </button>

            <?php
            $contact_status = isset($_GET['contact'])
                ? sanitize_key(wp_unslash($_GET['contact']))
                : '';

            if ('success' === $contact_status) :
            ?>
                <p class="form-message form-message-success">
                    Thank you. Your message has been sent.
                </p>
            <?php elseif ('error' === $contact_status) : ?>
                <p class="form-message form-message-error">
                    Something went wrong. Please try again or email
                    hello@ninoweb.net.
                </p>
            <?php endif; ?>
        </form>
    </div>
</section>