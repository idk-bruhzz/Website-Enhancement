<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OCP Dashboard Preview</title>
    <style>
    </style>
    <link rel="stylesheet" href="dashboard-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <!-- Dashboard Container -->
    <div class="sidebar">
        <div class="logo">
            <img src="../img/OCPlong.png" alt="OCP Logo">
            <span>OCP Portal</span>
        </div>

        <nav class="nav-menu">
            <div class="nav-item active">
                <a href="#" class="nav-link">
                    <i class="fas fa-tachometer-alt"></i>
                    Dashboard
                </a>
            </div>
            <div class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-building"></i>
                    My Business
                </a>
            </div>
            <div class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-file-invoice-dollar"></i>
                    Tax Services
                </a>
            </div>
            <div class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-id-card"></i>
                    Licenses
                </a>
            </div>
            <div class="nav-item">
                <a href="../Analytics.php" class="nav-link">
                    <i class="fas fa-chart-line"></i>
                    Analytics
                </a>
            </div>
            <div class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-file-alt"></i>
                    Documents
                </a>
            </div>
            <div class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-cog"></i>
                    Settings
                </a>
            </div>
        </nav>

        <div class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-sign-out-alt"></i>
                Logout
            </a>
        </div>
    </div>

    <div class="main-content">
        <header class="header">
            <div class="search-bar">
                <i class="fas fa-search"></i>
                <input type="text" placeholder="Search...">
            </div>

            <div class="user-menu">
                <i class="fas fa-bell"></i>
                <div class="user-avatar">AB</div>
            </div>
        </header>

        <div class="dashboard-content">
            <div id="dashboard" class="content-section active">
                <div class="welcome-banner">
                    <h1>Welcome back, Awang Baqir Business</h1>
                    <p>Here's what's happening with your business today. You have 3 pending tasks that need your
                        attention.
                    </p>
                </div>

                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-icon teal">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <div class="stat-info">
                            <h3>12</h3>
                            <p>Active Licenses</p>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon orange">
                            <i class="fas fa-clock"></i>
                        </div>
                        <div class="stat-info">
                            <h3>3</h3>
                            <p>Pending Tasks</p>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon red">
                            <i class="fas fa-exclamation-circle"></i>
                        </div>
                        <div class="stat-info">
                            <h3>1</h3>
                            <p>Urgent Alerts</p>
                        </div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon teal">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <div class="stat-info">
                            <h3>28</h3>
                            <p>Completed</p>
                        </div>
                    </div>
                </div>

                <div class="main-grid">
                    <div class="left-column">
                        <div class="card">
                            <div class="card-header">
                                <h2>Recent Activity</h2>
                                <a href="#">View All</a>
                            </div>

                            <div class="activity-list">
                                <div class="activity-item">
                                    <div class="activity-icon">
                                        <i class="fas fa-file-upload"></i>
                                    </div>
                                    <div class="activity-details">
                                        <h4>Annual Return Submitted</h4>
                                        <p>Your company annual return for 2025 has been successfully submitted</p>
                                        <div class="activity-time">
                                            <i class="fas fa-clock"></i> 2 hours ago
                                        </div>
                                    </div>
                                </div>

                                <div class="activity-item">
                                    <div class="activity-icon">
                                        <i class="fas fa-check-circle"></i>
                                    </div>
                                    <div class="activity-details">
                                        <h4>Tax Payment Approved</h4>
                                        <p>Your tax payment of BND 1,250.00 has been processed</p>
                                        <div class="activity-time">
                                            <i class="fas fa-clock"></i> 1 day ago
                                        </div>
                                    </div>
                                </div>

                                <div class="activity-item">
                                    <div class="activity-icon">
                                        <i class="fas fa-bell"></i>
                                    </div>
                                    <div class="activity-details">
                                        <h4>Renewal Reminder</h4>
                                        <p>Your business license expires in 14 days</p>
                                        <div class="activity-time">
                                            <i class="fas fa-clock"></i> 2 days ago
                                        </div>
                                    </div>
                                </div>

                                <div class="activity-item">
                                    <div class="activity-icon">
                                        <i class="fas fa-user-plus"></i>
                                    </div>
                                    <div class="activity-details">
                                        <h4>New Director Added</h4>
                                        <p>You've added a new director to your company</p>
                                        <div class="activity-time">
                                            <i class="fas fa-clock"></i> 3 days ago
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="right-column">
                        <div class="card">
                            <div class="card-header">
                                <h2>Quick Actions</h2>
                            </div>

                            <div class="quick-actions">
                                <a href="#" class="action-btn">
                                    <i class="fas fa-file-upload"></i>
                                    <span>Submit Return</span>
                                </a>

                                <a href="#" class="action-btn">
                                    <i class="fas fa-money-bill-wave"></i>
                                    <span>Make Payment</span>
                                </a>

                                <a href="#" class="action-btn">
                                    <i class="fas fa-id-card"></i>
                                    <span>Renew License</span>
                                </a>

                                <a href="#" class="action-btn">
                                    <i class="fas fa-user-edit"></i>
                                    <span>Update Details</span>
                                </a>

                                <a href="#" class="action-btn">
                                    <i class="fas fa-download"></i>
                                    <span>Download Certificate</span>
                                </a>

                                <a href="#" class="action-btn">
                                    <i class="fas fa-question-circle"></i>
                                    <span>Get Help</span>
                                </a>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h2>Upcoming Deadlines</h2>
                            </div>

                            <div class="deadline-item">
                                <div
                                    style="display: flex; align-items: center; padding: 0.75rem 0; border-bottom: 1px solid #f1f3f6;">
                                    <div
                                        style="background: rgba(255, 159, 28, 0.1); color: var(--ocp-orange); width: 36px; height: 36px; border-radius: 6px; display: flex; align-items: center; justify-content: center; margin-right: 1rem; flex-shrink: 0;">
                                        <i class="fas fa-calendar-day"></i>
                                    </div>
                                    <div>
                                        <h4 style="font-size: 0.95rem; margin-bottom: 0.1rem;">Annual Return Due</h4>
                                        <p style="color: #64748b; font-size: 0.85rem;">Due in 14 days</p>
                                    </div>
                                </div>

                                <div style="display: flex; align-items: center; padding: 0.75rem 0;">
                                    <div
                                        style="background: rgba(231, 29, 54, 0.1); color: var(--ocp-red); width: 36px; height: 36px; border-radius: 6px; display: flex; align-items: center; justify-content: center; margin-right: 1rem; flex-shrink: 0;">
                                        <i class="fas fa-exclamation-triangle"></i>
                                    </div>
                                    <div>
                                        <h4 style="font-size: 0.95rem; margin-bottom: 0.1rem;">Tax Payment</h4>
                                        <p style="color: #64748b; font-size: 0.85rem;">Due in 7 days</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu Toggle (for responsive) -->
    <button class="mobile-menu-toggle" id="mobileMenuToggle">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Notification Dropdown -->
    <div class="notification-dropdown">
        <div class="notification-header">
            <h3>Notifications</h3>
            <span class="notification-count">3</span>
        </div>
        <div class="notification-list">
            <div class="notification-item unread">
                <div class="notification-icon">
                    <i class="fas fa-file-alt"></i>
                </div>
                <div class="notification-content">
                    <p>Your annual return is due in 7 days</p>
                    <small>2 hours ago</small>
                </div>
            </div>
            <div class="notification-item unread">
                <div class="notification-icon">
                    <i class="fas fa-check-circle"></i>
                </div>
                <div class="notification-content">
                    <p>Tax payment approved</p>
                    <small>1 day ago</small>
                </div>
            </div>
            <div class="notification-item">
                <div class="notification-icon">
                    <i class="fas fa-bell"></i>
                </div>
                <div class="notification-content">
                    <p>License renewal reminder</p>
                    <small>3 days ago</small>
                </div>
            </div>
        </div>
        <a href="#" class="view-all">View All Notifications</a>
    </div>

    <script src="dashboard-script.js"></script>
</body>

</html>