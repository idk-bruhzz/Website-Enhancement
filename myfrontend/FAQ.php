<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FAQs - One Common Portal</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="css\Global.css">
    <link rel="stylesheet" href="css\Global-2.css">
    <link rel="stylesheet" href="css\faq-style.css">
    <link rel="stylesheet" href="css/dark-mode-toggle.css">
    <link rel="stylesheet" href="css\footer-style.css">
    <style>

    </style>
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

    <section class="hero">
        <div class="faq-search-container">
            <div class="faq-search-bar">
                <form id="faq-search-form">
                    <input type="text" placeholder="Search FAQs..." aria-label="Search FAQs" />
                    <button type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                </form>
            </div>
            <div class="search-results-info" id="search-results-info"></div>
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
        <div class="live-chat-container">
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


    <section class="faq-container">
        <div class="topics-list">
            <h2>Topics</h2>
            <ul>
                <li class="active" data-topic="general">General Information</li>
                <li data-topic="registration">Registration and Login</li>
                <li data-topic="tax">Registry of Companies and Business Names</li>
                <li data-topic="account">Revenue Division</li>
            </ul>
        </div>

        <div class="accordion" id="accordion">
            <div class="accordion-section" data-topic="general">
                <div class="accordion-item">
                    <div class="accordion-header">
                        <span>What is the One Common Portal (OCP)?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="accordion-content">
                        <p>OCP stands for One Common Portal. This system is an initiative by MOFE to provide the
                            business
                            community with a single platform to manage their business obligations online - from business
                            registration and company incorporation to managing their business such as updating business
                            details and filing corporate tax.</p>

                        <h1>OCP has been divided into two phases:</h1>
                        <ul>
                            <li>

                                Phase 1, introduced in January 2021, provides services under the Registry of Companies
                                and
                                Business Names Division, where existing registered businesses and companies in previous
                                systems
                                have been migrated to OCP. All users (including from previous systems) are required to
                                create an
                                account in OCP first.
                            </li>
                            <li>
                                Phase 2 will introduce Revenue Division's services. This means that services user the
                                System for
                                Tax Administration and Revenue Services (STARS) will transition over to OCP.
                            </li>
                        </ul>

                        <h1>Revenue Division services / STARS will have two releases:</h1>
                        <ul>
                            <li>Release 1 will be introduced by Q4 of 2021. Services that will be available include
                                online
                                filing for Estimated Chargeable Income (ECI), Income Tax and Withholding Tax as well as
                                online
                                payment. Any previous data under STARS will be migrated and therefore can be searched in
                                OCP.
                            </li>
                            <li>Release 2 will be introduced by Q1 2022. Additional services will be made available such
                                as
                                Stamp Duty and online refunds applications.

                            </li>
                        </ul>
                        <p>If you would like to access either ROCBN or Revenue Division services, please <a
                                href="">create an
                                account.</a></p>
                        <p>If you already have an OCP account, simply login.
                        </p>
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">
                        <span>I was trying to access www.roc.gov.bn and was directed here. Why?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="accordion-content">
                        ROCBN Services have now been transitioned over to the One Common Portal. Any attempt to access
                        the previous ROCBN Systems will be redirected to the One Common Portal (OCP) instead.
                    </div>
                </div>
            </div>

            <div class="accordion-section" data-topic="registration" style="display: none;">
                <div class="accordion-item">
                    <div class="accordion-header">
                        <span>Question 1</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="accordion-content">
                        Answer 1
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">
                        <span>Question 2</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="accordion-content">
                        Answer 2
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">
                        <span>Question 3</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="accordion-content">
                        Answer 3
                    </div>
                </div>
            </div>

            <div class="accordion-section" data-topic="tax" style="display: none;">
                <div class="accordion-item">
                    <div class="accordion-header">
                        <span>Question 1</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="accordion-content">
                        Answer 1
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">
                        <span>Question 2</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="accordion-content">
                        Answer 2
                    </div>
                </div>
            </div>

            <div class="accordion-section" data-topic="account" style="display: none;">
                <div class="accordion-item">
                    <div class="accordion-header">
                        <span>Question 1</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="accordion-content">
                        Answer 1
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">
                        <span>Question 2</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="accordion-content">
                        Answer 2
                    </div>
                </div>
                <div class="accordion-item">
                    <div class="accordion-header">
                        <span>Question 2</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="accordion-content">
                        Answer 2
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                    <!-- <iframe
                        src="https://lookerstudio.google.com/embed/reporting/08fe05ca-e3aa-4beb-9aea-f10515f8f9c0/page/kIV1C"
                        width="400" height="600" frameborder="0"
                        style="border:0; overflow:hidden; margin:0; padding:0; position:absolute; top:0; left:0;"
                        sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox">
                    </iframe>  -->
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

    <script src="Javascript\FAQ-script.js"></script>
    <script src="Javascript\Home-script.js"></script>
    <script src="Javascript\Home-script-2.js"></script>
    <script src="Javascript\nav-bar.js"></script>
    <script src="Javascript\Dark-mode.js"></script>
</body>

</html>