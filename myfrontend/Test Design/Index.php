<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One Common Portal | Brunei's Integrated Business Platform</title>
    <meta name="description"
        content="Brunei's unified platform for business registration, tax services, and corporate compliance under MOFE">

    <!-- Preload critical assets -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" as="style">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"
        as="style">
    <link rel="preload" href="https://unpkg.com/aos@2.3.1/dist/aos.css" as="style">

    <!-- Favicon with dark mode support -->
    <link rel="icon" href="img/favicon.ico" sizes="any">
    <link rel="icon" href="img/icon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="manifest" href="site.webmanifest">
    <meta name="theme-color" content="#011627">

    <!-- CSS -->
    <link rel="stylesheet" href="animista.css">
    <link rel="stylesheet" href="index-style.css">
    <link rel="stylesheet" href="dark-mode-style.css">
    <link rel="stylesheet" href="vertical-bar-style.css">
    <link rel="stylesheet" href="wordpress-carousel.css">
    <link rel="stylesheet" href="index-GSAP.css">
    <link rel="stylesheet" href="rating-index-style.css">
    <link rel="stylesheet" href="hero-grid-bg.css">
    <!-- <link rel="stylesheet" href="..\css\QR-style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <style>

    </style>
</head>

<body>
    <!-- Skip to Content Link -->
    <a href="#main-content" class="sr-only">Skip to main content</a>

    <!-- Navigation -->
    <nav class="navbar" id="navbar" data-aos="fade-down">
        <div class="container navbar-container">
            <a href="#" class="logo">
                <img src="../img/OCPlong.png" alt="One Common Portal" width="180" height="40" data-aos="fade-right">
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
                <li class="nav-item" data-aos="fade-down" data-aos-delay="100">
                    <a href="Index.php" class="nav-link active">Home</a>
                </li>
                <li class="nav-item" data-aos="fade-down" data-aos-delay="150">
                    <a href="#" class="nav-link">About</a>
                </li>
                <li class="nav-item" data-aos="fade-down" data-aos-delay="200">
                    <a href="FAQ.php" class="nav-link">FAQ</a>
                </li>
                <li class="nav-item" data-aos="fade-down" data-aos-delay="250">
                    <a href="Resource.php" class="nav-link">Resources</a>
                </li>
                <li class="nav-item" data-aos="fade-down" data-aos-delay="300">
                    <a href="News.php" class="nav-link">News</a>
                </li>
                <li class="nav-item" data-aos="fade-down" data-aos-delay="350">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero" id="main-content">
        <!-- Sparkle Animation Background -->
        <div class="sparkle-background" id="sparkle-background"></div>
        <div class="container">
            <div class="hero-content text-focus-in" data-aos="fade-up" data-aos-delay="300">
                <h1 class="hero-title">One Common <span>Portal</span></h1>
                <p class="hero-text">Brunei's unified digital platform for seamless business registration, tax services,
                    and corporate compliance under the Ministry of Finance and Economy.</p>
                <div class="hero-buttons">
                    <a href="Login-page.php" class="btn btn-primary hero-cta" data-aos="zoom-in" data-aos-delay="400">
                        Login <i class="fas fa-arrow-right btn-icon"></i>
                    </a>
                    <a href="Signup-page.php" class="btn btn-secondary hero-cta" data-aos="zoom-in"
                        data-aos-delay="500">
                        Register Now
                    </a>
                </div>
            </div>
        </div>
        <div class="building-container" data-aos="zoom-out" data-aos-delay="1000">
            <div class="building-image-blob">
                <img src="..\img\img-banner-mof.00867b5.png" alt="MOFE Building" class="building-img">
            </div>
        </div>
    </section>


    <!-- Stats Section -->
    <section class="section stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-number" data-count="500">500</div>
                    <div class="stat-label">Active Registered Foreign Companies</div>
                </div>
                <div class="stat-item" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-number" data-count="10000">10000</div>
                    <div class="stat-label">Active Registered Local Companies</div>
                </div>
                <div class="stat-item" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-number" data-count="120000">120000</div>
                    <div class="stat-label">Active Registered Business Names</div>
                </div>
                <div class="stat-item" data-aos="fade-up" data-aos-delay="400">
                    <div class="stat-number" data-count="150000">150000</div>
                    <div class="stat-label">Total Visitor</div>
                </div>
            </div>
        </div>
        <div class="custom-shape-divider-bottom-1745547332">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z"
                    opacity=".25" class="shape-fill"></path>
                <path
                    d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z"
                    opacity=".5" class="shape-fill"></path>
                <path
                    d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </section>

    <!-- About Section -->
    <section class="section about">
        <div class="container">
            <div class="about-container">
                <div class="about-content" data-aos="fade-up">
                    <h2 class="section-title">About The Platform</h2>
                    <p class="about-text mb-md">
                        The One Common Portal (OCP) represents Brunei's commitment to digital transformation,
                        consolidating all Ministry of Finance and Economy services into a single, intuitive platform.
                        Our vision is to streamline business processes through innovative technology while maintaining
                        the highest standards of security and reliability.
                    </p>
                    <div class="about-text mb-lg">
                        <p>Key benefits of our platform include:</p>
                        <ul style="list-style-type: none; margin-top: var(--space-sm);">
                            <li style="display: flex; align-items: flex-start; margin-bottom: var(--space-xs);">
                                <span style="color: var(--accent-teal); margin-right: var(--space-xs);">✓</span>
                                <span>Unified access to all MOFE services</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; margin-bottom: var(--space-xs);">
                                <span style="color: var(--accent-teal); margin-right: var(--space-xs);">✓</span>
                                <span>Real-time application tracking</span>
                            </li>
                            <li style="display: flex; align-items: flex-start; margin-bottom: var(--space-xs);">
                                <span style="color: var(--accent-teal); margin-right: var(--space-xs);">✓</span>
                                <span>Secure document submission</span>
                            </li>
                            <li style="display: flex; align-items: flex-start;">
                                <span style="color: var(--accent-teal); margin-right: var(--space-xs);">✓</span>
                                <span>24/7 accessibility</span>
                            </li>
                        </ul>
                    </div>
                    <a href="#" class="btn btn-primary" data-aos="fade-up" data-aos-delay="100">
                        Learn More <i class="fas fa-chevron-right btn-icon"></i>
                    </a>
                </div>

                <div class="about-image" data-aos="fade-left" data-aos-delay="200">
                    <img src="Dashboard.png" alt="OCP Platform Dashboard" class="floating" width="600" height="400"
                        loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="section features">
        <div class="container features-container">
            <div class="text-center mb-2xl" data-aos="fade-down">
                <h2 class="section-title">Our Key Features</h2>
                <p class="max-w-2xl mx-auto">
                    Discover the comprehensive services designed to simplify your business operations and compliance
                    processes
                </p>
            </div>
            <br>
            <div class="features-grid">
                <div class="feature-card registration" data-aos="zoom-in">
                    <div class="feature-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3 class="feature-title">Business Registration</h3>
                    <p class="feature-description">Register and manage your business entities with our streamlined
                        digital process from incorporation to dissolution.</p>
                </div>

                <div class="feature-card tax" data-aos="zoom-in" data-aos-delay="100">
                    <div class="feature-icon">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                    <h3 class="feature-title">Tax Services</h3>
                    <p class="feature-description">File taxes, make payments, and manage your tax affairs through our
                        integrated tax portal.</p>
                </div>

                <div class="feature-card analytics" data-aos="zoom-in" data-aos-delay="200">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3 class="feature-title">Business Analytics</h3>
                    <p class="feature-description">Access powerful dashboard tools to track and analyze your business
                        performance metrics.</p>
                </div>

                <div class="feature-card license" data-aos="zoom-in" data-aos-delay="300">
                    <div class="feature-icon">
                        <i class="fas fa-file-contract"></i>
                    </div>
                    <h3 class="feature-title">Business Management</h3>
                    <p class="feature-description">Apply for, renew, and track all your business name in one
                        centralized location.</p>
                </div>

                <div class="feature-card alerts" data-aos="zoom-in" data-aos-delay="400">
                    <div class="feature-icon">
                        <i class="fas fa-bell"></i>
                    </div>
                    <h3 class="feature-title">Compliance Alerts</h3>
                    <p class="feature-description">Receive timely notifications for important deadlines and regulatory
                        changes.</p>
                </div>

                <div class="feature-card support" data-aos="zoom-in" data-aos-delay="500">
                    <div class="feature-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h3 class="feature-title">Dedicated Support</h3>
                    <p class="feature-description">24/7 access to our expert support team through multiple channels.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- News Section
    <section class="section">
        <div class="container">
            <div class="text-center mb-2xl" data-aos="fade-down">
                <h2 class="section-title">Latest Updates</h2>
                <p class="max-w-2xl mx-auto">
                    Stay informed with announcements, system updates, and important notices from OCP
                </p>
            </div>

            <div class="news-grid">
                <div class="news-card" data-aos="flip-left">
                    <div class="news-image-container">
                        <img src="../img/OCPlong.png" alt="System Maintenance" class="news-image" width="600"
                            height="400" loading="lazy">
                    </div>
                    <span class="news-date">April 15, 2025</span>
                    <h3 class="news-title">Scheduled System Maintenance</h3>
                    <p class="news-excerpt">Planned maintenance on June 20th from 2AM to 5AM. Some services may be
                        temporarily unavailable during this window.</p>
                    <a href="#" class="news-link">
                        Read more <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="news-card" data-aos="flip-left" data-aos-delay="100">
                    <div class="news-image-container">
                        <img src="../img/OCPlong.png" alt="New Features" class="news-image" width="600" height="400"
                            loading="lazy">
                    </div>
                    <span class="news-date">April 10, 2025</span>
                    <h3 class="news-title">New Tax Filing Features</h3>
                    <p class="news-excerpt">Enhanced tax filing portal now available with new features including bulk
                        uploads and payment scheduling.</p>
                    <a href="#" class="news-link">
                        Read more <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="news-card" data-aos="flip-left" data-aos-delay="200">
                    <div class="news-image-container">
                        <img src="../img/OCPlong.png" alt="Mobile App" class="news-image" width="600" height="400"
                            loading="lazy">
                    </div>
                    <span class="news-date">April 5, 2025</span>
                    <h3 class="news-title">OCP Mobile App Launch</h3>
                    <p class="news-excerpt">Access government services on the go with our new iOS and Android
                        application featuring biometric login.</p>
                    <a href="#" class="news-link">
                        Read more <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="text-center mt-xl" data-aos="fade-up">
                <a href="News.php" class="btn btn-secondary">
                    View All News <i class="fas fa-newspaper btn-icon"></i>
                </a>
            </div>
        </div>
    </section> -->


    <section class="section news-carousel-section">
        <div class="container">
            <div class="text-center mb-2xl" data-aos="fade-down">
                <h2 class="section-title">Latest Updates</h2>
                <p class="max-w-2xl mx-auto">
                    Stay informed with announcements, system updates, and important notices from OCP
                </p>
            </div>

            <div class="ocp-carousel-container">
                <div class="ocp-carousel">
                    <!-- Slides will be injected here by JavaScript -->
                </div>

                <div class="ocp-carousel-controls">
                    <button class="ocp-carousel-prev" aria-label="Previous slide">
                        <svg viewBox="0 0 24 24" width="24" height="24">
                            <path d="M15.41 16.59L10.83 12l4.58-4.59L14 6l-6 6 6 6 1.41-1.41z" />
                        </svg>
                    </button>

                    <div class="ocp-carousel-indicators"></div>

                    <button class="ocp-carousel-next" aria-label="Next slide">
                        <svg viewBox="0 0 24 24" width="24" height="24">
                            <path d="M8.59 16.59L13.17 12 8.59 7.41 10 6l6 6-6 6-1.41-1.41z" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonials Section -->
    <section class="section testimonials">
        <div class="container">
            <div class="text-center mb-2xl" data-aos="fade-down">
                <h2 class="section-title">What Our Users Say</h2>
                <p class="max-w-2xl mx-auto">
                    Trusted by businesses across Brunei Darussalam
                </p>
            </div>

            <div class="features-grid">
                <div class="testimonial-card" data-aos="fade-up">
                    <div class="testimonial-content">
                        "The OCP has transformed how we manage our compliance. What used to take days now happens in
                        minutes with complete transparency throughout the process."
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fas fa-user-circle"></i>
                        </div>
                        <div class="author-info">
                            <div class="author-name">Haji Baqir</div>
                            <div class="author-title">CEO, BAQ Corporation</div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-content">
                        "As a small business owner, the time savings from using OCP are incredible. The interface is
                        intuitive and the step-by-step guides make complex processes simple."
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fas fa-user-circle"></i>
                        </div>
                        <div class="author-info">
                            <div class="author-name">Dayang Baqirah</div>
                            <div class="author-title">Owner, BQR Delight</div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-content">
                        "The analytics dashboard gives us valuable insights into our tax obligations and business
                        performance. This level of integration was unimaginable just a few years ago."
                    </div>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <i class="fas fa-user-circle"></i>
                        </div>
                        <div class="author-info">
                            <div class="author-name">Awang Bakir</div>
                            <div class="author-title">Finance Director, Teknologi Maju Bakir</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="section" style="padding-bottom: 0;">
        <div class="container">
            <div class="card"
                style="background: linear-gradient(135deg, var(--primary-dark) 0%, #03396c 100%); color: var(--primary-light); padding: var(--space-2xl); border-radius: var(--radius-lg); position: relative; overflow: hidden;"
                data-aos="fade-up">
                <div
                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background: url('img/dot-pattern-light.png') center/cover; opacity: 0.05; z-index: 0;">
                </div>
                <div style="position: relative; z-index: 1; text-align: center; max-width: 800px; margin: 0 auto;">
                    <h2 style="font-size: 2rem; margin-bottom: var(--space-md);">Ready to Transform Your Business
                        Experience?</h2>
                    <p style="margin-bottom: var(--space-xl); opacity: 0.9; font-size: 1.125rem;">
                        Join thousands of businesses already benefiting from Brunei's integrated government services
                        platform.
                    </p>
                    <div style="display: flex; gap: var(--space-md); justify-content: center;">
                        <a href="/signup" class="btn btn-primary"
                            style="--btn-bg: var(--accent-orange); --btn-color: var(--primary-dark);">
                            Get Started <i class="fas fa-rocket btn-icon"></i>
                        </a>
                        <a href="dashboard.php" class="btn btn-secondary"
                            style="--btn-bg: transparent; --btn-color: var(--primary-light); --btn-border: 2px solid var(--primary-light);">
                            View Demo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="vertical-bar" data-aos=" fade-left" data-aos-delay="300">
        <a href="#" class="vertical-bar-item platform update" data-tooltip="Login">
            <i class="fa-sharp-duotone fa-solid fa-circle-user"></i>
        </a>
        <a href="#" class="vertical-bar-item social-icon" data-tooltip="Facebook">
            <i class="fab fa-facebook-f"></i>
        </a>

        <a href="#" class="vertical-bar-item social-icon" data-tooltip="Instagram">
            <i class="fab fa-instagram"></i>
        </a>

        <a href="#" class="vertical-bar-item social-icon" data-tooltip="Youtube">
            <i class="fab fa-youtube"></i>
        </a>

        <a href="#" class="vertical-bar-item platform-update" data-tooltip="Platform Updates">
            <i class="fas fa-bell"></i>
            <span class="notification-badge">3</span>
        </a>

        <a href="../Analytics.php" class="vertical-bar-item chart-link" data-tooltip="">
            <i class="fas fa-chart-line"></i>
            <div class="analytics-popup">
                <strong>Site Analytics</strong>
                <div>Visitors: 1,240</div>
                <div>Pageviews: 2480</div>
            </div>
        </a>
        <div class="vertical-bar-item dark-mode-toggle-container">
            <button id="darkModeToggle" aria-label="Toggle dark mode" class="dark-mode-btn">
                <div class="dark-mode-icon">
                    <i class="fas fa-moon"></i>
                </div>
            </button>
        </div>
        <!-- Live Chat
            <a href="#" class="vertical-bar-item live-chat" data-tooltip="Live Chat">
                <i class="fas fa-comment-dots"></i>
            </a> -->

    </div>
    <div class="live-chat-container ">
        <button class="live-chat-button" aria-label="Open live chat">
            <i class="fas fa-headset"></i>
            <span class="notification-badge">0</span>
        </button>
        <div class="chat-window">
            <div class="chat-header">
                <h3>Live Chat Support</h3>
                <button class="close-chat" aria-label="Close chat">×</button>
            </div>
            <div class="chat-body">
                <div class="chat-message agent">
                    <div class="message-content">
                        Hello! How can we help you today?
                    </div>
                </div>
                <div class="typing-indicator">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <div class="chat-footer">
                <input type="text" class="chat-input" placeholder="Type your message..." aria-label="Type your message">
                <button class="send-button" aria-label="Send message">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </div>
        </div>
    </div>


    <div class="rating-widget">
        <div class="close-btn">×</div>
        <p class="prompt">How was your experience?</p>
        <div class="emoji-rating">
            <span data-rating="1">★</span>
            <span data-rating="2">★</span>
            <span data-rating="3">★</span>
            <span data-rating="4">★</span>
            <span data-rating="5">★</span>
        </div>
    </div>

    <!-- QR Popup -->
    <div class="qr-popup">
        <div class="qr-backdrop"></div>
        <div class="qr-box">
            <span class="close-qr">×</span>
            <h3>Thanks for your feedback!</h3>
            <div class="qr-code">
                <img src="qr-ocp-survey.png" alt="QR Code">
            </div>
            <p>Scan to visit our website</p>
        </div>
    </div>



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
                        <li class="footer-link"><a href="#">Resources</a></li>
                        <li class="footer-link"><a href="#">News</a></li>
                        <li class="footer-link"><a href="#">Contact</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h3 class="footer-title">Services</h3>
                    <ul class="footer-links">
                        <li class="footer-link"><a href="#">Business Registration</a></li>
                        <li class="footer-link"><a href="#">Tax Filing</a></li>
                        <li class="footer-link"><a href="#">Business Name Renewal</a></li>
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
            <div class="visitor-stats">
                <h3 class="footer-title">Visitor Statistics</h3>
                <div class="stats-chart">
                    <div class="chart-container">
                        <div class="chart-bars">
                            <div class="chart-bar" data-year="2022" data-value="150000">
                                <div class="bar-fill"
                                    style="height: 50%; background: linear-gradient(to top, var(--accent-teal), #2ec4b680);">
                                </div>
                                <span class="bar-label">150K</span>
                                <span class="year-label">2022</span>
                            </div>
                            <div class="chart-bar" data-year="2023" data-value="320000">
                                <div class="bar-fill"
                                    style="height: 70%; background: linear-gradient(to top, var(--accent-teal), #2ec4b680);">
                                </div>
                                <span class="bar-label">320K</span>
                                <span class="year-label">2023</span>
                            </div>
                            <div class="chart-bar" data-year="2024" data-value="545000">
                                <div class="bar-fill"
                                    style="height: 90%; background: linear-gradient(to top, var(--accent-orange), #ff9f1c80);">
                                </div>
                                <span class="bar-label">545K</span>
                                <span class="year-label">2024</span>
                            </div>
                            <div class="chart-bar" data-year="2025" data-value="785000">
                                <div class="bar-fill"
                                    style="height: 100%; background: linear-gradient(to top, var(--accent-orange), #ff9f1c80);">
                                </div>
                                <span class="bar-label">785K</span>
                                <span class="year-label">2025</span>
                            </div>
                            <div class="chart-bar" data-year="2026" data-value="1200000">
                                <div class="bar-fill"
                                    style="height: 100%; background: linear-gradient(to top, var(--accent-red), #e71d3680);">
                                    <div class="projection-pulse"></div>
                                </div>
                                <span class="bar-label">1.20M*</span>
                                <span class="year-label">2026</span>
                            </div>
                        </div>
                        <div class="chart-axis"></div>
                    </div>
                    <div class="chart-legend">
                        <span><i class="fas fa-square" style="color: var(--accent-teal);"></i> Actual Visitors</span>
                        <span><i class="fas fa-square" style="color: var(--accent-orange);"></i> Recorded
                            Visitors</span>
                        <span><i class="fas fa-square" style="color: var(--accent-red);"></i> Projected Visitors</span>
                        <small class="projection-note">*2025 data is projected based on current growth</small>
                    </div>
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

    <!-- AOS Script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <!-- GSAP Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/Flip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>


    <script src="wordpress-fetch.js"></script>
    <script src="vertical-bar-script.js"></script>
    <script src="index-script.js"></script>
    <script src="rating-script-index.js"></script>
    <!-- <script src="index-GSAP.js"></script> -->
    <script src="hero-grid-bg.js"></script>
    <script src="visitor-stats-footer.js"></script>
    <script src="dark-mode-script.js"></script>
    <script src="..\Javascript\Home-script-2.js"></script>
</body>

</html>