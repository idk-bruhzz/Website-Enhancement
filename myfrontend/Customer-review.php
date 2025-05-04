<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\Global.css" />
    <link rel="stylesheet" href="css\Global-2.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css\dark-mode-toggle.css">
    <link rel="stylesheet" href="css\QR-style.css">
    <link rel="stylesheet" href="css\survey-style.css">
    <link rel="stylesheet" href="css\footer-style.css">
</head>

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
    <div class="survey">
        <div class="survey-container">
            <div class="survey-header">
                <i class="fas fa-comment-alt"></i>
                <h2>Share Your Experience</h2>
                <p>We value your feedback to help improve our services</p>
            </div>

            <form id="satisfactionSurvey" class="survey-form">
                <!-- CSAT Question -->
                <div class="survey-question">
                    <div class="question-header">
                        <span class="question-number">1</span>
                        <label>How satisfied are you with your experience today?</label>
                    </div>
                    <div class="rating-scale">
                        <div class="rating-option">
                            <input type="radio" id="csat-1" name="csat" value="1" required>
                            <label for="csat-1">
                                <span class="rating-emoji">😠</span>
                                <span class="rating-text">Very Dissatisfied</span>
                            </label>
                        </div>
                        <div class="rating-option">
                            <input type="radio" id="csat-2" name="csat" value="2">
                            <label for="csat-2">
                                <span class="rating-emoji">😕</span>
                                <span class="rating-text">Dissatisfied</span>
                            </label>
                        </div>
                        <div class="rating-option">
                            <input type="radio" id="csat-3" name="csat" value="3">
                            <label for="csat-3">
                                <span class="rating-emoji">😐</span>
                                <span class="rating-text">Neutral</span>
                            </label>
                        </div>
                        <div class="rating-option">
                            <input type="radio" id="csat-4" name="csat" value="4">
                            <label for="csat-4">
                                <span class="rating-emoji">😊</span>
                                <span class="rating-text">Satisfied</span>
                            </label>
                        </div>
                        <div class="rating-option">
                            <input type="radio" id="csat-5" name="csat" value="5">
                            <label for="csat-5">
                                <span class="rating-emoji">😍</span>
                                <span class="rating-text">Very Satisfied</span>
                            </label>
                        </div>
                    </div>
                </div>

                <!-- NPS Question -->
                <div class="survey-question">
                    <div class="question-header">
                        <span class="question-number">2</span>
                        <label>How likely are you to recommend us to others?</label>
                    </div>
                    <div class="nps-container">
                        <div class="nps-scale">
                            <span class="nps-min">0</span>
                            <input type="range" id="nps" name="nps" min="0" max="10" step="1" required>
                            <span class="nps-max">10</span>
                        </div>
                        <div class="nps-labels">
                            <span>Not at all likely</span>
                            <span>Extremely likely</span>
                        </div>
                        <div class="nps-value-display">
                            Your rating: <span id="npsValue">5</span>/10
                        </div>
                    </div>
                </div>

                <!-- Open Feedback -->
                <div class="survey-question">
                    <div class="question-header">
                        <span class="question-number">3</span>
                        <label for="feedback">What could we do better?</label>
                    </div>
                    <textarea id="feedback" name="feedback" rows="4"
                        placeholder="Your suggestions help us improve..."></textarea>
                </div>

                <!-- Hidden Fields -->
                <input type="hidden" id="pageUrl" name="pageUrl" value="">
                <input type="hidden" id="timestamp" name="timestamp" value="">

                <div class="form-actions">
                    <button type="submit" class="submit-btn">
                        <i class="fas fa-paper-plane"></i> Submit Feedback
                    </button>
                </div>
            </form>
        </div>
    </div>

    <div class="vertical-bar">

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
    <footer class="footer">

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
    <script src="Javascript\survey-script.js"></script>
</body>

</html>