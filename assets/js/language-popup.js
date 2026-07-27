document.addEventListener('DOMContentLoaded', () => {
    const popup = document.querySelector(
        '[data-language-popup]'
    );

    if (!popup) return;

    const storageKey = 'ninoweb_language';

    const choices = Array.from(
        popup.querySelectorAll(
            '[data-language-choice]'
        )
    );

    const getSavedLanguage = () => {
        try {
            return window.localStorage.getItem(
                storageKey
            );
        } catch {
            return null;
        }
    };

    const saveLanguage = (language) => {
        if (!language) return;

        try {
            window.localStorage.setItem(
                storageKey,
                language
            );
        } catch {
            // The link will still work if storage
            // is unavailable.
        }
    };

    const savedLanguage = getSavedLanguage();

const pageLanguage = (
    document.documentElement.lang || ''
).toLowerCase().startsWith('ja')
    ? 'ja'
    : 'en';

if (
    savedLanguage &&
    savedLanguage !== pageLanguage
) {
    const savedChoice = choices.find(
        (choice) =>
            choice.dataset.languageChoice ===
            savedLanguage
    );

    if (savedChoice?.href) {
        window.location.replace(savedChoice.href);
        return;
    }
}

if (!savedLanguage) {
    popup.hidden = false;

    document.body.classList.add(
        'has-language-popup'
    );

    window.requestAnimationFrame(() => {
        choices[0]?.focus();
    });
}

    choices.forEach((choice) => {
        choice.addEventListener('click', () => {
            saveLanguage(
                choice.dataset.languageChoice
            );
        });
    });

    const existingLanguageLinks =
        document.querySelectorAll(
            [
                '.lang-item-en a',
                '.lang-item-ja a',
                'a[hreflang^="en"]',
                'a[hreflang^="ja"]',
            ].join(',')
        );

    existingLanguageLinks.forEach((link) => {
        if (link.closest('[data-language-popup]')) {
            return;
        }

        link.addEventListener('click', () => {
            const hreflang = (
                link.getAttribute('hreflang') || ''
            ).toLowerCase();

            let language = '';

            if (
                link.closest('.lang-item-ja') ||
                hreflang.startsWith('ja')
            ) {
                language = 'ja';
            } else if (
                link.closest('.lang-item-en') ||
                hreflang.startsWith('en')
            ) {
                language = 'en';
            }

            saveLanguage(language);
        });
    });
});