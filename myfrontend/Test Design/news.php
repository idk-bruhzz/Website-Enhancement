<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News & Announcements | One Common Portal</title>
    <meta name="description" content="Latest updates, news, and announcements from Brunei's One Common Portal">

    <!-- Preload critical assets -->
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" as="style">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
        as="style">
    <link rel="preload" href="https://unpkg.com/aos@2.3.1/dist/aos.css" as="style">

    <!-- Favicon -->
    <link rel="icon" href="../img/favicon.ico" sizes="any">
    <link rel="icon" href="../img/icon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="../img/apple-touch-icon.png">
    <link rel="manifest" href="../site.webmanifest">
    <meta name="theme-color" content="#011627">

    <!-- CSS -->
    <link rel="stylesheet" href="index-style.css">
    <link rel="stylesheet" href="dark-mode-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>
    /* News Page Specific Styles */
    .news-hero {
        background: linear-gradient(135deg, var(--primary-dark) 0%, #03396c 100%);
        color: var(--primary-light);
        padding: 8rem 0 0rem;
        position: relative;
        overflow: hidden;
    }

    .news-hero::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('data:image/svg+xml;utf8,<svg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><path d="M30,50 Q50,30 70,50 T90,50" stroke="%232ec4b6" fill="none" stroke-width="0.5" opacity="0.1"/></svg>');
        opacity: 0.2;
    }

    .news-hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
        max-width: 800px;
        margin: 0 auto;
    }

    .news-hero-title {
        font-size: clamp(2.5rem, 5vw, 3.5rem);
        margin-bottom: var(--space-md);
        background: linear-gradient(90deg, var(--primary-light), var(--accent-teal));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .news-hero-text {
        font-size: 1.25rem;
        opacity: 0.9;
        margin-bottom: var(--space-xl);
    }

    .news-search {
        max-width: 600px;
        margin: 0 auto;
        position: relative;
    }

    .news-search input {
        width: 100%;
        padding: var(--space-sm) var(--space-lg);
        padding-right: 3.5rem;
        border-radius: var(--radius-full);
        border: none;
        background: rgba(255, 255, 255, 0.15);
        backdrop-filter: blur(5px);
        color: var(--primary-light);
        font-size: 1rem;
        transition: all var(--transition-2);
    }

    .news-search input::placeholder {
        color: rgba(255, 255, 255, 0.7);
    }

    .news-search input:focus {
        outline: none;
        background: rgba(255, 255, 255, 0.25);
        box-shadow: 0 0 0 2px var(--accent-teal);
    }

    .news-search button {
        position: absolute;
        right: var(--space-sm);
        top: 50%;
        transform: translateY(-50%);
        background: transparent;
        border: none;
        color: var(--primary-light);
        cursor: pointer;
    }

    .news-categories {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: var(--space-sm);
        margin: var(--space-xl) 0;
    }

    .news-category {
        padding: var(--space-xs) var(--space-lg);
        border-radius: var(--radius-full);
        background: rgba(255, 255, 255, 0.1);
        color: var(--primary-light);
        font-weight: 500;
        transition: all var(--transition-2);
        cursor: pointer;
        border: 1px solid transparent;
    }

    .news-category:hover,
    .news-category.active {
        background: var(--accent-teal);
        color: var(--primary-dark);
        transform: translateY(-2px);
    }

    .news-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(min(350px, 100%), 1fr));
        gap: var(--space-xl);
        margin: var(--space-2xl) 0;
    }

    .news-card {
        background: var(--primary-light);
        border-radius: var(--radius-lg);
        overflow: hidden;
        box-shadow: var(--shadow-md);
        transition: all var(--transition-3);
        display: flex;
        flex-direction: column;
        height: 100%;
    }

    .news-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-lg);
    }

    .news-card.featured {
        grid-column: span 2;
        flex-direction: row;
    }

    .news-image-container {
        position: relative;
        overflow: hidden;
        aspect-ratio: 16/9;
    }

    .featured .news-image-container {
        aspect-ratio: unset;
        flex: 1;
    }

    .news-image {
        width: 100%;
        height: 100%;
        object-fit: fit;
        transition: transform var(--transition-3);
    }

    .news-card:hover .news-image {
        transform: scale(1.05);
    }

    .news-badge {
        position: absolute;
        top: var(--space-sm);
        left: var(--space-sm);
        background: var(--accent-orange);
        color: var(--primary-dark);
        padding: var(--space-3xs) var(--space-sm);
        border-radius: var(--radius-sm);
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        z-index: 2;
    }

    .news-content {
        padding: var(--space-lg);
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    .featured .news-content {
        flex: 1;
        max-width: 50%;
    }

    .news-meta {
        display: flex;
        align-items: center;
        gap: var(--space-md);
        margin-bottom: var(--space-sm);
        font-size: 0.875rem;
        color: var(--text-secondary);
    }

    .news-date {
        display: flex;
        align-items: center;
        gap: var(--space-2xs);
    }

    .news-category-tag {
        background: var(--accent-teal-20);
        color: var(--accent-teal);
        padding: var(--space-3xs) var(--space-sm);
        border-radius: var(--radius-sm);
        font-size: 0.75rem;
        font-weight: 600;
    }

    .news-title {
        font-size: 1.5rem;
        margin-bottom: var(--space-sm);
        line-height: 1.3;
    }

    .featured .news-title {
        font-size: 1.75rem;
    }

    .news-excerpt {
        color: var(--text-secondary);
        margin-bottom: var(--space-md);
        flex: 1;
    }

    .news-link {
        display: inline-flex;
        align-items: center;
        gap: var(--space-2xs);
        color: var(--accent-teal);
        font-weight: 600;
        transition: all var(--transition-2);
    }

    .news-link:hover {
        color: var(--accent-orange);
        gap: var(--space-xs);
    }

    .news-pagination {
        display: flex;
        justify-content: center;
        gap: var(--space-sm);
        margin: var(--space-2xl) 0;
    }

    .page-link {
        width: 2.5rem;
        height: 2.5rem;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: var(--radius-sm);
        font-weight: 600;
        transition: all var(--transition-2);
    }

    .page-link:hover,
    .page-link.active {
        background: var(--accent-teal);
        color: var(--primary-light);
    }

    .newsletter-section {
        background: linear-gradient(135deg, var(--primary-dark-90) 0%, #03396c 100%);
        color: var(--primary-light);
        padding: var(--space-2xl) 0;
        position: relative;
        overflow: hidden;
    }

    .newsletter-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('data:image/svg+xml;utf8,<svg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="40" stroke="%23ff9f1c" fill="none" stroke-width="1" opacity="0.1"/></svg>');
        opacity: 0.1;
    }

    .newsletter-container {
        position: relative;
        z-index: 2;
        max-width: 800px;
        margin: 0 auto;
        text-align: center;
    }

    .newsletter-title {
        font-size: 1.75rem;
        margin-bottom: var(--space-md);
    }

    .newsletter-text {
        opacity: 0.9;
        margin-bottom: var(--space-lg);
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }

    .newsletter-form {
        display: flex;
        max-width: 500px;
        margin: 0 auto;
        gap: var(--space-sm);
    }

    .newsletter-input {
        flex: 1;
        padding: var(--space-sm) var(--space-md);
        border-radius: var(--radius-md);
        border: none;
        font-family: var(--font-base);
        transition: all var(--transition-2);
    }

    .newsletter-input:focus {
        outline: none;
        box-shadow: 0 0 0 2px var(--accent-teal);
    }

    .newsletter-btn {
        background: var(--accent-orange);
        color: var(--primary-dark);
        font-weight: 600;
        padding: var(--space-sm) var(--space-lg);
        border-radius: var(--radius-md);
        transition: all var(--transition-2);
    }

    .newsletter-btn:hover {
        background: var(--accent-teal);
        transform: translateY(-2px);
    }

    /* Responsive Adjustments */
    @media (max-width: 992px) {
        .news-card.featured {
            grid-column: span 1;
            flex-direction: column;
        }

        .featured .news-image-container {
            aspect-ratio: 16/9;
        }

        .featured .news-content {
            max-width: 100%;
        }
    }

    @media (max-width: 768px) {
        .news-hero {
            padding: 6rem 0 3rem;
        }

        .newsletter-form {
            flex-direction: column;
        }
    }

    @media (max-width: 576px) {
        .news-hero {
            padding: 5rem 0 2rem;
        }

        .news-hero-title {
            font-size: 2rem;
        }

        .news-hero-text {
            font-size: 1.125rem;
        }

        .news-categories {
            justify-content: flex-start;
            overflow-x: auto;
            padding-bottom: var(--space-xs);
            -webkit-overflow-scrolling: touch;
        }

        .news-category {
            white-space: nowrap;
        }
    }
    </style>
</head>

<body>
    <!-- Navigation -->
    <nav class="navbar" id="navbar" data-aos="fade-down">
        <div class="container navbar-container">
            <a href="Index.php" class="logo">
                <img src="../img/OCPlong.png" alt="One Common Portal" width="180" height="40">
            </a>

            <button class="mobile-menu-toggle" id="mobile-menu-toggle" aria-label="Toggle menu" aria-expanded="false"
                aria-controls="nav-menu">
                <span class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </button>

            <ul class="nav-menu" id="nav-menu">
                <li class="nav-item">
                    <a href="Index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="FAQ.php" class="nav-link">FAQ</a>
                </li>
                <li class="nav-item">
                    <a href="Resource.php" class="nav-link">Resources</a>
                </li>
                <li class="nav-item">
                    <a href="News.php" class="nav-link active">News</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- News Hero Section -->
    <section class="news-hero">
        <div class="container">
            <div class="news-hero-content" data-aos="fade-up">
                <h1 class="news-hero-title">News & Announcements</h1>
                <p class="news-hero-text">Stay updated with the latest information, system updates, and important
                    notices from the One Common Portal</p>

                <div class="news-search" data-aos="fade-up" data-aos-delay="100">
                    <input type="text" placeholder="Search news and announcements...">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </div>

                <div class="news-categories" data-aos="fade-up" data-aos-delay="200">
                    <div class="news-category active">All</div>
                    <div class="news-category">Announcements</div>
                    <div class="news-category">System Updates</div>
                    <div class="news-category">Maintenance</div>
                    <div class="news-category">Events</div>
                    <div class="news-category">Regulations</div>
                </div>
            </div>
        </div>

        <!-- Wave divider -->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 150" fill="none" class="wave-divider">
            <path fill="var(--primary-light)"
                d="M0,64L48,80C96,96,192,128,288,128C384,128,480,96,576,96C672,96,768,128,864,138.7C960,149,1056,139,1152,122.7C1248,107,1344,85,1392,74.7L1440,64L1440,150L1392,150C1344,150,1248,150,1152,150C1056,150,960,150,864,150C768,150,672,150,576,150C480,150,384,150,288,150C192,150,96,150,48,150L0,150Z">
            </path>
        </svg>
    </section>

    <!-- Main News Section -->
    <main class="section">
        <div class="container">
            <div class="news-grid">
                <!-- Featured News Card -->
                <article class="news-card featured" data-aos="fade-up">
                    <div class="news-image-container">
                        <img src="../img/OCPlong.png" alt="OCP Mobile App Launch" class="news-image" loading="lazy">
                        <div class="news-badge">Featured</div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-date"><i class="far fa-calendar-alt"></i> June 15, 2025</span>
                            <span class="news-category-tag">System Updates</span>
                        </div>
                        <h2 class="news-title">OCP Mobile App Now Available for Download</h2>
                        <p class="news-excerpt">The official One Common Portal mobile application is now available on
                            both iOS and Android platforms. The app features biometric login, push notifications for
                            important updates, and offline access to key documents. This release marks a significant
                            milestone in our commitment to mobile accessibility.</p>
                        <a href="news-detail.html" class="news-link">
                            Read full story <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>

                <!-- Regular News Cards -->
                <article class="news-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="news-image-container">
                        <img src="../img/OCPlong.png" alt="Enhanced Tax Features" class="news-image" loading="lazy">
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-date"><i class="far fa-calendar-alt"></i> June 10, 2025</span>
                            <span class="news-category-tag">Announcements</span>
                        </div>
                        <h2 class="news-title">Enhanced Tax Filing Features Now Live</h2>
                        <p class="news-excerpt">Our tax portal has been upgraded with new features including bulk
                            uploads, payment scheduling, and real-time calculation previews. These enhancements are part
                            of our continuous effort to simplify tax compliance for businesses of all sizes.</p>
                        <a href="news-detail.html" class="news-link">
                            Read more <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>

                <article class="news-card" data-aos="fade-up" data-aos-delay="150">
                    <div class="news-image-container">
                        <img src="../img/OCPlong.png" alt="System Maintenance" class="news-image" loading="lazy">
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-date"><i class="far fa-calendar-alt"></i> June 5, 2025</span>
                            <span class="news-category-tag">Maintenance</span>
                        </div>
                        <h2 class="news-title">Scheduled System Maintenance Notification</h2>
                        <p class="news-excerpt">Planned maintenance will occur on June 20th from 2AM to 5AM. Some
                            services may be temporarily unavailable during this window. We recommend completing any
                            urgent transactions before this period.</p>
                        <a href="news-detail.html" class="news-link">
                            Read more <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>

                <article class="news-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="news-image-container">
                        <img src="../img/OCPlong.png" alt="Business Seminar" class="news-image" loading="lazy">
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-date"><i class="far fa-calendar-alt"></i> May 28, 2025</span>
                            <span class="news-category-tag">Events</span>
                        </div>
                        <h2 class="news-title">Upcoming Business Compliance Seminar</h2>
                        <p class="news-excerpt">Join us for a free seminar on June 15th covering recent regulatory
                            changes and best practices for using OCP services. The event will feature expert speakers
                            from MOFE and successful local businesses.</p>
                        <a href="news-detail.html" class="news-link">
                            Read more <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>

                <article class="news-card" data-aos="fade-up" data-aos-delay="250">
                    <div class="news-image-container">
                        <img src="../img/OCPlong.png" alt="Regulatory Updates" class="news-image" loading="lazy">
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-date"><i class="far fa-calendar-alt"></i> May 20, 2025</span>
                            <span class="news-category-tag">Regulations</span>
                        </div>
                        <h2 class="news-title">New Business Registration Requirements</h2>
                        <p class="news-excerpt">Effective July 1st, 2025, all new business registrations must include
                            additional documentation for beneficial ownership. These changes align with international
                            standards and enhance transparency.</p>
                        <a href="news-detail.html" class="news-link">
                            Read more <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>

                <article class="news-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="news-image-container">
                        <img src="../img/OCPlong.png" alt="Analytics Dashboard" class="news-image" loading="lazy">
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-date"><i class="far fa-calendar-alt"></i> May 15, 2025</span>
                            <span class="news-category-tag">System Updates</span>
                        </div>
                        <h2 class="news-title">New Analytics Dashboard Released</h2>
                        <p class="news-excerpt">Our new business analytics dashboard provides valuable insights into
                            your tax obligations, license status, and compliance metrics. The tool is available to all
                            registered businesses at no additional cost.</p>
                        <a href="news-detail.html" class="news-link">
                            Read more <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>
            </div>

            <!-- Pagination -->
            <div class="news-pagination" data-aos="fade-up">
                <a href="#" class="page-link"><i class="fas fa-chevron-left"></i></a>
                <a href="#" class="page-link active">1</a>
                <a href="#" class="page-link">2</a>
                <a href="#" class="page-link">3</a>
                <a href="#" class="page-link">4</a>
                <a href="#" class="page-link">5</a>
                <a href="#" class="page-link"><i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
    </main>

    <!-- Newsletter Section -->
    <section class="newsletter-section">
        <div class="container newsletter-container">
            <h2 class="newsletter-title" data-aos="fade-up">Stay Informed</h2>
            <p class="newsletter-text" data-aos="fade-up" data-aos-delay="100">
                Subscribe to our newsletter to receive the latest news, updates, and important announcements directly to
                your inbox.
            </p>
            <form class="newsletter-form" data-aos="fade-up" data-aos-delay="200">
                <input type="email" class="newsletter-input" placeholder="Your email address" required>
                <button type="submit" class="newsletter-btn">Subscribe</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <div class="footer-logo">
                        <img src="../img/OCPlong.png" alt="One Common Portal" width="180" height="40" loading="lazy">
                    </div>
                    <p class="footer-about">
                        The One Common Portal is Brunei's integrated platform for business registration,
                        tax services, and corporate compliance under the Ministry of Finance and Economy.
                    </p>
                    <div class="social-links">
                        <a href="#" class="social-link" aria-label="Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-link" aria-label="Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-link" aria-label="Instagram">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="social-link" aria-label="LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="social-link" aria-label="YouTube">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>

                <div class="footer-col">
                    <h3 class="footer-title">Quick Links</h3>
                    <ul class="footer-links">
                        <li class="footer-link"><a href="Index.php">Home</a></li>
                        <li class="footer-link"><a href="#">About OCP</a></li>
                        <li class="footer-link"><a href="#">Services</a></li>
                        <li class="footer-link"><a href="Resource.php">Resources</a></li>
                        <li class="footer-link"><a href="News.php">News</a></li>
                        <li class="footer-link"><a href="#">Contact</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3 class="footer-title">Services</h3>
                    <ul class="footer-links">
                        <li class="footer-link"><a href="#">Business Registration</a></li>
                        <li class="footer-link"><a href="#">Tax Filing</a></li>
                        <li class="footer-link"><a href="#">License Renewal</a></li>
                        <li class="footer-link"><a href="#">Compliance</a></li>
                        <li class="footer-link"><a href="#">Analytics</a></li>
                        <li class="footer-link"><a href="#">Document Portal</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3 class="footer-title">Contact Us</h3>
                    <ul class="footer-links">
                        <li class="footer-link">
                            <i class="fas fa-map-marker-alt"></i> Ministry of Finance and Economy, Brunei
                        </li>
                        <li class="footer-link">
                            <i class="fas fa-phone"></i> +673 238 1000
                        </li>
                        <li class="footer-link">
                            <i class="fas fa-envelope"></i> info@ocp.gov.bn
                        </li>
                        <li class="footer-link">
                            <i class="fas fa-clock"></i> Mon-Fri: 8AM - 5PM
                        </li>
                        <li class="footer-link">
                            <i class="fas fa-headset"></i> Support: 24/7 Help Center
                        </li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2025 One Common Portal. All Rights Reserved.</p>
                <div class="footer-legal">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Service</a>
                    <a href="#">Accessibility</a>
                    <a href="#">Sitemap</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#" class="back-to-top" id="back-to-top" aria-label="Back to top">
        <i class="fas fa-arrow-up"></i>
    </a>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <script src="wordpress-news-page.js"></script>
    <script>
    // Initialize AOS animation
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true,
        offset: 100
    });

    // Mobile menu toggle
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const navMenu = document.getElementById('nav-menu');

    mobileMenuToggle.addEventListener('click', () => {
        mobileMenuToggle.classList.toggle('active');
        navMenu.classList.toggle('active');
        mobileMenuToggle.setAttribute('aria-expanded', mobileMenuToggle.classList.contains('active'));
    });

    // Back to top button
    const backToTop = document.getElementById('back-to-top');

    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            backToTop.classList.add('visible');
        } else {
            backToTop.classList.remove('visible');
        }
    });

    // Category filter functionality
    const categories = document.querySelectorAll('.news-category');

    categories.forEach(category => {
        category.addEventListener('click', () => {
            categories.forEach(c => c.classList.remove('active'));
            category.classList.add('active');
            // Here you would typically filter news items
            // This is just a placeholder for the functionality
        });
    });

    // Search functionality
    const searchInput = document.querySelector('.news-search input');
    const searchButton = document.querySelector('.news-search button');

    searchButton.addEventListener('click', (e) => {
        e.preventDefault();
        // Here you would typically implement search functionality
        console.log('Searching for:', searchInput.value);
    });

    searchInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            e.preventDefault();
            // Here you would typically implement search functionality
            console.log('Searching for:', searchInput.value);
        }
    });
    </script>
</body>

</html>