<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frequently Asked Questions | One Common Portal</title>
    <meta name="description" content="Find answers to common questions about Brunei's One Common Portal services">

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
    /* FAQ Page Specific Styles */
    .faq-hero {
        background: linear-gradient(135deg, var(--primary-dark) 0%, #03396c 100%);
        color: var(--primary-light);
        padding: 8rem 0 0rem;
        position: relative;
        overflow: hidden;
    }

    .faq-hero::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('data:image/svg+xml;utf8,<svg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><path d="M30,30 Q50,10 70,30 T90,30" stroke="%232ec4b6" fill="none" stroke-width="0.5" opacity="0.1"/></svg>');
        opacity: 0.2;
    }

    .faq-hero-content {
        position: relative;
        z-index: 2;
        text-align: center;
        max-width: 800px;
        margin: 0 auto;
    }

    .faq-hero-title {
        font-size: clamp(2.5rem, 5vw, 3.5rem);
        margin-bottom: var(--space-md);
        background: linear-gradient(90deg, var(--primary-light), var(--accent-teal));
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }

    .faq-hero-text {
        font-size: 1.25rem;
        opacity: 0.9;
        margin-bottom: var(--space-xl);
    }

    .faq-search {
        max-width: 600px;
        margin: 0 auto;
        position: relative;
    }

    .faq-search input {
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

    .faq-search input::placeholder {
        color: rgba(255, 255, 255, 0.7);
    }

    .faq-search input:focus {
        outline: none;
        background: rgba(255, 255, 255, 0.25);
        box-shadow: 0 0 0 2px var(--accent-teal);
    }

    .faq-search button {
        position: absolute;
        right: var(--space-sm);
        top: 50%;
        transform: translateY(-50%);
        background: transparent;
        border: none;
        color: var(--primary-light);
        cursor: pointer;
    }

    .faq-categories {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: var(--space-sm);
        margin: var(--space-xl) 0;
    }

    .faq-category {
        padding: var(--space-xs) var(--space-lg);
        border-radius: var(--radius-full);
        background: rgba(255, 255, 255, 0.1);
        color: var(--primary-light);
        font-weight: 500;
        transition: all var(--transition-2);
        cursor: pointer;
        border: 1px solid transparent;
    }

    .faq-category:hover,
    .faq-category.active {
        background: var(--accent-teal);
        color: var(--primary-dark);
        transform: translateY(-2px);
    }

    /* FAQ Accordion Styles */
    .faq-container {
        max-width: 900px;
        margin: 0 auto;
        padding: 0 var(--space-md);
    }

    .faq-section {
        margin: var(--space-2xl) 0;
    }

    .faq-section-title {
        font-size: 1.75rem;
        margin-bottom: var(--space-lg);
        position: relative;
        display: inline-block;
        color: var(--primary-dark);
    }

    .faq-section-title::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -0.5rem;
        width: 60%;
        height: 0.25rem;
        background: linear-gradient(90deg, var(--accent-orange), var(--accent-teal));
        border-radius: var(--radius-sm);
    }

    .faq-accordion {
        border-radius: var(--radius-md);
        overflow: hidden;
        box-shadow: var(--shadow-sm);
    }

    .faq-item {
        border-bottom: 1px solid rgba(1, 22, 39, 0.1);
        background: var(--primary-light);
        transition: all var(--transition-2);
    }

    .faq-item:last-child {
        border-bottom: none;
    }

    .faq-question {
        padding: var(--space-lg);
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
        font-weight: 600;
        color: var(--primary-dark);
        transition: all var(--transition-2);
    }

    .faq-question:hover {
        color: var(--accent-teal);
    }

    .faq-question::after {
        content: "+";
        font-size: 1.5rem;
        color: var(--accent-teal);
        transition: all var(--transition-2);
    }

    .faq-item.active .faq-question::after {
        content: "-";
        color: var(--accent-orange);
    }

    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height var(--transition-3);
        padding: 0 var(--space-lg);
        background: rgba(46, 196, 182, 0.05);
    }

    .faq-item.active .faq-answer {
        max-height: 500px;
        padding: 0 var(--space-lg) var(--space-lg);
    }

    .faq-answer-content {
        color: var(--text-secondary);
        line-height: 1.7;
    }

    .faq-answer-content ul {
        margin: var(--space-sm) 0;
        padding-left: var(--space-md);
    }

    .faq-answer-content li {
        margin-bottom: var(--space-xs);
        position: relative;
    }

    .faq-answer-content li::before {
        content: "•";
        color: var(--accent-teal);
        position: absolute;
        left: -1rem;
    }

    /* Contact Card */
    .contact-card {
        background: linear-gradient(135deg, var(--primary-dark-90) 0%, #03396c 100%);
        color: var(--primary-light);
        border-radius: var(--radius-lg);
        padding: var(--space-xl);
        margin: var(--space-2xl) auto;
        max-width: 800px;
        text-align: center;
        position: relative;
        overflow: hidden;
        box-shadow: var(--shadow-lg);
    }

    .contact-card::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: url('data:image/svg+xml;utf8,<svg width="100" height="100" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="40" stroke="%23ff9f1c" fill="none" stroke-width="1" opacity="0.1"/></svg>');
        opacity: 0.1;
    }

    .contact-card-content {
        position: relative;
        z-index: 2;
    }

    .contact-card-title {
        font-size: 1.75rem;
        margin-bottom: var(--space-md);
    }

    .contact-card-text {
        opacity: 0.9;
        margin-bottom: var(--space-lg);
        max-width: 600px;
        margin-left: auto;
        margin-right: auto;
    }

    .contact-methods {
        display: flex;
        justify-content: center;
        gap: var(--space-xl);
        margin-top: var(--space-xl);
        flex-wrap: wrap;
    }

    .contact-method {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: var(--space-sm);
    }

    .contact-icon {
        width: 3.5rem;
        height: 3.5rem;
        background: var(--accent-teal-20);
        border-radius: var(--radius-full);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        color: var(--accent-teal);
        transition: all var(--transition-2);
    }

    .contact-method:hover .contact-icon {
        background: var(--accent-teal);
        color: var(--primary-light);
        transform: translateY(-5px);
    }

    .contact-label {
        font-weight: 500;
    }

    .contact-detail {
        opacity: 0.9;
        font-size: 0.9rem;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .faq-hero {
            padding: 6rem 0 3rem;
        }

        .faq-question {
            padding: var(--space-md);
        }

        .contact-methods {
            gap: var(--space-lg);
        }
    }

    @media (max-width: 576px) {
        .faq-hero {
            padding: 5rem 0 2rem;
        }

        .faq-hero-title {
            font-size: 2rem;
        }

        .faq-hero-text {
            font-size: 1.125rem;
        }

        .faq-categories {
            justify-content: flex-start;
            overflow-x: auto;
            padding-bottom: var(--space-xs);
            -webkit-overflow-scrolling: touch;
        }

        .faq-category {
            white-space: nowrap;
        }

        .faq-question {
            font-size: 1rem;
            padding: var(--space-md) var(--space-sm);
        }

        .faq-answer {
            padding: 0 var(--space-sm);
        }

        .faq-item.active .faq-answer {
            padding: 0 var(--space-sm) var(--space-md);
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
                    <a href="FAQ.php" class="nav-link active">FAQ</a>
                </li>
                <li class="nav-item">
                    <a href="Resource.php" class="nav-link">Resources</a>
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

    <!-- FAQ Hero Section -->
    <section class="faq-hero">
        <div class="container">
            <div class="faq-hero-content" data-aos="fade-up">
                <h1 class="faq-hero-title">Frequently Asked Questions</h1>
                <p class="faq-hero-text">Find answers to common questions about One Common Portal services,
                    registration, and compliance requirements</p>

                <div class="faq-search" data-aos="fade-up" data-aos-delay="100">
                    <input type="text" placeholder="Search our FAQs...">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </div>

                <div class="faq-categories" data-aos="fade-up" data-aos-delay="200">
                    <div class="faq-category active">All Topics</div>
                    <div class="faq-category">Registration</div>
                    <div class="faq-category">Tax Services</div>
                    <div class="faq-category">Business Names</div>
                    <div class="faq-category">Account Management</div>
                    <div class="faq-category">Technical Issues</div>
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

    <!-- Main FAQ Content -->
    <main class="section">
        <div class="faq-container">
            <!-- Registration Section -->
            <div class="faq-section" data-aos="fade-up">
                <h2 class="faq-section-title">Registration Questions</h2>
                <div class="faq-accordion">
                    <div class="faq-item">
                        <div class="faq-question">How do I register my business on the One Common Portal?</div>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                <p>To register your business:</p>
                                <ul>
                                    <li>Visit the Registration section on our portal</li>
                                    <li>Click on "New Business Registration"</li>
                                    <li>Fill out the required information including business name, type, and ownership
                                        details</li>
                                    <li>Upload necessary documents (IC copy, business address proof)</li>
                                    <li>Pay the registration fee online</li>
                                    <li>Your application will be processed within 3-5 working days</li>
                                </ul>
                                <p>You'll receive email notifications at each stage of the process.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">What documents do I need for business registration?</div>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                <p>The required documents vary by business type but typically include:</p>
                                <ul>
                                    <li>Copy of IC (for Bruneian citizens) or passport (for foreigners)</li>
                                    <li>Proof of business address (utility bill or rental agreement)</li>
                                    <li>Business name reservation certificate (if applicable)</li>
                                    <li>For companies: Memorandum and Articles of Association</li>
                                    <li>For partnerships: Partnership agreement</li>
                                </ul>
                                <p>Additional documents may be required for specific business activities.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">Can I register multiple businesses under one account?</div>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                <p>Yes, you can manage multiple businesses from a single One Common Portal account.
                                    After logging in:</p>
                                <ol>
                                    <li>Go to "My Businesses" in your dashboard</li>
                                    <li>Click "Register New Business"</li>
                                    <li>Complete the registration process for the additional business</li>
                                </ol>
                                <p>All your registered businesses will appear in your account dashboard, and you can
                                    switch between them easily.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tax Services Section -->
            <div class="faq-section" data-aos="fade-up">
                <h2 class="faq-section-title">Tax Services</h2>
                <div class="faq-accordion">
                    <div class="faq-item">
                        <div class="faq-question">When are tax returns due for businesses?</div>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                <p>Tax return deadlines depend on your business type:</p>
                                <ul>
                                    <li><strong>Corporate Tax:</strong> 6 months after financial year-end</li>
                                    <li><strong>Individual/Business Tax:</strong> April 30th annually</li>
                                    <li><strong>Withholding Tax:</strong> 15th of the following month</li>
                                    <li><strong>Goods and Services Tax (GST):</strong> Monthly/Quarterly based on
                                        registration</li>
                                </ul>
                                <p>The portal will send you reminders as deadlines approach. You can also check
                                    important dates in the Tax Calendar section.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">How do I make tax payments through the portal?</div>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                <p>To make tax payments:</p>
                                <ol>
                                    <li>Log in to your One Common Portal account</li>
                                    <li>Navigate to the "Tax Services" section</li>
                                    <li>Select "Make a Payment"</li>
                                    <li>Choose the tax type and period</li>
                                    <li>Enter the payment amount (or use the calculated amount)</li>
                                    <li>Select your payment method (credit/debit card or bank transfer)</li>
                                    <li>Confirm and complete the payment</li>
                                </ol>
                                <p>You'll receive an electronic receipt immediately, and the payment will reflect in
                                    your tax account within 1 business day.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">Can I amend a submitted tax return?</div>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                <p>Yes, you can amend tax returns within 12 months of the original submission:</p>
                                <ul>
                                    <li>Go to "Tax Services" → "Filed Returns"</li>
                                    <li>Find the return you wish to amend and click "Amend"</li>
                                    <li>Make the necessary corrections</li>
                                    <li>Submit the amended return</li>
                                </ul>
                                <p>Note that amendments may trigger a review process, and additional documentation may
                                    be required. If the amendment results in additional tax due, you'll need to make the
                                    payment immediately.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- License Management Section -->
            <div class="faq-section" data-aos="fade-up">
                <h2 class="faq-section-title">License Management</h2>
                <div class="faq-accordion">
                    <div class="faq-item">
                        <div class="faq-question">How do I renew my business license?</div>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                <p>Business license renewal can be completed entirely online:</p>
                                <ol>
                                    <li>Log in to your account and go to "Licenses"</li>
                                    <li>Select the license needing renewal</li>
                                    <li>Check that all business information is current</li>
                                    <li>Upload any required updated documents</li>
                                    <li>Pay the renewal fee</li>
                                    <li>Submit the renewal application</li>
                                </ol>
                                <p>Most renewals are processed within 3 business days. You'll receive notifications at
                                    each step, and your renewed license will be available for download from the portal.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">What types of licenses can I apply for through the portal?</div>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                <p>The One Common Portal supports applications for numerous business licenses including:
                                </p>
                                <div
                                    style="display: grid; grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: var(--space-sm);">
                                    <div>
                                        <strong>General Business</strong>
                                        <ul style="margin-top: var(--space-xs);">
                                            <li>Retail License</li>
                                            <li>Wholesale License</li>
                                            <li>Service License</li>
                                        </ul>
                                    </div>
                                    <div>
                                        <strong>Specialized</strong>
                                        <ul style="margin-top: var(--space-xs);">
                                            <li>Food Establishment</li>
                                            <li>Health Services</li>
                                            <li>Construction</li>
                                        </ul>
                                    </div>
                                    <div>
                                        <strong>Professional</strong>
                                        <ul style="margin-top: var(--space-xs);">
                                            <li>Legal Practice</li>
                                            <li>Accounting</li>
                                            <li>Engineering</li>
                                        </ul>
                                    </div>
                                </div>
                                <p style="margin-top: var(--space-sm);">The portal will guide you through specific
                                    requirements for each license type.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">How long does license approval take?</div>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                <p>Processing times vary by license type:</p>
                                <ul>
                                    <li><strong>Standard Business License:</strong> 3-5 working days</li>
                                    <li><strong>Food Establishment License:</strong> 7-10 working days (includes
                                        inspection)</li>
                                    <li><strong>Professional Licenses:</strong> 5-7 working days</li>
                                    <li><strong>Specialized Licenses:</strong> 10-14 working days</li>
                                </ul>
                                <p>You can track your application status in real-time through the portal. Delays may
                                    occur if additional documentation is required or if inspections are needed.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Technical Support Section -->
            <div class="faq-section" data-aos="fade-up">
                <h2 class="faq-section-title">Technical Support</h2>
                <div class="faq-accordion">
                    <div class="faq-item">
                        <div class="faq-question">What should I do if I can't log in to my account?</div>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                <p>If you're having trouble logging in:</p>
                                <ol>
                                    <li>Click "Forgot Password" on the login page to reset your password</li>
                                    <li>Ensure you're using the correct username (usually your email)</li>
                                    <li>Check that your Caps Lock is off as passwords are case-sensitive</li>
                                    <li>Clear your browser cache and cookies, then try again</li>
                                    <li>Try using a different browser or device</li>
                                </ol>
                                <p>If you still can't access your account, contact our support team through the live
                                    chat or email support@ocp.gov.bn with your registered email address and business
                                    name.</p>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">Why can't I upload my documents?</div>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                <p>Document upload issues can occur due to several reasons:</p>
                                <ul>
                                    <li><strong>File Size:</strong> Ensure files are under 10MB each</li>
                                    <li><strong>File Format:</strong> We accept PDF, JPG, and PNG files only</li>
                                    <li><strong>Internet Connection:</strong> Check your connection stability</li>
                                    <li><strong>Browser Issues:</strong> Try using Chrome or Firefox</li>
                                </ul>
                                <p>If the problem persists:</p>
                                <ol>
                                    <li>Try compressing large files</li>
                                    <li>Convert files to accepted formats</li>
                                    <li>Try uploading during non-peak hours</li>
                                    <li>Use the mobile app as an alternative</li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <div class="faq-item">
                        <div class="faq-question">Is the portal available on mobile devices?</div>
                        <div class="faq-answer">
                            <div class="faq-answer-content">
                                <p>Yes, the One Common Portal is fully responsive and works on all mobile devices. We
                                    also offer:</p>
                                <ul>
                                    <li><strong>Mobile App:</strong> Available on iOS and Android with biometric login
                                    </li>
                                    <li><strong>Mobile-Optimized Website:</strong> All features accessible through
                                        mobile browsers</li>
                                    <li><strong>Document Scanning:</strong> Use your phone camera to upload documents
                                        directly</li>
                                </ul>
                                <p>Key mobile features include:</p>
                                <div
                                    style="display: grid; grid-template-columns: repeat(auto-fill, minmax(150px, 1fr)); gap: var(--space-sm);">
                                    <div
                                        style="background: var(--accent-teal-20); padding: var(--space-xs); border-radius: var(--radius-sm); text-align: center;">
                                        <i class="fas fa-bell" style="color: var(--accent-teal);"></i>
                                        <div>Push Notifications</div>
                                    </div>
                                    <div
                                        style="background: var(--accent-teal-20); padding: var(--space-xs); border-radius: var(--radius-sm); text-align: center;">
                                        <i class="fas fa-qrcode" style="color: var(--accent-teal);"></i>
                                        <div>QR Code Login</div>
                                    </div>
                                    <div
                                        style="background: var(--accent-teal-20); padding: var(--space-xs); border-radius: var(--radius-sm); text-align: center;">
                                        <i class="fas fa-file-upload" style="color: var(--accent-teal);"></i>
                                        <div>Easy Uploads</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Card -->
        <div class="contact-card" data-aos="fade-up">
            <div class="contact-card-content">
                <h2 class="contact-card-title">Still Need Help?</h2>
                <p class="contact-card-text">Our support team is ready to assist you with any questions not covered in
                    our FAQs</p>

                <div class="contact-methods">
                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-headset"></i>
                        </div>
                        <div class="contact-label">Live Chat</div>
                        <div class="contact-detail">24/7 Support</div>
                    </div>

                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contact-label">Email Us</div>
                        <div class="contact-detail">support@ocp.gov.bn</div>
                    </div>

                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="contact-label">Call Center</div>
                        <div class="contact-detail">+673 238 1000</div>
                    </div>

                    <div class="contact-method">
                        <div class="contact-icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contact-label">Visit Us</div>
                        <div class="contact-detail">MOFE Building</div>
                    </div>
                </div>
            </div>
        </div>
    </main>

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

    // FAQ Accordion functionality
    const faqItems = document.querySelectorAll('.faq-item');

    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');

        question.addEventListener('click', () => {
            // Close all other items
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                }
            });

            // Toggle current item
            item.classList.toggle('active');
        });
    });

    // FAQ Category filter
    const faqCategories = document.querySelectorAll('.faq-category');

    faqCategories.forEach(category => {
        category.addEventListener('click', () => {
            faqCategories.forEach(c => c.classList.remove('active'));
            category.classList.add('active');
            // Here you would typically filter FAQ items
            // This is just a placeholder for the functionality
        });
    });

    // Search functionality
    const searchInput = document.querySelector('.faq-search input');
    const searchButton = document.querySelector('.faq-search button');

    searchButton.addEventListener('click', (e) => {
        e.preventDefault();
        // Here you would typically implement search functionality
        console.log('Searching FAQs for:', searchInput.value);
    });

    searchInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            e.preventDefault();
            // Here you would typically implement search functionality
            console.log('Searching FAQs for:', searchInput.value);
        }
    });
    </script>
</body>

</html>