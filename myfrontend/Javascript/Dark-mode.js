document.addEventListener("DOMContentLoaded", function () {
  const darkModeToggle = document.getElementById("darkModeToggle");
  const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");
  const darkModeIcon = document.querySelector(".dark-mode-icon");

  const currentTheme =
    localStorage.getItem("theme") ||
    (prefersDarkScheme.matches ? "dark" : "light");

  if (currentTheme === "dark") {
    document.body.classList.add("dark-mode");
    darkModeIcon.innerHTML =
      '<i class="fas fa-moon"></i><i class="fas fa-sun"></i>';
  }

  darkModeToggle.addEventListener("click", function () {
    if (!document.querySelector(".dark-mode-icon .fa-sun")) {
      darkModeIcon.innerHTML =
        '<i class="fas fa-moon"></i><i class="fas fa-sun"></i>';
    }

    document.body.classList.toggle("dark-mode");
    const theme = document.body.classList.contains("dark-mode")
      ? "dark"
      : "light";
    localStorage.setItem("theme", theme);

    darkModeIcon.classList.add("animate");
    setTimeout(() => {
      darkModeIcon.classList.remove("animate");
    }, 500);
  });

  prefersDarkScheme.addListener((e) => {
    if (!localStorage.getItem("theme")) {
      document.body.classList.toggle("dark-mode", e.matches);
    }
  });
});
