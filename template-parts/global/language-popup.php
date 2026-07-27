<?php

if (! defined('ABSPATH')) {
    exit;
}

$current_page_id = get_queried_object_id();

$get_language_url = static function ($language) use ($current_page_id) {
    $fallback_url = function_exists('pll_home_url')
        ? pll_home_url($language)
        : home_url('/');

    if (
        ! $current_page_id ||
        ! function_exists('pll_get_post')
    ) {
        return $fallback_url;
    }

    $translated_page_id = pll_get_post(
        $current_page_id,
        $language
    );

    if (! $translated_page_id) {
        return $fallback_url;
    }

    $translated_url = get_permalink($translated_page_id);

    return $translated_url ?: $fallback_url;
};

$english_url  = $get_language_url('en');
$japanese_url = $get_language_url('ja');

?>

<div
    class="language-popup"
    data-language-popup
    role="dialog"
    aria-modal="true"
    aria-labelledby="language-popup-title"
    aria-describedby="language-popup-description"
    hidden
>
    <div
        class="language-popup__backdrop"
        aria-hidden="true"
    ></div>

    <div class="language-popup__card">
        <div
            class="language-popup__brand"
            aria-hidden="true"
        >
            <span class="language-popup__brand-mark">
                N<span>W</span>
            </span>

            <span class="language-popup__brand-name">
                Nino<span>Web</span>
            </span>
        </div>

        <h2 id="language-popup-title">
            Choose your language

            <span lang="ja">
                言語を選択してください
            </span>
        </h2>

        <p id="language-popup-description">
            Select your preferred language to continue.

            <span lang="ja">
                ご希望の言語を選択してください。
            </span>
        </p>

        <div class="language-popup__choices">
            <a
                class="language-popup__choice"
                href="<?php echo esc_url($english_url); ?>"
                data-language-choice="en"
                hreflang="en"
            >
                <span class="language-popup__choice-name">
                    English
                </span>

                <span
                    class="language-popup__choice-arrow"
                    aria-hidden="true"
                >
                    <i class="fa-solid fa-arrow-right"></i>
                </span>
            </a>

            <a
                class="language-popup__choice"
                href="<?php echo esc_url($japanese_url); ?>"
                data-language-choice="ja"
                hreflang="ja"
                lang="ja"
            >
                <span class="language-popup__choice-name">
                    日本語
                </span>

                <span
                    class="language-popup__choice-arrow"
                    aria-hidden="true"
                >
                    <i class="fa-solid fa-arrow-right"></i>
                </span>
            </a>
        </div>
    </div>
</div>