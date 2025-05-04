document.addEventListener("DOMContentLoaded", function () {
  // Reset all bars to zero height initially
  function resetBars() {
    const bars = document.querySelectorAll(".chart-bar");
    bars.forEach((bar) => {
      const fill = bar.querySelector(".bar-fill");
      fill.style.height = "0%";
      fill.classList.remove("animated");
    });
  }

  // Animate bars when in view
  function setupAnimationObserver() {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const bar = entry.target;
            const fill = bar.querySelector(".bar-fill");
            const value = bar.getAttribute("data-value");

            let targetHeight;
            switch (value) {
              case "150000":
                targetHeight = "30%";
                break;
              case "320000":
                targetHeight = "50%";
                break;
              case "545000":
                targetHeight = "70%";
                break;
              case "785000":
              case "1200000":
              default:
                targetHeight = "100%";
            }

            fill.style.setProperty("--target-height", targetHeight);
            fill.classList.add("animated");

            observer.unobserve(bar);
          }
        });
      },
      { threshold: 0.5 }
    );

    document.querySelectorAll(".chart-bar").forEach((bar) => {
      observer.observe(bar);
    });
  }

  resetBars();
  setupAnimationObserver();

  window.addEventListener("beforeunload", () => {
    resetBars();
  });
});
