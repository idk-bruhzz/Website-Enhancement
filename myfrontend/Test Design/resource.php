<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resources & Guides | One Common Portal</title>
    <meta name="description"
        content="Educational resources, how-to guides, and video tutorials for Brunei's One Common Portal">

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
    /* Resources Page Specific Styles */
    .resources-hero {
        background: linear-gradient(135deg, var(--primary-dark) 0%, #002a4a 100%);
        color: var(--primary-light);
        padding: 8rem 0 0rem;
        position: relative;
        overflow: hidden;
    }

    .resources-hero::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('data:image/svg+xml;utf8,<svg width="120" height="120" viewBox="0 0 120 120" xmlns="http://www.w3.org/2000/svg"><path d="M20,20 L100,20 L100,100 L20,100 Z" stroke="%23ff9f1c" fill="none" stroke-width="1" opacity="0.08"/></svg>');
        opacity: 0.3;
    }

    .resources-hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
        max-width: 800px;
        margin: 0 auto;
    }

    .resources-hero-title {
        font-size: clamp(2.5rem, 5vw, 3.5rem);
        margin-bottom: var(--space-md);
        background: linear-gradient(90deg, var(--accent-orange), var(--accent-teal));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .resources-hero-text {
        font-size: 1.25rem;
        opacity: 0.9;
        margin-bottom: var(--space-xl);
    }

    .wave-divider {
        position: relative;
        overflow: hidden;
    }

    .wave-divider svg {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }

    .wave-divider .shape-fill {
        fill: var(--primary-light);
    }

    /* Resources Grid */
    .resources-container {
        padding: var(--space-2xl) 0;
        background-color: var(--primary-light);
        position: relative;
    }

    .resources-container::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('data:image/svg+xml;utf8,<svg width="60" height="60" viewBox="0 0 60 60" xmlns="http://www.w3.org/2000/svg"><circle cx="10" cy="10" r="2" fill="%23011627" opacity="0.03"/></svg>');
        z-index: 0;
    }

    .resources-categories {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: var(--space-sm);
        margin-bottom: var(--space-2xl);
        position: relative;
        z-index: 1;
    }

    .resources-category {
        padding: var(--space-xs) var(--space-lg);
        border-radius: var(--radius-full);
        background: var(--primary-light);
        color: var(--primary-dark);
        font-weight: 600;
        transition: all var(--transition-2);
        cursor: pointer;
        border: 2px solid var(--primary-dark-20);
        display: flex;
        align-items: center;
        gap: var(--space-xs);
    }

    .resources-category:hover,
    .resources-category.active {
        background: var(--accent-orange);
        color: var(--primary-dark);
        transform: translateY(-2px);
        border-color: transparent;
    }

    .resources-category i {
        font-size: 1.1em;
    }

    .resources-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(min(350px, 100%), 1fr));
        gap: var(--space-xl);
        position: relative;
        z-index: 1;
    }

    .resource-card {
        background: var(--primary-light);
        border-radius: var(--radius-lg);
        overflow: hidden;
        box-shadow: var(--shadow-md);
        transition: all var(--transition-3);
        display: flex;
        flex-direction: column;
        height: 100%;
        border: 1px solid var(--primary-dark-20);
    }

    .resource-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-lg);
        border-color: var(--accent-teal);
    }

    .resource-media {
        position: relative;
        overflow: hidden;
        aspect-ratio: 16/9;
    }

    .resource-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform var(--transition-3);
    }

    .resource-card:hover .resource-image {
        transform: scale(1.05);
    }

    .video-play-button {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 60px;
        height: 60px;
        background: rgba(255, 255, 255, 0.9);
        border-radius: var(--radius-full);
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--accent-orange);
        font-size: 1.5rem;
        transition: all var(--transition-2);
        opacity: 0.9;
    }

    .resource-card:hover .video-play-button {
        background: var(--accent-orange);
        color: var(--primary-light);
        transform: translate(-50%, -50%) scale(1.1);
        opacity: 1;
    }

    .resource-badge {
        position: absolute;
        top: var(--space-sm);
        right: var(--space-sm);
        background: var(--accent-teal);
        color: var(--primary-dark);
        padding: var(--space-3xs) var(--space-sm);
        border-radius: var(--radius-sm);
        font-size: 0.75rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        z-index: 2;
    }

    .resource-content {
        padding: var(--space-lg);
        display: flex;
        flex-direction: column;
        flex: 1;
    }

    .resource-meta {
        display: flex;
        align-items: center;
        gap: var(--space-md);
        margin-bottom: var(--space-sm);
        font-size: 0.875rem;
        color: var(--text-secondary);
    }

    .resource-type {
        display: flex;
        align-items: center;
        gap: var(--space-2xs);
    }

    .resource-title {
        font-size: 1.25rem;
        margin-bottom: var(--space-sm);
        line-height: 1.4;
    }

    .resource-excerpt {
        color: var(--text-secondary);
        margin-bottom: var(--space-md);
        flex: 1;
    }

    .resource-link {
        display: inline-flex;
        align-items: center;
        gap: var(--space-2xs);
        color: var(--accent-teal);
        font-weight: 600;
        transition: all var(--transition-2);
    }

    .resource-link:hover {
        color: var(--accent-orange);
        gap: var(--space-xs);
    }

    /* Download Hub Section */
    .download-hub {
        background: linear-gradient(135deg, var(--primary-dark-90) 0%, #002a4a 100%);
        color: var(--primary-light);
        padding: var(--space-2xl) 0;
        position: relative;
        overflow: hidden;
    }

    .download-hub::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('data:image/svg+xml;utf8,<svg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><path d="M20,50 Q50,20 80,50 T50,80 Q20,50 50,20" stroke="%232ec4b6" fill="none" stroke-width="0.5" opacity="0.1"/></svg>');
        opacity: 0.2;
    }

    .download-hub-container {
        position: relative;
        z-index: 2;
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 var(--space-md);
    }

    .download-hub-title {
        text-align: center;
        font-size: 1.75rem;
        margin-bottom: var(--space-xl);
        position: relative;
        display: inline-block;
        left: 50%;
        transform: translateX(-50%);
    }

    .download-hub-title::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -0.5rem;
        width: 100%;
        height: 0.25rem;
        background: linear-gradient(90deg, var(--accent-orange), var(--accent-teal));
        border-radius: var(--radius-sm);
    }

    .download-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(min(250px, 100%), 1fr));
        gap: var(--space-lg);
    }

    .download-item {
        background: rgba(255, 255, 255, 0.1);
        border-radius: var(--radius-md);
        padding: var(--space-lg);
        transition: all var(--transition-2);
        border: 1px solid rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(5px);
    }

    .download-item:hover {
        background: rgba(255, 255, 255, 0.15);
        transform: translateY(-3px);
        border-color: var(--accent-teal);
    }

    .download-icon {
        font-size: 2rem;
        color: var(--accent-orange);
        margin-bottom: var(--space-sm);
    }

    .download-title {
        font-size: 1.125rem;
        margin-bottom: var(--space-xs);
    }

    .download-meta {
        font-size: 0.875rem;
        opacity: 0.8;
        margin-bottom: var(--space-sm);
    }

    .download-button {
        display: inline-flex;
        align-items: center;
        gap: var(--space-xs);
        color: var(--accent-teal);
        font-weight: 500;
        transition: all var(--transition-2);
    }

    .download-button:hover {
        color: var(--accent-orange);
        gap: var(--space-sm);
    }

    /* Video Modal */
    .video-modal {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(1, 22, 39, 0.9);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: var(--z-modal);
        opacity: 0;
        visibility: hidden;
        transition: all var(--transition-3);
    }

    .video-modal.active {
        opacity: 1;
        visibility: visible;
    }

    .video-modal-content {
        position: relative;
        width: 90%;
        max-width: 900px;
        background: var(--primary-light);
        border-radius: var(--radius-md);
        overflow: hidden;
        transform: translateY(20px);
        transition: all var(--transition-3);
    }

    .video-modal.active .video-modal-content {
        transform: translateY(0);
    }

    .video-container {
        position: relative;
        padding-bottom: 56.25%;
        /* 16:9 aspect ratio */
        height: 0;
        overflow: hidden;
    }

    .video-container iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
    }

    .close-modal {
        position: absolute;
        top: var(--space-sm);
        right: var(--space-sm);
        background: rgba(1, 22, 39, 0.7);
        color: var(--primary-light);
        width: 2.5rem;
        height: 2.5rem;
        border-radius: var(--radius-full);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        cursor: pointer;
        transition: all var(--transition-2);
        z-index: 2;
    }

    .close-modal:hover {
        background: var(--accent-orange);
        transform: rotate(90deg);
    }

    /* Responsive Adjustments */
    @media (max-width: 992px) {
        .resources-grid {
            grid-template-columns: repeat(auto-fill, minmax(min(300px, 100%), 1fr));
        }
    }

    @media (max-width: 768px) {
        .resources-hero {
            padding: 6rem 0 4rem;
        }

        .download-grid {
            grid-template-columns: repeat(auto-fill, minmax(min(200px, 100%), 1fr));
        }
    }

    @media (max-width: 576px) {
        .resources-hero {
            padding: 5rem 0 3rem;
        }

        .resources-hero-title {
            font-size: 2rem;
        }

        .resources-hero-text {
            font-size: 1.125rem;
        }

        .resources-categories {
            justify-content: flex-start;
            overflow-x: auto;
            padding-bottom: var(--space-xs);
            -webkit-overflow-scrolling: touch;
        }

        .resources-category {
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
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="FAQ.php" class="nav-link">FAQ</a>
                </li>
                <li class="nav-item">
                    <a href="Resource.php" class="nav-link active">Resources</a>
                </li>
                <li class="nav-item">
                    <a href="News.php" class="nav-link">News</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Resources Hero Section -->
    <section class="resources-hero">
        <div class="container">
            <div class="resources-hero-content" data-aos="fade-up">
                <h1 class="resources-hero-title">Resources & Guides</h1>
                <p class="resources-hero-text">Access comprehensive guides, video tutorials, and downloadable resources
                    to help you navigate Brunei's One Common Portal services</p>
            </div>
        </div>

        <!-- Wave divider -->
        <svg ns="http://www.w3.org/2000/svg" viewBox="0 0 1440 150" fill="none" class="wave-divider">
            <path fill="var(--primary-light)"
                d="M0,64L48,80C96,96,192,128,288,128C384,128,480,96,576,96C672,96,768,128,864,138.7C960,149,1056,139,1152,122.7C1248,107,1344,85,1392,74.7L1440,64L1440,150L1392,150C1344,150,1248,150,1152,150C1056,150,960,150,864,150C768,150,672,150,576,150C480,150,384,150,288,150C192,150,96,150,48,150L0,150Z">
            </path>
        </svg>

    </section>
    </section>

    <!-- Main Resources Section -->
    <main class="resources-container">
        <div class="container">
            <div class="resources-categories" data-aos="fade-up">
                <div class="resources-category active">
                    <i class="fas fa-star"></i> All Resources
                </div>
                <div class="resources-category">
                    <i class="fas fa-film"></i> Video Guides
                </div>
                <div class="resources-category">
                    <i class="fas fa-file-pdf"></i> PDF Manuals
                </div>
                <div class="resources-category">
                    <i class="fas fa-user-graduate"></i> Training
                </div>
                <div class="resources-category">
                    <i class="fas fa-tools"></i> Technical Docs
                </div>
                <div class="resources-category">
                    <i class="fas fa-gavel"></i> Compliance
                </div>
            </div>

            <div class="resources-grid">
                <!-- Video Resource Card -->
                <article class="resource-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="resource-media">
                        <img src="../img/OCPlong.png" alt="Business Registration Tutorial" class="resource-image"
                            loading="lazy">
                        <div class="video-play-button" data-video-id="dQw4w9WgXcQ">
                            <i class="fas fa-play"></i>
                        </div>
                        <div class="resource-badge">Video</div>
                    </div>
                    <div class="resource-content">
                        <div class="resource-meta">
                            <span class="resource-type"><i class="far fa-clock"></i> 12 min</span>
                        </div>
                        <h3 class="resource-title">Step-by-Step Business Registration Walkthrough</h3>
                        <p class="resource-excerpt">Learn how to register your business from start to finish with this
                            comprehensive video guide covering all the essential steps.</p>
                        <a href="#" class="resource-link watch-video" data-video-id="dQw4w9WgXcQ">
                            Watch Video <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>

                <!-- PDF Resource Card -->
                <article class="resource-card" data-aos="fade-up" data-aos-delay="150">
                    <div class="resource-media">
                        <img src="../img/OCPlong.png" alt="Tax Filing Guide" class="resource-image" loading="lazy">
                    </div>
                    <div class="resource-content">
                        <div class="resource-meta">
                            <span class="resource-type"><i class="far fa-file-pdf"></i> PDF</span>
                        </div>
                        <h3 class="resource-title">Complete Tax Filing Handbook 2025</h3>
                        <p class="resource-excerpt">Official guide covering all tax types, deadlines, and submission
                            procedures for businesses in Brunei.</p>
                        <a href="#" class="resource-link">
                            Download Guide <i class="fas fa-download"></i>
                        </a>
                    </div>
                </article>

                <!-- Video Resource Card -->
                <article class="resource-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="resource-media">
                        <img src="../img/OCPlong.png" alt="License Application Tutorial" class="resource-image"
                            loading="lazy">
                        <div class="video-play-button" data-video-id="9bZkp7q19f0">
                            <i class="fas fa-play"></i>
                        </div>
                        <div class="resource-badge">Video</div>
                    </div>
                    <div class="resource-content">
                        <div class="resource-meta">
                            <span class="resource-type"><i class="far fa-clock"></i> 8 min</span>
                        </div>
                        <h3 class="resource-title">License Application & Renewal Process</h3>
                        <p class="resource-excerpt">Visual guide demonstrating how to apply for and renew all types of
                            business licenses through the portal.</p>
                        <a href="#" class="resource-link watch-video" data-video-id="9bZkp7q19f0">
                            Watch Video <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>

                <!-- Training Resource Card -->
                <article class="resource-card" data-aos="fade-up" data-aos-delay="250">
                    <div class="resource-media">
                        <img src="../img/OCPlong.png" alt="Portal Dashboard Training" class="resource-image"
                            loading="lazy">
                    </div>
                    <div class="resource-content">
                        <div class="resource-meta">
                            <span class="resource-type"><i class="fas fa-chalkboard-teacher"></i> Training</span>
                        </div>
                        <h3 class="resource-title">Mastering the OCP Dashboard</h3>
                        <p class="resource-excerpt">Learn how to navigate and utilize all features of your personalized
                            dashboard for maximum efficiency.</p>
                        <a href="#" class="resource-link">
                            Access Training <i class="fas fa-external-link-alt"></i>
                        </a>
                    </div>
                </article>

                <!-- Technical Resource Card -->
                <article class="resource-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="resource-media">
                        <img src="../img/OCPlong.png" alt="API Documentation" class="resource-image" loading="lazy">
                    </div>
                    <div class="resource-content">
                        <div class="resource-meta">
                            <span class="resource-type"><i class="fas fa-code"></i> Technical</span>
                        </div>
                        <h3 class="resource-title">API Integration Guide for Developers</h3>
                        <p class="resource-excerpt">Technical documentation for integrating your business systems with
                            OCP services through our API.</p>
                        <a href="#" class="resource-link">
                            View Docs <i class="fas fa-book-open"></i>
                        </a>
                    </div>
                </article>

                <!-- Compliance Resource Card -->
                <article class="resource-card" data-aos="fade-up" data-aos-delay="350">
                    <div class="resource-media">
                        <img src="../img/OCPlong.png" alt="Compliance Checklist" class="resource-image" loading="lazy">
                    </div>
                    <div class="resource-content">
                        <div class="resource-meta">
                            <span class="resource-type"><i class="fas fa-clipboard-check"></i> Compliance</span>
                        </div>
                        <h3 class="resource-title">2025 Business Compliance Checklist</h3>
                        <p class="resource-excerpt">Essential checklist to ensure your business meets all regulatory
                            requirements for the current year.</p>
                        <a href="#" class="resource-link">
                            Download Checklist <i class="fas fa-list-check"></i>
                        </a>
                    </div>
                </article>
            </div>
        </div>
    </main>

    <!-- Download Hub Section -->
    <section class="download-hub">
        <div class="download-hub-container">
            <h2 class="download-hub-title" data-aos="fade-up">Download Hub</h2>

            <div class="download-grid" data-aos="fade-up" data-aos-delay="100">
                <div class="download-item">
                    <div class="download-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3 class="download-title">Application Forms</h3>
                    <div class="download-meta">Updated: June 2025</div>
                    <a href="#" class="download-button">
                        Download <i class="fas fa-download"></i>
                    </a>
                </div>

                <div class="download-item">
                    <div class="download-icon">
                        <i class="fas fa-calendar-days"></i>
                    </div>
                    <h3 class="download-title">Tax Calendar</h3>
                    <div class="download-meta">PDF & iCal formats</div>
                    <a href="#" class="download-button">
                        Get Calendar <i class="fas fa-calendar-plus"></i>
                    </a>
                </div>

                <div class="download-item">
                    <div class="download-icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <h3 class="download-title">Analytics Templates</h3>
                    <div class="download-meta">Excel & Google Sheets</div>
                    <a href="#" class="download-button">
                        Download <i class="fas fa-table"></i>
                    </a>
                </div>

                <div class="download-item">
                    <div class="download-icon">
                        <i class="fas fa-mobile-screen"></i>
                    </div>
                    <h3 class="download-title">Mobile App Guide</h3>
                    <div class="download-meta">iOS & Android</div>
                    <a href="#" class="download-button">
                        Get Guide <i class="fas fa-mobile-alt"></i>
                    </a>
                </div>

                <div class="download-item">
                    <div class="download-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3 class="download-title">Business Types</h3>
                    <div class="download-meta">Requirements by sector</div>
                    <a href="#" class="download-button">
                        Download <i class="fas fa-city"></i>
                    </a>
                </div>

                <div class="download-item">
                    <div class="download-icon">
                        <i class="fas fa-language"></i>
                    </div>
                    <h3 class="download-title">Multilingual Guides</h3>
                    <div class="download-meta">Malay, English, Chinese</div>
                    <a href="#" class="download-button">
                        View Options <i class="fas fa-globe"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Modal -->
    <div class="video-modal" id="videoModal">
        <div class="video-modal-content">
            <div class="video-container" id="videoContainer">
                <!-- Video will be injected here -->
            </div>
            <button class="close-modal" id="closeModal">&times;</button>
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
                        <li class="footer-link"><a href="index.php">Home</a></li>
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

    // Video Modal functionality
    const videoModal = document.getElementById('videoModal');
    const videoContainer = document.getElementById('videoContainer');
    const closeModal = document.getElementById('closeModal');
    const watchButtons = document.querySelectorAll('.watch-video, .video-play-button');

    watchButtons.forEach(button => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            const videoId = button.getAttribute('data-video-id');
            videoContainer.innerHTML =
                `<iframe src="https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
            videoModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        });
    });

    closeModal.addEventListener('click', () => {
        videoModal.classList.remove('active');
        videoContainer.innerHTML = '';
        document.body.style.overflow = '';
    });

    videoModal.addEventListener('click', (e) => {
        if (e.target === videoModal) {
            videoModal.classList.remove('active');
            videoContainer.innerHTML = '';
            document.body.style.overflow = '';
        }
    });

    // Resource category filtering
    const resourceCategories = document.querySelectorAll('.resources-category');

    resourceCategories.forEach(category => {
        category.addEventListener('click', () => {
            resourceCategories.forEach(c => c.classList.remove('active'));
            category.classList.add('active');
            // Here you would typically filter resource items
            // This is just a placeholder for the functionality
        });
    });
    </script>
</body>

</html>