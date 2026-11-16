<?php
/**
 * NinoWeb: selected client projects.
 */
$images_base = trailingslashit(get_theme_file_uri('/assets/images'));

$projects = [
    [
        'key'   => 'buenas_noches',
        'title' => 'Buenas Noches',
        'image' => 'buenas-noches',
        'url'   => 'https://buenasnoches.ca/',
    ],
    [
        'key'   => 'australian_stars',
        'title' => 'Australian Property Stars',
        'image' => 'australian-stars',
        'url'   => 'https://australianpropertystars.com/',
    ],
    [
        'key'   => 'cardoctor',
        'title' => 'Sun Auto Mitsuke',
        'image' => 'cardoctor',
        'url'   => 'https://cardoctor.jp/', // Confirm the rebuilt site is live before publishing.
    ],
];
?>

<section id="projects" class="projects section">
    <div class="container">
        <p class="section-eyebrow">
            <?php echo esc_html(ninoweb_text('projects_eyebrow')); ?>
        </p>

        <h2><?php echo esc_html(ninoweb_text('projects_heading')); ?></h2>

        <p class="projects-intro">
            <?php echo esc_html(ninoweb_text('projects_intro')); ?>
        </p>

        <div class="projects-grid">
            <?php foreach ($projects as $index => $project) :
                $key       = $project['key'];
                $image     = $project['image'];
                $image_url = $images_base . $image;
                $srcset    = sprintf(
                    '%1$s 480w, %2$s 768w, %3$s 1200w',
                    $image_url . '-480.webp',
                    $image_url . '-768.webp',
                    $image_url . '-1200.webp'
                );
            ?>
                <article class="project-card<?php echo $index === 0 ? ' project-card-featured' : ''; ?>">
                    <div class="project-image">
                        <img
                            src="<?php echo esc_url($image_url . '-1200.webp'); ?>"
                            srcset="<?php echo esc_attr($srcset); ?>"
                            sizes="<?php echo esc_attr($index === 0
                                ? '(max-width: 720px) calc(100vw - 40px), (max-width: 1280px) calc(100vw - 48px), 1230px'
                                : '(max-width: 720px) calc(100vw - 40px), (max-width: 1280px) calc((100vw - 76px) / 2), 610px'
                            ); ?>"
                            width="1200"
                            height="675"
                            alt="<?php echo esc_attr(ninoweb_text('project_' . $key . '_alt')); ?>"
                            loading="lazy"
                            decoding="async"
                        >
                    </div>

                    <div class="project-content">
                        <p class="project-label">
                            <?php echo esc_html(ninoweb_text('project_' . $key . '_label')); ?>
                        </p>

                        <h3><?php echo esc_html($project['title']); ?></h3>

                        <p class="project-location">
                            <?php echo ninoweb_icon('location-dot', 'solid', ''); ?>
                            <span><?php echo esc_html(ninoweb_text('project_' . $key . '_location')); ?></span>
                        </p>

                        <p class="project-description">
                            <?php echo esc_html(ninoweb_text('project_' . $key . '_description')); ?>
                        </p>

                        <div class="project-footer">
                            <div class="project-tags">
                                <?php foreach (['one', 'two', 'three'] as $ordinal) : ?>
                                    <span>
                                        <?php echo esc_html(ninoweb_text('project_' . $key . '_tag_' . $ordinal)); ?>
                                    </span>
                                <?php endforeach; ?>
                            </div>

                            <?php if (!empty($project['url'])) : ?>
                                <a
                                    class="project-link"
                                    href="<?php echo esc_url($project['url']); ?>"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                >
                                    <?php echo esc_html(ninoweb_text('project_view')); ?>
                                    <?php echo ninoweb_icon('arrow-up-right-from-square', 'solid', ''); ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <div class="projects-cta">
            <p><?php echo esc_html(ninoweb_text('projects_cta_text')); ?></p>
            <a class="projects-cta-button" href="#contact">
                <?php echo esc_html(ninoweb_text('projects_cta_button')); ?>
                <?php echo ninoweb_icon('arrow-right', 'solid', ''); ?>
            </a>
        </div>
    </div>
</section>
