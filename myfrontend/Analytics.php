<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\Global.css">
    <link rel="stylesheet" href="css\Global-2.css">
    <link rel="stylesheet" href="css/dark-mode-toggle.css">
    <link rel="stylesheet" href="css\iframe-style.css">
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

        <!-- <div class="language-switcher">
            <div class="language-switcher-toggle">
                <img src="img\UK.png" alt="English" class="language-flag">
                <span class="language-name">EN</span>
                <i class="fas fa-chevron-down"></i>
                /div>
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
            </div> -->

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
    <!-- <div class="vertical-bar">

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

    <!-- </div> -->
    <div class="iframe-container">
        <iframe width="100%" height="1000"
            src="https://lookerstudio.google.com/embed/reporting/dc61cd17-b582-4163-b687-08c46392293f/page/kIV1C"
            frameborder="0" style="border:0" allowfullscreen
            sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox">
        </iframe>
    </div>

    <!-- <iframe width="600" height="2125"
        src="https://lookerstudio.google.com/embed/reporting/08fe05ca-e3aa-4beb-9aea-f10515f8f9c0/page/kIV1C"
        frameborder="0" style="border:0" allowfullscreen
        sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox"></iframe> -->
    <!-- <footer class="footer">

        <div class="footer-container">
            <div class="footer-content">

                <div class="footer-section address-section">
                    <h3>HeadQuarter Location</h3>
                    <p>Commonwealth Drive<br>
                        Bandar Seri Begawan BB3910<br>
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
                        <li><a href="https://www.mofe.gov.bn/SitePages/Home.aspx"><i class="fas fa-globe"></i> Ministry
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
                        <li><a href="https://bdasc.mofe.gov.bn/SitePages/Home.aspx"><i class="fas fa-globe"></i> Brunei
                                Darussalam Accounting Standard Council (BDASC)</a></li>
                    </ul>
                </div>


                <div class="footer-section table-section">
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


    </footer> -->
</body>
<script src="Javascript\Home-script.js"></script>
<script src="Javascript\Home-script-2.js"></script>
<script src="Javascript\Dark-mode.js"></script>


</html>