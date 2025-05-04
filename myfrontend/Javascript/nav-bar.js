document.addEventListener("DOMContentLoaded", function () {
  // ===== MOBILE MENU & SEARCH FUNCTIONALITY (from first snippet) =====
  const mobileMenuToggle = document.querySelector(".mobile-menu-toggle");
  const navList = document.querySelector(".nav-list");
  const searchToggle = document.querySelector(".search-toggle");
  const searchBar = document.querySelector(".search-bar");
  const searchForm = document.querySelector(".search-bar form");

  // Mobile menu toggle
  if (mobileMenuToggle && navList) {
    mobileMenuToggle.addEventListener("click", function () {
      navList.classList.toggle("active");
      searchBar.classList.remove("active"); // Close search when opening menu
      this.innerHTML = navList.classList.contains("active") ? "✕" : "☰";
      updateVerticalBar(); // Update vertical bar position if needed
    });
  }

  // Search functionality
  if (searchToggle && searchBar) {
    searchToggle.addEventListener("click", function (e) {
      e.stopPropagation();
      searchBar.classList.toggle("active");
      if (searchBar.classList.contains("active")) {
        const input = searchBar.querySelector("input");
        if (input) input.focus();
      }
      if (navList) navList.classList.remove("active"); // Close menu when opening search
      updateVerticalBar(); // Update vertical bar position if needed
    });

    // Close search when clicking outside
    document.addEventListener("click", function (e) {
      if (
        !e.target.closest(".search-bar") &&
        !e.target.matches(".search-toggle")
      ) {
        searchBar.classList.remove("active");
      }
    });

    // Search form submission
    if (searchForm) {
      searchForm.addEventListener("submit", function (e) {
        e.preventDefault();
        const searchTerm = this.querySelector("input").value.trim();
        if (searchTerm) {
          console.log("Searching for:", searchTerm);
          // Add your search functionality here
        }
      });
    }
  }

  // Close menu when clicking nav links
  document.querySelectorAll(".nav-list a").forEach((link) => {
    link.addEventListener("click", function () {
      navList.classList.remove("active");
      mobileMenuToggle.innerHTML = "☰";
      updateVerticalBar();
    });
  });
});
