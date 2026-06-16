<?php get_header(); ?>

<main>
    <section class="hero">
        <div class="container hero-inner">
            <div class="hero-content">
                <p class="eyebrow">WordPress & React Development</p>

                <h1><?php echo esc_html__('Professional Websites That Help Businesses Grow', 'ninoweb'); ?></h1>

                <p class="hero-text">
                    <?php echo esc_html__('Modern, fast, mobile-friendly websites built to help your business look professional and get more inquiries.', 'ninoweb'); ?>
                </p>

                <div class="hero-actions">
                    <a href="#contact" class="btn btn-primary">Get a Free Quote</a>
                    <a href="#projects" class="btn btn-secondary">View Work</a>
                </div>
            </div>

            <div class="hero-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/nexter.png"alt="Nexter Website Screenshot">
            </div>
        </div>
    </section>

    <section id="services" class="services section">
    <div class="container">
        <p class="section-eyebrow">Services</p>
        <h2>Helping small businesses succeed online</h2>

        <div class="services-grid">

            <article class="service-card">
                <div class="service-icon">🌐</div>
                <h3>Custom WordPress Websites</h3>
                <p>Professional websites tailored to your business, optimized for mobile devices, search engines, and a great user experience.</p>
                <ul class="service-features">
                    <li>Mobile Friendly</li>
                    <li>Fast Loading</li>
                    <li>Easy to Update</li>
                </ul>
            </article>

            <article class="service-card">
                <div class="service-icon">🔄</div>
                <h3>Website Redesigns & Modernization</h3>
                <p>
                Transform outdated websites into modern, responsive experiences
                that build trust and attract customers.
                </p>
                <ul class="service-features">
                    <li>Modern Design</li>
                    <li>Mobile Responsive</li>
                    <li>Improved User Experience</li>
                </ul>
            </article>

            <article class="service-card">
                <div class="service-icon">🛠</div>
                <h3>Maintenance & Support</h3>
                <p>
                Ongoing updates, content changes, troubleshooting,
                backups, and website improvements when you need them.
                </p>
                <ul class="service-features">
                    <li>Content Updates</li>
                    <li>Security & Backups</li>
                    <li>Fast Support</li>
                </ul>
            </article>

        </div>
    </div>
</section>
<section id="projects" class="projects section">
    <div class="container">
        <p class="section-eyebrow">Featured Work</p>
        <h2>Real projects and polished concept builds</h2>

        <div class="projects-grid">
            <article class="project-card project-card-large">
                <div class="project-image"></div>
                <div class="project-content">
                    <p class="project-label">Client Project</p>
                    <h3>CarDoctor</h3>
                    <p>Custom WordPress website for an automotive service business.</p>
                </div>
            </article>

            <article class="project-card">
                <div class="project-image"></div>
                <div class="project-content">
                    <p class="project-label">Concept Build</p>
                    <h3>Real Estate Website</h3>
                    <p>Responsive layout for listings, agent branding, and lead generation.</p>
                </div>
            </article>

            <article class="project-card">
                <div class="project-image"></div>
                <div class="project-content">
                    <p class="project-label">Concept Build</p>
                    <h3>Natours</h3>
                    <p>Travel landing page concept with strong visuals and clean sections.</p>
                </div>
            </article>

            <article class="project-card">
                <div class="project-image"></div>
                <div class="project-content">
                    <p class="project-label">React Portfolio</p>
                    <h3>YNino.dev</h3>
                    <p>Personal developer portfolio built with React and Sass.</p>
                </div>
            </article>

            <article class="project-card">
                <div class="project-image"></div>
                <div class="project-content">
                    <p class="project-label">Concept Build</p>
                    <h3>Restaurant Website</h3>
                    <p>Modern restaurant layout for menus, hours, location, and reservations.</p>
                </div>
            </article>
        </div>
    </div>
</section>
<section id="about" class="about section">
    <div class="container">

        <div class="about-grid">

            <div class="about-content">
                <p class="section-eyebrow">About</p>

                <h2>Hi, I'm Yegor.</h2>

                <p>
                    I'm a web developer based in Ottawa, helping small businesses
                    create modern, professional websites that build trust and attract customers.
                </p>

                <p>
                    I specialize in WordPress development, responsive design,
                    website redesigns, and ongoing website support.
                </p>

                <div class="about-skills">
                    <span>WordPress</span>
                    <span>React</span>
                    <span>JavaScript</span>
                    <span>PHP</span>
                    <span>Sass</span>
                    <span>SEO</span>
                </div>
            </div>

            <div class="about-card">
                <h3>Why work with NinoWeb?</h3>

                <ul>
                    <li>Custom-built websites</li>
                    <li>Mobile-friendly design</li>
                    <li>Fast and responsive support</li>
                    <li>Modern design principles</li>
                    <li>Ongoing maintenance available</li>
                </ul>
            </div>

        </div>

    </div>
</section>
<section id="contact" class="contact section">
    <div class="container">

        <div class="contact-wrapper">

            <p class="section-eyebrow">Contact</p>

            <h2>Ready to start your project?</h2>

            <p class="contact-text">
                Whether you need a new website, a redesign, or ongoing support,
                I'd be happy to discuss your goals and provide a free quote.
            </p>

            <div class="contact-actions">
                <a href="mailto:hello@ninoweb.net" class="btn btn-primary">
                    Get a Free Quote
                </a>

                <a href="#projects" class="btn btn-secondary">
                    View Projects
                </a>
            </div>

        </div>

    </div>
</section>
</main>

<?php get_footer(); ?>