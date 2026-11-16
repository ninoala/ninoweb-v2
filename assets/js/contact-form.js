
document.addEventListener('DOMContentLoaded', () => {
    const forms = document.querySelectorAll('.contact-form');

    if (!forms.length) return;

    forms.forEach((form) => {
        const status = form.querySelector('.contact-form__status');
        const submitButton = form.querySelector('[type="submit"]');

        let isSubmitting = false;

        form.addEventListener('submit', async (event) => {
            event.preventDefault();

            if (isSubmitting) return;
            isSubmitting = true;

            if (status) {
                status.textContent =
                    form.dataset.sendingText || 'Sending...';

                status.classList.remove('is-success', 'is-error');
            }

            if (submitButton) {
                submitButton.disabled = true;
            }

            const formData = new FormData(form);

            try {
                const response = await fetch(form.getAttribute('action'), {
                    method: 'POST',
                    body: formData,
                });

                const responseText = await response.text();

                if (!responseText.trim()) {
                    throw new Error(
                        'The server returned an empty response. Please try again.'
                    );
                }

                let result;

                try {
                    result = JSON.parse(responseText);
                } catch {
                    throw new Error(
                        'Unexpected server response. Please try again.'
                    );
                }

                if (!response.ok || !result.success) {
                    throw new Error(
                        result.data?.message ||
                        'Something went wrong. Please try again.'
                    );
                }

                // Successful submission
                if (status) {
                    status.textContent = result.data?.message ||
                        'Thank you. Your message has been sent.';

                    status.classList.add('is-success');
                }

                // Google Tag Manager conversion event
                window.dataLayer = window.dataLayer || [];

                window.dataLayer.push({
                    event: 'ninoweb_contact_success',
                });

                // Reset the form
                form.reset();

            } catch (error) {
                if (status) {
                    status.textContent = error.message;
                    status.classList.add('is-error');
                }

            } finally {
                isSubmitting = false;

                if (submitButton) {
                    submitButton.disabled = false;
                }
            }
        });
    });
});
