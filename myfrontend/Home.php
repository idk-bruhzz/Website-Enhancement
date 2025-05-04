<?php

// require_once 'vendor/autoload.php'; // Google Analytics PHP client

// use Google\Analytics\Data\V1beta\BetaAnalyticsDataClient;
// use Google\Analytics\Data\V1beta\DateRange;
// use Google\Analytics\Data\V1beta\Metric;
// use Google\Analytics\Data\V1beta\Dimension;
// use Google\Analytics\Data\V1beta\RunReportRequest;

// // Config
// $propertyId = '473956527'; // Your GA4 Property ID
// $credentialsPath = __DIR__ . '/google-credentials.json'; // Path to your JSON key file
// putenv("GOOGLE_APPLICATION_CREDENTIALS=$credentialsPath");

// // Initialize GA4 client
// $client = new BetaAnalyticsDataClient();

// // Run report for homepage views (path '/')
// $response = $client->runReport(new RunReportRequest([
//     'property' => "properties/$propertyId",
//     'dateRanges' => [new DateRange(['start_date' => '30daysAgo', 'end_date' => 'today'])],
//     'dimensions' => [new Dimension(['name' => 'pagePath'])],
//     'metrics' => [new Metric(['name' => 'screenPageViews'])],
//     'dimensionFilter' => [
//         'filter' => [
//             'fieldName' => 'pagePath',
//             'stringFilter' => ['matchType' => 'EXACT', 'value' => '/']
//         ]
//     ]
// ]));

// // Extract pageviews
// $homepagePageviews = 0;
// foreach ($response->getRows() as $row) {
//     $homepagePageviews = $row->getMetricValues()[0]->getValue();
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>One Common Portal</title>
    <link rel="stylesheet" href="css\Global.css" />
    <link rel="stylesheet" href="css\Global-2.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css\dark-mode-toggle.css">
    <link rel="stylesheet" href="css\QR-style.css">
    <link rel="stylesheet" href="css\load-animation.css">
    <link rel="stylesheet" href="css\footer-style.css">
    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<script async src="https://www.googletagmanager.com/gtag/js?id=G-8QEXE3LNRB"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());
gtag('config', 'G-8QEXE3LNRB');
</script>

<body>
    <nav class="navbar">
        <button class="mobile-menu-toggle" aria-label="Toggle menu">☰</button>

        <div class="logo">
            <img src="img/OCPlong.png" alt="OCP Logo" />
        </div>

        <ul class="nav-list">
            <li><a href="Home.php" aria-label="Home">Home</a></li>
            <li><a href="#" aria-label="About">About</a></li>
            <li><a href="FAQ.php" aria-label="FAQ">FAQ</a></li>
            <li><a href="Resource.php" aria-label="Resources & Guides">Resources & Guides</a></li>
            <li><a href="News.php" aria-label="News & Announcements">News & Announcements</a></li>
            <li><a href="#" aria-label="Contact">Contact</a></li>
        </ul>

        <div class="language-switcher">
            <div class="language-switcher-toggle">
                <img src="img\UK.png" alt="English" class="language-flag">
                <span class="language-name">EN</span>
                <i class="fas fa-chevron-down"></i>
            </div>
            <div class="language-dropdown">
                <a href="#" class="language-option active">
                    <img src="img\UK.png" alt="English" class="language-flag">
                    <span>English</span>
                </a>
                <a href="#" class="language-option">
                    <img src="img\Brunei.png" alt="Malay" class="language-flag">
                    <span>Malay</span>
                </a>
            </div>
        </div>

        <div class="search-container">
            <button class="search-toggle" aria-label="Toggle search">🔍</button>
            <div class="search-bar">
                <form action="#" method="get">
                    <input type="text" placeholder="Search..." aria-label="Search" />
                    <button type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <section class="hero">
        <!-- Video Background -->
        <video autoplay muted loop id="video-background">
            <source src="videos/night.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="text" data-aos="fade-up" data-aos-delay="100">
            <h1><span class="One">One </span> Common Portal</h1>
            <p>Create and maintain your business details with ease</p>
            <div class="buttons">
                <a href="/login" class="btn-login">Login</a>
                <a href="/signup" class="btn-signup">Sign Up</a>
            </div>
        </div>

        <div class="vertical-bar" data-aos=" fade-left" data-aos-delay="300">

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

            <a href="Analytics.php" class="vertical-bar-item chart-link" data-tooltip="">
                <i class="fas fa-chart-line"></i>
                <div class="analytics-popup">
                    <strong>Site Analytics</strong>
                    <div>Visitors: 1,240</div>
                    <div>Pageviews: <?php echo number_format($homepagePageviews); ?></div>
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
                    <input type="text" class="chat-input" placeholder="Type your message..."
                        aria-label="Type your message">
                    <button class="send-button" aria-label="Send message">
                        <i class="fas fa-paper-plane"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section class="stats">
        <div class="stat-container " data-aos="fade-up" data-aos-delay="100"
            style="background-image: url('img/Stats/foreign.jpg');">
            <div class="stat-content">
                <i class="fas fa-building"></i>
                <h3><span class="count" data-target="10000">0</span>+</h3>
                <p>Active Foreign Companies</p>
            </div>
        </div>
        <div class="stat-container" data-aos="fade-up" data-aos-delay="200"
            style="background-image: url('img/Stats/local.jpg');">
            <div class="stat-content">
                <i class="fas fa-city"></i>
                <h3><span class="count" data-target="20000">0</span>+</h3>
                <p>Active Local Companies</p>
            </div>
        </div>
        <div class="stat-container" data-aos="fade-up" data-aos-delay="300"
            style="background-image: url('img/Stats/business.jpg');">
            <div class="stat-content">
                <i class="fas fa-signature"></i>
                <h3><span class="count" data-target="30000">0</span>+</h3>
                <p>Active Business Names</p>
            </div>
        </div>
    </section>


    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200" class="wave-divider">
        <path fill="#f8f9fa" fill-opacity="1"
            d="M0,160L48,149.3C96,139,192,117,288,128C384,139,480,181,576,192C672,203,768,181,864,160C960,139,1056,117,1152,117.3C1248,117,1344,139,1392,149.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg> -->
    <section class="about-ocp">
        <div class="about-content">
            <div class="about-image scroll-animate animate-fade-left delay-200">
                <img src="img\OCP BIG.png" alt="About OCP">
            </div>
            <div class="about-text scroll-animate animate-fade-right delay-300">
                <h2>About Our Company</h2>
                <p>
                    The One Common Portal (OCP) is an initiative by the Ministry of
                    Finance and Economy (MOFE) which aims to bring MOFE online services
                    together onto a single platform and provide a more seamless user
                    experience for the corporate community to manage their corporate
                    obligations throughout the business lifecycle from setting up a
                    company or business to managing tax affairs.
                </p>
                <a href="#" class="learn-more">Learn More</a>
            </div>
        </div>
    </section>

    <div id="particles-js"></div>
    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 200" class="wave-divider flipped">
        <path fill="#f8f9fa" fill-opacity="1"
            d="M0,160L48,149.3C96,139,192,117,288,128C384,139,480,181,576,192C672,203,768,181,864,160C960,139,1056,117,1152,117.3C1248,117,1344,139,1392,149.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
    </svg> -->

    <section class="section">
        <div id="news-carousel" class="carousel">
            <div class="images" id="news-container">
                <!-- Carousel items will be dynamically added here -->
            </div>
            <button class="carousel-button prev" aria-label="Previous Slide">&#10094;</button>
            <button class="carousel-button next" aria-label="Next Slide">&#10095;</button>
            <div class="carousel-indicators">
                <!-- Indicators will be dynamically added here -->
            </div>
        </div>
    </section>


    <section class="features" aria-labelledby="features-heading">
        <div class="container">
            <h2 id="features-heading" class="section-title">Key Features</h2>

            <div class="feature-grid">
                <!-- Feature 1 -->
                <article class="feature-card" tabindex="0">
                    <figure class="card-image-wrapper">
                        <img src="img/features/registeration.jpg" alt="Business Registration" class="blur-image"
                            loading="lazy" width="400" height="500">
                        <div class="image-overlay" aria-hidden="true"></div>
                    </figure>
                    <div class="card-content">
                        <h3>Business Registration</h3>
                        <p>Register and manage businesses online with ease.</p>
                        <div class="card-hover-content">
                            <a href="/business-registration" class="card-cta"
                                aria-label="Learn more about Business Registration">
                                Learn More <span aria-hidden="true">→</span>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Feature 2 -->
                <article class="feature-card" tabindex="0">
                    <figure class="card-image-wrapper">
                        <img src="img/features/tax.jpg" alt="Tax Services" class="blur-image" loading="lazy" width="400"
                            height="500">
                        <div class="image-overlay" aria-hidden="true"></div>
                    </figure>
                    <div class="card-content">
                        <h3>Tax Services</h3>
                        <p>File income tax and manage payments seamlessly.</p>
                        <div class="card-hover-content">
                            <a href="/tax-services" class="card-cta" aria-label="Learn more about Tax Services">
                                Learn More <span aria-hidden="true">→</span>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Feature 3 -->
                <article class="feature-card" tabindex="0">
                    <figure class="card-image-wrapper">
                        <img src="img/features/user friendly.jpg" alt="User-Friendly Interface" class="blur-image"
                            loading="lazy" width="400" height="500">
                        <div class="image-overlay" aria-hidden="true"></div>
                    </figure>
                    <div class="card-content">
                        <h3>User-Friendly Interface</h3>
                        <p>Easy navigation with helpful guides and support.</p>
                        <div class="card-hover-content">
                            <a href="/user-interface" class="card-cta"
                                aria-label="Learn more about User-Friendly Interface">
                                Learn More <span aria-hidden="true">→</span>
                            </a>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <div class="rating-widget">
        <div class="rating-prompt">Rate our service</div>
        <div class="stars-container">
            <span class="star" data-rating="1">★</span>
            <span class="star" data-rating="2">★</span>
            <span class="star" data-rating="3">★</span>
            <span class="star" data-rating="4">★</span>
            <span class="star" data-rating="5">★</span>
        </div>
    </div>

    <div class="qr-popup">
        <div class="qr-popup-container">
            <div class="qr-popup-content">
                <div class="qr-message">Thank you! Scan to complete your review</div>
                <div class="qr-code-wrapper">

                    <img src="img\QR_review.png" alt="Review QR Code" class="qr-code">
                </div>
                <div class="qr-footer">We appreciate your feedback!</div>
            </div>
            <div class="qr-close" aria-label="Close popup">×</div>
        </div>
    </div>
    <footer class="footer" data-aos="fade">

        <div class="footer-container">
            <div class="footer-content">

                <div class="footer-section address-section">
                    <h3>HeadQuarter Location</h3>
                    <p>Commonwealth Drive
                        Bandar Seri Begawan BB3910
                        Brunei Darussalam</p>
                </div>


                <div class="footer-section help-section">
                    <h3>Are you looking for help?</h3>
                    <div class="help-content">
                        <ul>
                            <li class="contact-item">
                                <i class="fas fa-phone"></i> Business Registration: <span
                                    class="contact-info">+673-2380505</span>
                            </li>
                            <li class="contact-item">
                                <i class="fas fa-envelope"></i> Email: <span
                                    class="contact-info">info.rocbn@mofe.gov.bn</span>
                            </li>
                            <br>
                            <li class="contact-item">
                                <i class="fas fa-address-book"></i> Tax Services (STARS):
                                <span class="contact-info">
                                    <i class="fas fa-phone-alt"></i> +673-2383933
                                    <i class="fas fa-mobile-alt"></i> +673-7471436
                                </span>
                            </li>

                            <li class="contact-item">
                                <i class="fas fa-envelope"></i> Email: <span
                                    class="contact-info">revenue@mofe.gov.bn</span>
                            </li>
                            <li class="contact-item">
                                <i class="fas fa-envelope"></i> Email (Withholding of Tax Unit): <span
                                    class="contact-info">wht.revenue@mofe.gov.bn</span>
                            </li>
                            <li class="contact-item">
                                <i class="fas fa-envelope"></i> Email (Stamp Duty): <span
                                    class="contact-info">sd.revenue@mofe.gov.bn</span>
                            </li>
                        </ul>
                    </div>
                </div>


                <div class="footer-section links-section">
                    <h3>Other Links</h3>
                    <ul class="links-list">
                        <li><a href="https://www.mofe.gov.bn/SitePages/Home.aspx"><i class="fas fa-globe"></i>
                                Ministry
                                of Finance and Economy</a></li>
                        <li><a href="http://www.tap.com.bn/"><i class="fas fa-globe"></i> E-Amanah</a></li>
                        <li><a href="https://ocbs.mofe.gov.bn/login"><i class="fas fa-globe"></i> One Common Billing
                                System</a></li>
                        <li><a href="http://www.tafis.gov.bn/"><i class="fas fa-globe"></i> TAFIS</a></li>
                        <li><a href="https://ecustoms.mof.gov.bn/SignIn.aspx"><i class="fas fa-globe"></i> Brunei
                                E-Customs</a></li>
                        <li><a href="https://bdnsw.mofe.gov.bn/Pages/Home.aspx"><i class="fas fa-globe"></i>
                                Brunei Darussalam National Single Window (BDSNW)</a></li>
                        <li><a href="https://tradingacrossborders.mofe.gov.bn/SitePages/home.aspx"><i
                                    class="fas fa-globe"></i> Trading Across Borders</a></li>
                        <li><a href="https://tradingacrossborders.mofe.gov.bn/SitePages/home.aspx"><i
                                    class="fas fa-globe"></i> Brunei Darussalam National Trade Depository</a></li>
                        <li><a href="https://bdasc.mofe.gov.bn/SitePages/Home.aspx"><i class="fas fa-globe"></i>
                                Brunei
                                Darussalam Accounting Standard Council (BDASC)</a></li>
                    </ul>
                </div>


                <div class="footer-section table-section">
                    <!-- <iframe
                        src="https://lookerstudio.google.com/embed/reporting/08fe05ca-e3aa-4beb-9aea-f10515f8f9c0/page/kIV1C"
                        width="400" height="400" frameborder="0"
                        style="border:0; overflow:hidden; margin:0; padding:0; position:absolute; top:0; left:0;"
                        sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox">
                    </iframe> -->
                    <h3><i class="fas fa-users"></i> Yearly Visitors</h3>
                    <div class="visitor-table">
                        <table>
                            <thead>
                                <tr>
                                    <th><i class="far fa-calendar-alt"></i> Year</th>
                                    <th><i class="fas fa-user-check"></i> Visitors</th>
                                    <th><i class="fas fa-chart-line"></i> Growth</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>2025</td>
                                    <td><i class="fas fa-user"></i> 180,000</td>
                                    <td><span class="growth-up">+100% <i class="fas fa-arrow-up"></i></span></td>
                                </tr>
                                <tr>
                                    <td>2024</td>
                                    <td><i class="fas fa-user"></i> 90,000</td>
                                    <td><span class="growth-up">+100% <i class="fas fa-arrow-up"></i></span></td>
                                </tr>
                                <tr>
                                    <td>2023</td>
                                    <td><i class="fas fa-user"></i> 45,000</td>
                                    <td><span class="growth-up">+50% <i class="fas fa-arrow-up"></i></span></td>
                                </tr>
                                <tr>
                                    <td>2022</td>
                                    <td><i class="fas fa-user"></i> 30,000</td>
                                    <td><span class="growth-up">+100% <i class="fas fa-arrow-up"></i></span></td>
                                </tr>
                                <tr>
                                    <td>2021</td>
                                    <td><i class="fas fa-user"></i> 15,000</td>
                                    <td><span class="growth-down">-25% <i class="fas fa-arrow-down"></i></span></td>
                                </tr>
                                <tr>
                                    <td>2020</td>
                                    <td><i class="fas fa-user"></i> 20,000</td>
                                    <td><span class="growth-up">+100% <i class="fas fa-arrow-up"></i></span></td>
                                </tr>
                                <tr>
                                    <td>2019</td>
                                    <td><i class="fas fa-user"></i> 10,000</td>
                                    <td><span class="growth-up">+100% <i class="fas fa-arrow-up"></i></span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <button id="scrollToTopBtn" class="scroll-to-top" aria-label="Scroll to top">
                    <i class="fas fa-arrow-up"></i>
                </button>

            </div>

        </div>


    </footer>

    <script src="Javascript\Home-script.js"></script>
    <script src="Javascript\Home-script-2.js"></script>
    <script src="Javascript\Dark-mode.js"></script>
    <script src="Javascript\QR-rating.js"></script>
    <script src="Javascript\scroll-view.js"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
</body>

</html>