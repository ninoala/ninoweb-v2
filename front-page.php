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

        <ul class="hero-services">
            <li>
                <i class="fa-solid fa-bezier-curve"></i>
                Custom Design
            </li>

            <li>
                <i class="fa-solid fa-mobile-screen-button"></i>
                Mobile Friendly
            </li>

            <li>
                <i class="fa-brands fa-searchengin"></i>
                SEO Optimized
            </li>

            <li>
                <i class="fa-solid fa-screwdriver-wrench"></i>
                Ongoing Support
            </li>
</ul>
    </section>

    <section id="services" class="services section">
    <div class="container">
        <p class="section-eyebrow">Services</p>
        <h2>Helping small businesses succeed online</h2>

        <div class="services-grid">

            <article class="service-card">
                <div class="service-icon">
                    <i class="fa-solid fa-globe"></i></div>
                <h3>Custom WordPress Websites</h3>
                <p>Professional websites tailored to your business, optimized for mobile devices, search engines, and a great user experience.</p>
                <ul class="service-features">
                    <li>Mobile Friendly</li>
                    <li>Fast Loading</li>
                    <li>Easy to Update</li>
                </ul>
            </article>

            <article class="service-card">
                <div class="service-icon">
                    <i class="fa-solid fa-arrows-rotate"></i>
                </div>
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
                <div class="service-icon">
                    <i class="fa-solid fa-screwdriver-wrench"></i>
                </div>
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
                <div class="project-image">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/cardoctor.png"
                        alt="CarDoctor Website Screenshot"
                    >
                </div>

                <div class="project-content">
                    <p class="project-label">Client Project</p>
                    <h3>CarDoctor</h3>
                    <p>Custom WordPress website for an automotive service business.</p>
                </div>
            </article>

            <article class="project-card project-card-large">
                <div class="project-image">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/nexxter.png"
                        alt="Nexter Website Screenshot"
                    >
                </div>

                <div class="project-content">
                    <p class="project-label">Concept Build</p>
                    <h3>Real Estate Website (Nexter)</h3>
                    <p>Responsive layout for listings, agent branding, and lead generation.</p>
                </div>
            </article>

            <article class="project-card project-card-large">
                <div class="project-image">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/natours.png"
                        alt="Natours Website Screenshot"
                    >
                </div>

                <div class="project-content">
                    <p class="project-label">Concept Build</p>
                    <h3>Natours</h3>
                    <p>Travel landing page concept with strong visuals and clean sections.</p>
                </div>
            </article>

            <article class="project-card project-card-large">
                <div class="project-image">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/ynino.png"
                        alt="Portfolio Website Screenshot"
                    >
                </div>

                <div class="project-content">
                    <p class="project-label">React Portfolio</p>
                    <h3>YNino.dev</h3>
                    <p>Personal developer portfolio built with React and Sass.</p>
                </div>
            </article>

            <article class="project-card project-card-large">
                <div class="project-image">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/trillo.png"
                        alt="Portfolio Website Screenshot"
                    >
                </div>

                <div class="project-content">
                    <p class="project-label">Concept Build</p>
                    <h3>Trillo Booking App</h3>
                    <p>Something will be here later</p>
                </div>
            </article>
        </div>
    </div>
</section>
<section id="about" class="about section">
    <div class="container">

        <p class="section-eyebrow">About</p>

        <h2 class="about-heading">
            Web Developer<br>
            Based in Ottawa
        </h2>

        <div class="about-grid">

            <div class="about-panel">

                <div class="about-brand">
                    <h3>Nino<span>Web</span></h3>
                    <p>WordPress & React Development</p>
                </div>

                <ul class="about-services">
                    <li><i class="fa-solid fa-desktop"></i> Custom WordPress Development</li>
                    <li><i class="fa-solid fa-arrows-rotate"></i> Website Redesigns & Modernization</li>
                    <li><i class="fa-solid fa-mobile-screen-button"></i> Responsive Design & Mobile Friendly</li>
                    <li><i class="fa-solid fa-shield-halved"></i> Ongoing Support & Maintenance</li>
                </ul>

                <div class="about-location">
                    <i class="fa-solid fa-location-dot"></i>

                    <div>
                        <strong>Ottawa, Ontario</strong>
                        <p>Available for new projects</p>
                    </div>
                </div>

            </div>

            <div class="about-content">

                <h3>Helping Small Businesses Build Their Online Presence</h3>

                <div class="about-line"></div>

                <p>
                    I started NinoWeb to help small businesses create modern,
                    professional websites without the complexity and cost of
                    large agencies.
                </p>

                <p>
                    My focus is on clean design, responsive development,
                    performance, and long-term support. Whether you need a new
                    website or want to modernize an existing one, I can help
                    bring your ideas to life.
                </p>

                <p>
                    Every project is built with the goal of creating a website
                    that looks professional, builds trust, and helps your
                    business grow online.
                </p>

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
                    Start Your Project
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