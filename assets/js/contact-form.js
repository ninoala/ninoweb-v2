document.addEventListener('DOMContentLoaded', () => {
    const forms = document.querySelectorAll('.contact-form');

    if (!forms.length) return;

    forms.forEach((form) => {
        const status = form.querySelector('.contact-form__status');
        const submitButton = form.querySelector('[type="submit"]');

        form.addEventListener('submit', async (event) => {
            event.preventDefault();

            if (status) {
                status.textContent = 'Sending...';
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

console.log('Response status:', response.status);
console.log('Response body:', responseText);

if (!responseText.trim()) {
    throw new Error(
        `The server returned an empty response (${response.status}).`
    );
}

let result;

try {
    result = JSON.parse(responseText);
} catch {
    throw new Error(
        `The server returned invalid JSON: ${responseText.slice(0, 200)}`
    );
}

                if (!response.ok || !result.success) {
                    throw new Error(
                        result.data?.message ||
                            'Something went wrong. Please try again.'
                    );
                }

                if (status) {
                    status.textContent = result.data.message;
                    status.classList.add('is-success');
                }

                form.reset();
            } catch (error) {
                if (status) {
                    status.textContent = error.message;
                    status.classList.add('is-error');
                }
            } finally {
                if (submitButton) {
                    submitButton.disabled = false;
                }
            }
        });
    });
});