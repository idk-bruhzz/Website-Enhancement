<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | One Common Portal</title>
    <meta name="description"
        content="Login to Brunei's unified platform for business registration, tax services, and corporate compliance under MOFE">

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
    <link rel="stylesheet" href="index-style.css">
    <link rel="stylesheet" href="Login-style.css">
    <link rel="stylesheet" href="dark-mode-style.css">
    <link rel="stylesheet" href="vertical-bar-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

    <a href="#main-content" class="sr-only">Skip to main content</a>

    <!-- Navigation -->
    <nav class="navbar" id="navbar" data-aos="fade-down">
        <div class="container navbar-container">
            <a href="Index.php" class="logo">
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
                    <a href="Index.php" class="nav-link">Home</a>
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

    <section class="login-section" id="main-content">
        <div class="container">
            <div class="login-container">
                <div class="login-content">
                    <div class="flip-container">
                        <div class="flip-page" id="flipPage">
                            <!-- Login Form (Front Side) -->
                            <div class="flip-front">
                                <div class="login-header">
                                    <h1 class="login-title">Welcome Back</h1>
                                    <p class="login-subtitle">Sign in to access your OCP account</p>
                                </div>

                                <form class="login-form" id="loginForm">
                                    <div class="form-group">
                                        <label for="username" class="form-label">Identification Document Number</label>
                                        <div class="input-group">
                                            <span class="input-icon">
                                                <i class="fas fa-user"></i>
                                            </span>
                                            <input type="text" id="username" name="username" class="form-input"
                                                placeholder="Enter your ID number" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password" class="form-label">Password</label>
                                        <div class="input-group">
                                            <span class="input-icon">
                                                <i class="fas fa-lock"></i>
                                            </span>
                                            <input type="password" id="password" name="password" class="form-input"
                                                placeholder="Enter your password" required>
                                            <button type="button" class="password-toggle" id="passwordToggle"
                                                aria-label="Show password">
                                                <i class="fas fa-eye"></i>
                                            </button>
                                        </div>
                                        <div class="form-options">
                                            <a href="#" class="forgot-password">Forgot password?</a>
                                        </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary login-btn">
                                        Sign In <i class="fas fa-arrow-right btn-icon"></i>
                                    </button>

                                    <div class="register-link">
                                        Don't have an account? <a href="#" id="showRegister">Register now</a>
                                    </div>
                                </form>
                            </div>

                            <!-- Registration Form (Back Side) -->
                            <div class="flip-back">
                                <div class="registration-content">
                                    <div class="registration-header">
                                        <button class="back-to-login" id="backToLogin">
                                            <i class="fas fa-arrow-left"></i>
                                        </button>
                                        <h1 class="registration-title">Create Account</h1>
                                        <p class="registration-subtitle">Register for your OCP account</p>
                                    </div>

                                    <form class="registration-form" id="registrationForm">
                                        <div class="form-row">
                                            <div class="form-group">
                                                <label for="reg-firstname" class="form-label">First Name</label>
                                                <div class="input-group">
                                                    <span class="input-icon">
                                                        <i class="fas fa-user"></i>
                                                    </span>
                                                    <input type="text" id="reg-firstname" name="firstname"
                                                        class="form-input" placeholder="Enter your first name" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="reg-lastname" class="form-label">Last Name</label>
                                                <div class="input-group">
                                                    <span class="input-icon">
                                                        <i class="fas fa-user"></i>
                                                    </span>
                                                    <input type="text" id="reg-lastname" name="lastname"
                                                        class="form-input" placeholder="Enter your last name" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="reg-email" class="form-label">Email Address</label>
                                            <div class="input-group">
                                                <span class="input-icon">
                                                    <i class="fas fa-envelope"></i>
                                                </span>
                                                <input type="email" id="reg-email" name="email" class="form-input"
                                                    placeholder="Enter your email" required>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="reg-id" class="form-label">Identification Number</label>
                                            <div class="input-group">
                                                <span class="input-icon">
                                                    <i class="fas fa-id-card"></i>
                                                </span>
                                                <input type="text" id="reg-id" name="idnumber" class="form-input"
                                                    placeholder="Enter your ID number" required>
                                            </div>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group">
                                                <label for="reg-password" class="form-label">Password</label>
                                                <div class="input-group">
                                                    <span class="input-icon">
                                                        <i class="fas fa-lock"></i>
                                                    </span>
                                                    <input type="password" id="reg-password" name="password"
                                                        class="form-input" placeholder="Create a password" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="reg-confirm-password" class="form-label">Confirm
                                                    Password</label>
                                                <div class="input-group">
                                                    <span class="input-icon">
                                                        <i class="fas fa-lock"></i>
                                                    </span>
                                                    <input type="password" id="reg-confirm-password"
                                                        name="confirmpassword" class="form-input"
                                                        placeholder="Confirm your password" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="terms-checkbox">
                                                <input type="checkbox" name="terms" id="terms" required>
                                                <span class="checkmark"></span>
                                                I agree to the <a href="#">Terms of Service</a> and <a href="#">Privacy
                                                    Policy</a>
                                            </label>
                                        </div>

                                        <button type="submit" class="btn btn-primary registration-btn">
                                            Register Account
                                        </button>

                                        <div class="login-link">
                                            Already have an account? <a href="#" id="switchToLogin">Sign in</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="login-graphics">
                    <div class="graphics-container">

                    </div>
                </div>
            </div>
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


    <script src="Login-script.js"></script>
    <script src="vertical-bar-script.js"></script>
    <script src="dark-mode-script.js"></script>
    <script src="floating-elements.js"></script>
</body>

</html>