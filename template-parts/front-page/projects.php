<?php
$images_base = trailingslashit(
    get_theme_file_uri('/assets/images')
);

$make_project_srcset = static function ($image_name) use ($images_base) {
    return sprintf(
        '%1$s 480w, %2$s 768w, %3$s 1200w',
        $images_base . $image_name . '-480.webp',
        $images_base . $image_name . '-768.webp',
        $images_base . $image_name . '-1200.webp'
    );
};

$cardoctor_srcset = $make_project_srcset('cardoctor');
$natours_srcset   = $make_project_srcset('natours');
$nexter_srcset = $make_project_srcset('nexter');
$ynino_srcset  = $make_project_srcset('ynino');
$trillo_srcset = $make_project_srcset('trillo');
?>

<section id="projects" class="projects section">
    <div class="container">
        <p class="section-eyebrow">
            <?php
            echo esc_html(
                ninoweb_text('projects_eyebrow')
            );
            ?>
        </p>

        <h2>
            <?php
            echo esc_html(
                ninoweb_text('projects_heading')
            );
            ?>
        </h2>

        <p class="projects-intro">
            <?php
            echo esc_html(
                ninoweb_text('projects_intro')
            );
            ?>
        </p>

        <div class="projects-grid">

            <!-- CarDoctor -->

            <article class="project-card project-card-large">
                <div class="project-image">
                    <img
                        src="<?php echo esc_url(
                            $images_base . 'cardoctor-1200.webp'
                        ); ?>"
                        srcset="<?php echo esc_attr($cardoctor_srcset); ?>"
                        sizes="(max-width: 767px) calc(100vw - 32px), 270px"
                        width="1200"
                        height="675"
                        alt="<?php echo esc_attr(
                            ninoweb_text('project_cardoctor_alt')
                        ); ?>"
                        loading="lazy"
                        decoding="async"
                    >
                </div>

                <div class="project-content">
                    <p class="project-label">
                        <?php
                        echo esc_html(
                            ninoweb_text('project_cardoctor_label')
                        );
                        ?>
                    </p>

                    <h3>CarDoctor</h3>

                    <p class="project-description">
                        <?php
                        echo esc_html(
                            ninoweb_text(
                                'project_cardoctor_description'
                            )
                        );
                        ?>
                    </p>

                    <div class="project-footer">
                        <div class="project-tags">
                            <span>
                                <?php
                                echo esc_html(
                                    ninoweb_text(
                                        'project_cardoctor_tag_one'
                                    )
                                );
                                ?>
                            </span>

                            <span>
                                <?php
                                echo esc_html(
                                    ninoweb_text(
                                        'project_cardoctor_tag_two'
                                    )
                                );
                                ?>
                            </span>

                            <span>
                                <?php
                                echo esc_html(
                                    ninoweb_text(
                                        'project_cardoctor_tag_three'
                                    )
                                );
                                ?>
                            </span>
                        </div>

                        <a
                            class="project-link"
                            href="https://cardoctor.jp"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            <?php
                            echo esc_html(
                                ninoweb_text('project_view')
                            );
                            ?>

                            <?php echo ninoweb_icon( 'arrow-up-right-from-square', 'solid', '' ); ?>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Nexter -->

            <article class="project-card project-card-large">
                <div class="project-image">
                    <img
                        src="<?php echo esc_url(
                            $images_base . 'nexter-1200.webp'
                        ); ?>"
                        srcset="<?php echo esc_attr($nexter_srcset); ?>"
                        sizes="(max-width: 767px) calc(100vw - 32px), 270px"
                        width="1200"
                        height="675"
                        alt="<?php echo esc_attr(
                            ninoweb_text('project_nexter_alt')
                        ); ?>"
                        loading="lazy"
                        decoding="async"
                    >
                </div>

                <div class="project-content">
                    <p class="project-label">
                        <?php
                        echo esc_html(
                            ninoweb_text('project_nexter_label')
                        );
                        ?>
                    </p>

                    <h3>
                        <?php
                        echo esc_html(
                            ninoweb_text('project_nexter_title')
                        );
                        ?>
                    </h3>

                    <p class="project-description">
                        <?php
                        echo esc_html(
                            ninoweb_text(
                                'project_nexter_description'
                            )
                        );
                        ?>
                    </p>

                    <div class="project-footer">
                        <div class="project-tags">
                            <span>
                                <?php
                                echo esc_html(
                                    ninoweb_text(
                                        'project_nexter_tag_one'
                                    )
                                );
                                ?>
                            </span>

                            <span>
                                <?php
                                echo esc_html(
                                    ninoweb_text(
                                        'project_nexter_tag_two'
                                    )
                                );
                                ?>
                            </span>

                            <span>
                                <?php
                                echo esc_html(
                                    ninoweb_text(
                                        'project_nexter_tag_three'
                                    )
                                );
                                ?>
                            </span>
                        </div>

                        <a
                            class="project-link"
                            href="https://ynino.dev/nexter"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            <?php
                            echo esc_html(
                                ninoweb_text('project_view')
                            );
                            ?>

                            <?php echo ninoweb_icon( 'arrow-up-right-from-square', 'solid', '' ); ?>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Natours -->

            <article class="project-card">
                <div class="project-image">
                    <img
                        src="<?php echo esc_url(
                            $images_base . 'natours-1200.webp'
                        ); ?>"
                        srcset="<?php echo esc_attr($natours_srcset); ?>"
                        sizes="(max-width: 767px) calc(100vw - 32px), 220px"
                        width="1200"
                        height="675"
                        alt="<?php echo esc_attr(
                            ninoweb_text('project_natours_alt')
                        ); ?>"
                        loading="lazy"
                        decoding="async"
                    >
                </div>

                <div class="project-content">
                    <p class="project-label">
                        <?php
                        echo esc_html(
                            ninoweb_text('project_natours_label')
                        );
                        ?>
                    </p>

                    <h3>Natours</h3>

                    <p class="project-description">
                        <?php
                        echo esc_html(
                            ninoweb_text(
                                'project_natours_description'
                            )
                        );
                        ?>
                    </p>

                    <div class="project-footer">
                        <div class="project-tags">
                            <span>
                                <?php
                                echo esc_html(
                                    ninoweb_text(
                                        'project_natours_tag_one'
                                    )
                                );
                                ?>
                            </span>

                            <span>
                                <?php
                                echo esc_html(
                                    ninoweb_text(
                                        'project_natours_tag_two'
                                    )
                                );
                                ?>
                            </span>

                            <span>
                                <?php
                                echo esc_html(
                                    ninoweb_text(
                                        'project_cardoctor_tag_three'
                                    )
                                );
                                ?>
                            </span>
                        </div>

                        <a
                            class="project-link"
                            href="https://ynino.dev/natours"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            <?php
                            echo esc_html(
                                ninoweb_text('project_view')
                            );
                            ?>

                            <?php echo ninoweb_icon( 'arrow-up-right-from-square', 'solid', '' ); ?>
                        </a>
                    </div>
                </div>
            </article>

            <!-- YNino -->

            <article class="project-card">
                <div class="project-image">
                    <img
                        src="<?php echo esc_url(
                            $images_base . 'ynino-1200.webp'
                        ); ?>"
                        srcset="<?php echo esc_attr($ynino_srcset); ?>"
                        sizes="(max-width: 767px) calc(100vw - 32px), 220px"
                        width="1200"
                        height="675"
                        alt="<?php echo esc_attr(
                            ninoweb_text('project_ynino_alt')
                        ); ?>"
                        loading="lazy"
                        decoding="async"
                    >
                </div>
                <div class="project-content">
                    <p class="project-label">
                        <?php
                        echo esc_html(
                            ninoweb_text('project_ynino_label')
                        );
                        ?>
                    </p>

                    <h3>ynino.dev</h3>

                    <p class="project-description">
                        <?php
                        echo esc_html(
                            ninoweb_text(
                                'project_ynino_description'
                            )
                        );
                        ?>
                    </p>

                    <div class="project-footer">
                        <div class="project-tags">
                            <span>
                                <?php
                                echo esc_html(
                                    ninoweb_text(
                                        'project_ynino_tag_one'
                                    )
                                );
                                ?>
                            </span>

                            <span>
                                <?php
                                echo esc_html(
                                    ninoweb_text(
                                        'project_ynino_tag_two'
                                    )
                                );
                                ?>
                            </span>

                            <span>
                                <?php
                                echo esc_html(
                                    ninoweb_text(
                                        'project_ynino_tag_three'
                                    )
                                );
                                ?>
                            </span>
                        </div>

                        <a
                            class="project-link"
                            href="https://ynino.dev"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            <?php
                            echo esc_html(
                                ninoweb_text('project_view')
                            );
                            ?>

                            <?php echo ninoweb_icon( 'arrow-up-right-from-square', 'solid', '' ); ?>
                        </a>
                    </div>
                </div>
            </article>

            <!-- Trillo -->

            <article class="project-card">
                <div class="project-image">
                    <img
                        src="<?php echo esc_url(
                            $images_base . 'trillo-1200.webp'
                        ); ?>"
                        srcset="<?php echo esc_attr($trillo_srcset); ?>"
                        sizes="(max-width: 767px) calc(100vw - 32px), 220px"
                        width="1200"
                        height="670"
                        alt="<?php echo esc_attr(
                            ninoweb_text('project_trillo_alt')
                        ); ?>"
                        loading="lazy"
                        decoding="async"
                    >
                </div>

                <div class="project-content">
                    <p class="project-label">
                        <?php
                        echo esc_html(
                            ninoweb_text('project_trillo_label')
                        );
                        ?>
                    </p>

                    <h3>
                        <?php
                        echo esc_html(
                            ninoweb_text('project_trillo_title')
                        );
                        ?>
                    </h3>

                    <p class="project-description">
                        <?php
                        echo esc_html(
                            ninoweb_text(
                                'project_trillo_description'
                            )
                        );
                        ?>
                    </p>

                    <div class="project-footer">
                        <div class="project-tags">
                            <span>
                                <?php
                                echo esc_html(
                                    ninoweb_text(
                                        'project_trillo_tag_one'
                                    )
                                );
                                ?>
                            </span>

                            <span>
                                <?php
                                echo esc_html(
                                    ninoweb_text(
                                        'project_trillo_tag_two'
                                    )
                                );
                                ?>
                            </span>

                            <span>
                                <?php
                                echo esc_html(
                                    ninoweb_text(
                                        'project_cardoctor_tag_three'
                                    )
                                );
                                ?>
                            </span>
                        </div>

                        <a
                            class="project-link"
                            href="https://ynino.dev/trillo"
                            target="_blank"
                            rel="noopener noreferrer"
                        >
                            <?php
                            echo esc_html(
                                ninoweb_text('project_view')
                            );
                            ?>

                            <?php echo ninoweb_icon( 'arrow-up-right-from-square', 'solid', '' ); ?>
                        </a>
                    </div>
                </div>
            </article>

        </div>
    </div>
</section>