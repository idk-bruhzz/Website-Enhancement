document.addEventListener("DOMContentLoaded", function () {
  // Mobile Menu Toggle
  const mobileMenuToggle = document.getElementById("mobileMenuToggle");
  const sidebar = document.querySelector(".sidebar");

  if (mobileMenuToggle && sidebar) {
    mobileMenuToggle.addEventListener("click", function () {
      sidebar.classList.toggle("active");
    });
  }

  // Menu Navigation
  const navItems = document.querySelectorAll(".nav-item:not(:last-child)");
  const contentSections = document.querySelectorAll(".content-section");

  navItems.forEach((item) => {
    item.addEventListener("click", function (e) {
      e.preventDefault();

      // Remove active class from all items
      navItems.forEach((navItem) => navItem.classList.remove("active"));

      // Add active class to clicked item
      this.classList.add("active");

      // Hide all content sections
      contentSections.forEach((section) => section.classList.remove("active"));

      // Show corresponding content section
      const target = this.querySelector("a").getAttribute("href").substring(1);
      document.getElementById(target).classList.add("active");
    });
  });

  // Notification Bell
  const notificationBell = document.querySelector(".user-menu .fa-bell");
  const notificationDropdown = document.querySelector(".notification-dropdown");

  if (notificationBell && notificationDropdown) {
    // Add ring animation when there are unread notifications
    const unreadNotifications = document.querySelectorAll(
      ".notification-item.unread"
    );
    if (unreadNotifications.length > 0) {
      notificationBell.classList.add("bell-ring");

      // Remove animation after it plays
      notificationBell.addEventListener("animationend", function () {
        this.classList.remove("bell-ring");
      });
    }

    // Toggle dropdown
    notificationBell.addEventListener("click", function (e) {
      e.stopPropagation();
      notificationDropdown.classList.toggle("active");

      // Mark notifications as read when dropdown is opened
      if (notificationDropdown.classList.contains("active")) {
        unreadNotifications.forEach((item) => {
          item.classList.remove("unread");
        });

        // Update notification count
        const notificationCount = document.querySelector(".notification-count");
        if (notificationCount) {
          notificationCount.textContent = "0";
          notificationCount.style.backgroundColor = "#94a3b8";
        }
      }
    });

    // Close dropdown when clicking outside
    document.addEventListener("click", function (e) {
      if (
        !notificationDropdown.contains(e.target) &&
        e.target !== notificationBell
      ) {
        notificationDropdown.classList.remove("active");
      }
    });
  }

  // Initialize - show dashboard by default
  document.querySelector(".nav-item.active a").click();
});
