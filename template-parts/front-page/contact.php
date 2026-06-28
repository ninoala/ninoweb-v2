<section id="contact" class="contact section">
    <div class="container contact-grid">

        <div class="contact-intro">
            <p class="section-eyebrow">Start a Project</p>

            <h2>Let’s talk about your website</h2>

            <p>
                Tell me about your business, your current website, and what
                you would like to improve. I’ll review the details and get
                back to you with clear next steps.
            </p>

            <ul class="contact-benefits">
                <li>
                    <span class="contact-benefit-icon">
                        <i
                            class="fa-solid fa-comments"
                            aria-hidden="true"
                        ></i>
                    </span>

                    <div>
                        <strong>Free initial consultation</strong>
                        <span>No pressure and no obligation</span>
                    </div>
                </li>

                <li>
                    <span class="contact-benefit-icon">
                        <i
                            class="fa-solid fa-file-lines"
                            aria-hidden="true"
                        ></i>
                    </span>

                    <div>
                        <strong>Clear project proposal</strong>
                        <span>Scope, timeline, and pricing explained clearly</span>
                    </div>
                </li>

                <li>
                    <span class="contact-benefit-icon">
                        <i
                            class="fa-solid fa-clock"
                            aria-hidden="true"
                        ></i>
                    </span>

                    <div>
                        <strong>Quick response</strong>
                        <span>Usually within 1–2 business days</span>
                    </div>
                </li>
            </ul>
        </div>

        <form
            class="contact-form"
            action="<?php echo esc_url(admin_url('admin-post.php')); ?>"
            method="post"
        >
            <input type="hidden" name="action" value="ninoweb_contact">

            <?php
            wp_nonce_field(
                'ninoweb_contact_form',
                'ninoweb_contact_nonce'
            );
            ?>

            <div class="contact-form-heading">
                <p>Project Inquiry</p>
                <h3>Tell me what you need</h3>
            </div>

            <div class="form-field">
                <label for="contact-name">Name</label>

                <input
                    id="contact-name"
                    name="name"
                    type="text"
                    autocomplete="name"
                    placeholder="Your name"
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
                    placeholder="you@example.com"
                    required
                >
            </div>

            <div class="form-field">
                <label for="project-type">What do you need?</label>

                <select
                    id="project-type"
                    name="project_type"
                    required
                >
                    <option value="" selected disabled>
                        Select a service
                    </option>

                    <option value="New website">
                        A new website
                    </option>

                    <option value="Website redesign">
                        A website redesign
                    </option>

                    <option value="Maintenance">
                        Maintenance and support
                    </option>

                    <option value="Other">
                        Something else
                    </option>
                </select>
            </div>

            <div class="form-field">
                <label for="contact-message">Project details</label>

                <textarea
                    id="contact-message"
                    name="message"
                    rows="6"
                    maxlength="2000"
                    placeholder="Tell me about your business and what you would like your website to achieve."
                    required
                ></textarea>
            </div>

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

            <button
                class="btn btn-primary contact-submit"
                type="submit"
            >
                Send Project Details

                <i
                    class="fa-solid fa-arrow-right"
                    aria-hidden="true"
                ></i>
            </button>

            <p class="contact-privacy">
                Your information will only be used to respond to your inquiry.
            </p>

            <?php
            $contact_status = isset($_GET['contact'])
                ? sanitize_key(wp_unslash($_GET['contact']))
                : '';

            if ('success' === $contact_status) :
            ?>
                <p
                    class="form-message form-message-success"
                    aria-live="polite"
                >
                    Thank you. Your message has been sent.
                </p>

            <?php elseif ('error' === $contact_status) : ?>

                <p
                    class="form-message form-message-error"
                    aria-live="polite"
                >
                    Something went wrong. Please try again or email
                    hello@ninoweb.net.
                </p>
            <?php endif; ?>
        </form>
    </div>
</section>