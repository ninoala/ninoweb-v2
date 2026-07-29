<?php

$line_url = 'https://line.me/ti/p/VEZrRLxLJG';

$whatsapp_message = rawurlencode(
    ninoweb_text('contact_whatsapp_message')
);

$whatsapp_url = 'https://wa.me/17788587815?text=' .
    $whatsapp_message;

$instagram_url = 'https://www.instagram.com/ninowebstudio';

?>

<section id="contact" class="contact section">
    <div class="container contact-grid">

        <div class="contact-intro">
            <p class="section-eyebrow">
                <?php
                echo esc_html(
                    ninoweb_text('contact_eyebrow')
                );
                ?>
            </p>

            <h2>
                <?php
                echo esc_html(
                    ninoweb_text('contact_heading')
                );
                ?>
            </h2>

            <p>
                <?php
                echo esc_html(
                    ninoweb_text('contact_intro')
                );
                ?>
            </p>

            <div
                class="contact-channels"
                aria-label="<?php
                    echo esc_attr(
                        ninoweb_text('contact_channels_label')
                    );
                ?>"
            >
                <a
                    class="contact-channel contact-channel--line"
                    href="<?php echo esc_url($line_url); ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="<?php
                        echo esc_attr(
                            ninoweb_text('contact_line_label')
                        );
                    ?>"
                >
                    <span class="contact-channel-icon">
                        <?php echo ninoweb_icon( 'line', 'brands', '' ); ?>
                    </span>

                    <span class="contact-channel-copy">
                        <strong>LINE</strong>
                    </span>

                    <?php echo ninoweb_icon( 'arrow-up-right-from-square', 'solid', 'contact-channel-arrow' ); ?>
                </a>

                <a
                    class="contact-channel contact-channel--whatsapp"
                    href="<?php echo esc_url($whatsapp_url); ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="<?php
                        echo esc_attr(
                            ninoweb_text('contact_whatsapp_label')
                        );
                    ?>"
                >
                    <span class="contact-channel-icon">
                        <?php echo ninoweb_icon( 'whatsapp', 'brands', '' ); ?>
                    </span>

                    <span class="contact-channel-copy">
                        <strong>WhatsApp</strong>
                    </span>

                    <?php echo ninoweb_icon( 'arrow-up-right-from-square', 'solid', 'contact-channel-arrow' ); ?>
                </a>

                <a
                    class="contact-channel contact-channel--instagram"
                    href="<?php echo esc_url($instagram_url); ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                    aria-label="<?php
                        echo esc_attr(
                            ninoweb_text('contact_instagram_label')
                        );
                    ?>"
                >
                    <span class="contact-channel-icon">
                        <?php echo ninoweb_icon( 'instagram', 'brands', '' ); ?>
                    </span>

                    <span class="contact-channel-copy">
                        <strong>Instagram</strong>
                    </span>

                    <?php echo ninoweb_icon( 'arrow-up-right-from-square', 'solid', 'contact-channel-arrow' ); ?>
                </a>
            </div>

            <ul class="contact-benefits">
                <li>
                    <span class="contact-benefit-icon">
                        <?php echo ninoweb_icon( 'comments', 'solid', '' ); ?>
                    </span>

                    <div>
                        <strong>
                            <?php
                            echo esc_html(
                                ninoweb_text(
                                    'contact_benefit_consultation_title'
                                )
                            );
                            ?>
                        </strong>

                        <span>
                            <?php
                            echo esc_html(
                                ninoweb_text(
                                    'contact_benefit_consultation_text'
                                )
                            );
                            ?>
                        </span>
                    </div>
                </li>

                <li>
                    <span class="contact-benefit-icon">
                        <?php echo ninoweb_icon( 'file-lines', 'solid', '' ); ?>
                    </span>

                    <div>
                        <strong>
                            <?php
                            echo esc_html(
                                ninoweb_text(
                                    'contact_benefit_proposal_title'
                                )
                            );
                            ?>
                        </strong>

                        <span>
                            <?php
                            echo esc_html(
                                ninoweb_text(
                                    'contact_benefit_proposal_text'
                                )
                            );
                            ?>
                        </span>
                    </div>
                </li>

                <li>
                    <span class="contact-benefit-icon">
                        <?php echo ninoweb_icon( 'clock', 'solid', '' ); ?>
                    </span>

                    <div>
                        <strong>
                            <?php
                            echo esc_html(
                                ninoweb_text(
                                    'contact_benefit_response_title'
                                )
                            );
                            ?>
                        </strong>

                        <span>
                            <?php
                            echo esc_html(
                                ninoweb_text(
                                    'contact_benefit_response_text'
                                )
                            );
                            ?>
                        </span>
                    </div>
                </li>
            </ul>
        </div>

        <form
            class="contact-form"
            action="<?php echo esc_url(admin_url('admin-ajax.php')); ?>"
            method="post"
        >
            <input
                type="hidden"
                name="action"
                value="ninoweb_contact_form"
            >

            <?php
            wp_nonce_field(
                'ninoweb_contact_form',
                'ninoweb_contact_nonce'
            );
            ?>

            <div class="contact-form-heading">
                <p>
                    <?php
                    echo esc_html(
                        ninoweb_text('contact_form_eyebrow')
                    );
                    ?>
                </p>

                <h3>
                    <?php
                    echo esc_html(
                        ninoweb_text('contact_form_heading')
                    );
                    ?>
                </h3>
            </div>

            <div class="form-field">
                <label for="contact-name">
                    <?php
                    echo esc_html(
                        ninoweb_text('contact_name_label')
                    );
                    ?>
                </label>

                <input
                    id="contact-name"
                    name="name"
                    type="text"
                    autocomplete="name"
                    placeholder="<?php
                        echo esc_attr(
                            ninoweb_text('contact_name_placeholder')
                        );
                    ?>"
                    required
                >
            </div>

            <div class="form-field">
                <label for="contact-email">
                    <?php
                    echo esc_html(
                        ninoweb_text('contact_email_label')
                    );
                    ?>
                </label>

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
                <label for="project-type">
                    <?php
                    echo esc_html(
                        ninoweb_text('contact_service_label')
                    );
                    ?>
                </label>

                <select
                    id="project-type"
                    name="project_type"
                    required
                >
                    <option value="" selected disabled>
                        <?php
                        echo esc_html(
                            ninoweb_text(
                                'contact_service_placeholder'
                            )
                        );
                        ?>
                    </option>

                    <option value="New website">
                        <?php
                        echo esc_html(
                            ninoweb_text('contact_service_new')
                        );
                        ?>
                    </option>

                    <option value="Website redesign">
                        <?php
                        echo esc_html(
                            ninoweb_text('contact_service_redesign')
                        );
                        ?>
                    </option>

                    <option value="Maintenance">
                        <?php
                        echo esc_html(
                            ninoweb_text(
                                'contact_service_maintenance'
                            )
                        );
                        ?>
                    </option>

                    <option value="Other">
                        <?php
                        echo esc_html(
                            ninoweb_text('contact_service_other')
                        );
                        ?>
                    </option>
                </select>
            </div>

            <div class="form-field">
                <label for="contact-message">
                    <?php
                    echo esc_html(
                        ninoweb_text('contact_details_label')
                    );
                    ?>
                </label>

                <textarea
                    id="contact-message"
                    name="message"
                    rows="6"
                    maxlength="2000"
                    placeholder="<?php
                        echo esc_attr(
                            ninoweb_text(
                                'contact_details_placeholder'
                            )
                        );
                    ?>"
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

            <p class="contact-form__status" aria-live="polite"></p>

            <button
                class="btn btn-primary contact-submit"
                type="submit"
            >
                <?php
                echo esc_html(
                    ninoweb_text('contact_submit')
                );
                ?>

                <?php echo ninoweb_icon( 'arrow-right', 'solid', '' ); ?>
            </button>

            <p class="contact-privacy">
                <?php
                echo esc_html(
                    ninoweb_text('contact_privacy')
                );
                ?>
            </p>

            <?php

            $contact_status = isset($_GET['contact'])
                ? sanitize_key(
                    wp_unslash($_GET['contact'])
                )
                : '';

            if ('success' === $contact_status) :

            ?>
                <p
                    class="form-message form-message-success"
                    aria-live="polite"
                >
                    <?php
                    echo esc_html(
                        ninoweb_text('contact_success')
                    );
                    ?>
                </p>

            <?php elseif ('error' === $contact_status) : ?>

                <p
                    class="form-message form-message-error"
                    aria-live="polite"
                >
                    <?php
                    echo esc_html(
                        ninoweb_text('contact_error')
                    );
                    ?>
                </p>
            <?php endif; ?>
        </form>

    </div>
</section>