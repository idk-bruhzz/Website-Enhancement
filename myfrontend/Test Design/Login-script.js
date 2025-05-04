// Registration
document.addEventListener("DOMContentLoaded", function () {
  // Get elements
  const showRegister = document.getElementById("showRegister");
  const backToLogin = document.getElementById("backToLogin");
  const flipPage = document.querySelector(".flip-page");

  // Show registration form
  if (showRegister) {
    showRegister.addEventListener("click", function (e) {
      e.preventDefault();
      flipPage.classList.add("flipped");
      gsap.to(flipPage, {
        rotationY: 180,
        duration: 0.8,
        ease: "power2.inOut",
      });
    });
  }

  // Show login form
  if (backToLogin) {
    backToLogin.addEventListener("click", function (e) {
      e.preventDefault();
      // Optional GSAP animation for smoother effect
      gsap.to(flipPage, {
        rotationY: 0,
        duration: 0.8,
        ease: "power2.inOut",
        onComplete: function () {
          flipPage.classList.remove("flipped");
        },
      });
    });
  }
});

// Login
document.addEventListener("DOMContentLoaded", function () {
  // Initialize AOS
  AOS.init({
    duration: 800,
    easing: "ease-in-out",
    once: true,
  });

  // Password toggle functionality (optional - can remove if not needed)
  const passwordToggle = document.getElementById("passwordToggle");
  const passwordInput = document.getElementById("password");

  if (passwordToggle && passwordInput) {
    passwordToggle.addEventListener("click", function () {
      const type =
        passwordInput.getAttribute("type") === "password" ? "text" : "password";
      passwordInput.setAttribute("type", type);
      this.innerHTML =
        type === "password"
          ? '<i class="fas fa-eye"></i>'
          : '<i class="fas fa-eye-slash"></i>';
    });
  }

  // Form submission - redirect immediately on submit
  const loginForm = document.getElementById("loginForm");
  if (loginForm) {
    loginForm.addEventListener("submit", function (e) {
      e.preventDefault();
      // Redirect to dashboard immediately
      window.location.href = "dashboard.php";
    });
  }

  // Back to top button
  const backToTopButton = document.getElementById("back-to-top");
  if (backToTopButton) {
    window.addEventListener("scroll", function () {
      if (window.pageYOffset > 300) {
        backToTopButton.classList.add("visible");
      } else {
        backToTopButton.classList.remove("visible");
      }
    });

    backToTopButton.addEventListener("click", function (e) {
      e.preventDefault();
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  }

  // Mobile menu toggle
  const mobileMenuToggle = document.getElementById("mobile-menu-toggle");
  const navMenu = document.getElementById("nav-menu");

  if (mobileMenuToggle && navMenu) {
    mobileMenuToggle.addEventListener("click", function () {
      this.classList.toggle("active");
      navMenu.classList.toggle("active");
      document.body.classList.toggle("no-scroll");
    });
  }
});
