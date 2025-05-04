// Live Chat Toggle
document
  .querySelector(".live-chat-button")
  .addEventListener("click", function () {
    document.querySelector(".live-chat-container").classList.toggle("active");
  });

document.querySelector(".close-chat").addEventListener("click", function () {
  document.querySelector(".live-chat-container").classList.remove("active");
});

// Dark Mode Toggle - Updated to use data-theme attribute
document
  .getElementById("darkModeToggle")
  .addEventListener("click", function () {
    const currentTheme = document.documentElement.getAttribute("data-theme");
    const newTheme = currentTheme === "dark" ? "light" : "dark";

    // Set the new theme
    document.documentElement.setAttribute("data-theme", newTheme);

    // Store the preference in localStorage
    localStorage.setItem("theme", newTheme);

    // Update the toggle button state
    this.setAttribute("aria-pressed", newTheme === "dark");

    // Update the icon
    const icon = this.querySelector(".dark-mode-icon i");
    if (icon) {
      icon.className = newTheme === "dark" ? "fas fa-sun" : "fas fa-moon";
    }
  });

// Initialize theme on page load
function initializeTheme() {
  // Check for saved preference or use system preference
  const savedTheme = localStorage.getItem("theme");
  const systemPrefersDark = window.matchMedia(
    "(prefers-color-scheme: dark)"
  ).matches;
  const initialTheme = savedTheme || (systemPrefersDark ? "dark" : "light");

  // Apply the initial theme
  document.documentElement.setAttribute("data-theme", initialTheme);

  // Set the toggle button state
  const toggleBtn = document.getElementById("darkModeToggle");
  if (toggleBtn) {
    toggleBtn.setAttribute("aria-pressed", initialTheme === "dark");
    const icon = toggleBtn.querySelector(".dark-mode-icon i");
    if (icon) {
      icon.className = initialTheme === "dark" ? "fas fa-sun" : "fas fa-moon";
    }
  }
}

// Initialize when the page loads
document.addEventListener("DOMContentLoaded", initializeTheme);

// Watch for system theme changes
window
  .matchMedia("(prefers-color-scheme: dark)")
  .addEventListener("change", (e) => {
    if (!localStorage.getItem("theme")) {
      // Only if user hasn't set a preference
      const newTheme = e.matches ? "dark" : "light";
      document.documentElement.setAttribute("data-theme", newTheme);
    }
  });
