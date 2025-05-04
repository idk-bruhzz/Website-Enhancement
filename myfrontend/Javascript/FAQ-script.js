document.addEventListener("DOMContentLoaded", function () {
  const mobileMenuToggle = document.querySelector(".mobile-menu-toggle");
  const navList = document.querySelector(".nav-list");

  if (mobileMenuToggle && navList) {
    mobileMenuToggle.addEventListener("click", function () {
      navList.classList.toggle("active");

      if (navList.classList.contains("active")) {
        this.innerHTML = "✕";
      } else {
        this.innerHTML = "☰";
      }
    });
  }

  const searchToggle = document.querySelector(".search-toggle");
  const searchBar = document.querySelector(".search-bar");
  const searchForm = document.querySelector(".search-bar form");

  if (searchToggle && searchBar) {
    searchToggle.addEventListener("click", function (e) {
      e.stopPropagation();
      searchBar.classList.toggle("active");

      if (searchBar.classList.contains("active")) {
        const input = searchBar.querySelector("input");
        if (input) input.focus();
      }

      if (navList) navList.classList.remove("active");
    });

    document.addEventListener("click", function (e) {
      if (
        !e.target.closest(".search-bar") &&
        !e.target.matches(".search-toggle")
      ) {
        searchBar.classList.remove("active");
      }
    });

    if (searchForm) {
      searchForm.addEventListener("submit", function (e) {
        e.preventDefault();
        const searchInput = this.querySelector("input");
        const searchTerm = searchInput.value.trim();

        if (searchTerm) {
          console.log("Searching for:", searchTerm);
        }
      });
    }
  }

  const topics = document.querySelectorAll(".topics-list li");
  const accordionSections = document.querySelectorAll(".accordion-section");
  const scrollToTopBtn = document.getElementById("scrollToTopBtn");

  window.addEventListener("scroll", function () {
    if (window.pageYOffset > 300) {
      scrollToTopBtn.classList.add("visible");
    } else {
      scrollToTopBtn.classList.remove("visible");
    }
  });

  scrollToTopBtn.addEventListener("click", function (e) {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });

  topics.forEach((topic) => {
    topic.addEventListener("click", () => {
      topics.forEach((t) => t.classList.remove("active"));
      topic.classList.add("active");

      accordionSections.forEach((section) => (section.style.display = "none"));

      const topicId = topic.getAttribute("data-topic");
      const selectedSection = document.querySelector(
        `.accordion-section[data-topic="${topicId}"]`
      );
      if (selectedSection) selectedSection.style.display = "block";
    });
  });

  const accordionHeaders = document.querySelectorAll(".accordion-header");

  accordionHeaders.forEach((header) => {
    header.addEventListener("click", () => {
      const content = header.nextElementSibling;
      const isActive = header.classList.contains("active");

      header.classList.toggle("active");
      content.classList.toggle("active");

      accordionHeaders.forEach((h) => {
        if (h !== header) {
          h.classList.remove("active");
          h.nextElementSibling.classList.remove("active");
        }
      });
    });
  });
});
