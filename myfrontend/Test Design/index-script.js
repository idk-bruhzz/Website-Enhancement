document.addEventListener("DOMContentLoaded", function () {
  // Initialize AOS
  AOS.init({
    duration: 800,
    easing: "ease-in-out",
    once: false,
    mirror: true,
    offset: 120,
    disable: window.innerWidth < 768,
  });

  // Mobile menu toggle
  const mobileMenuToggle = document.getElementById("mobile-menu-toggle");
  const navMenu = document.getElementById("nav-menu");

  mobileMenuToggle.addEventListener("click", function () {
    this.classList.toggle("active");
    navMenu.classList.toggle("active");
    this.setAttribute("aria-expanded", this.classList.contains("active"));
  });

  // Close mobile menu when clicking on a link
  document.querySelectorAll(".nav-link").forEach((link) => {
    link.addEventListener("click", () => {
      mobileMenuToggle.classList.remove("active");
      navMenu.classList.remove("active");
      mobileMenuToggle.setAttribute("aria-expanded", "false");
    });
  });

  // Navbar scroll effect
  const navbar = document.getElementById("navbar");
  window.addEventListener("scroll", function () {
    if (window.scrollY > 50) {
      navbar.classList.add("scrolled");
    } else {
      navbar.classList.remove("scrolled");
    }
  });

  // Back to top button
  const backToTop = document.getElementById("back-to-top");
  window.addEventListener("scroll", function () {
    if (window.scrollY > 300) {
      backToTop.classList.add("visible");
    } else {
      backToTop.classList.remove("visible");
    }
  });

  // Smooth scrolling for anchor links
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();

      const targetId = this.getAttribute("href");
      if (targetId === "#") return;

      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        window.scrollTo({
          top: targetElement.offsetTop - 80,
          behavior: "smooth",
        });
      }
    });
  });

  // Animate stats counters
  const animateCounters = () => {
    const counters = document.querySelectorAll(".stat-number");
    const speed = 100;

    counters.forEach((counter) => {
      const target = +counter.getAttribute("data-count");
      const increment = target / speed;
      let current = 0;

      // Set initial value to 0
      counter.innerText = "0";

      const updateCounter = () => {
        current += increment;
        if (current < target) {
          counter.innerText = Math.ceil(current);
          requestAnimationFrame(updateCounter);
        } else {
          counter.innerText = target;
        }
      };

      updateCounter();
    });
  };

  // Trigger counters when stats section is in view
  const statsSection = document.querySelector(".stats");
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          animateCounters();
          observer.unobserve(entry.target);
        }
      });
    },
    {
      threshold: 0.5,
    }
  );

  if (statsSection) {
    observer.observe(statsSection);
  }

  // Preload images
  function preloadImage(url) {
    const img = new Image();
    img.src = url;
  }

  // List of images to preload
  const imagesToPreload = [
    "Dashboard.png",
    "img/news-maintenance.jpg",
    "img/news-features.jpg",
    "img/news-mobile.jpg",
    "img/testimonial-1.jpg",
    "img/testimonial-2.jpg",
    "img/testimonial-3.jpg",
  ];

  imagesToPreload.forEach(preloadImage);
});
