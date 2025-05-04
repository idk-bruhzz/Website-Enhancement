document.addEventListener("DOMContentLoaded", function () {
  const observerOptions = {
    root: null,
    rootMargin: "0px",
    threshold: 0.2,
  };
  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        const element = entry.target;

        element.classList.add("animate-show");

        if (element.classList.contains("count")) {
          animateCount(element);
        }

        if (element.getAttribute("data-once") !== "false") {
          observer.unobserve(element);
        }
      }
    });
  }, observerOptions);

  document.querySelectorAll(".scroll-animate").forEach((element) => {
    observer.observe(element);
  });

  document.querySelectorAll("[data-stagger]").forEach((container) => {
    const items = container.querySelectorAll(".scroll-animate");
    items.forEach((item, index) => {
      item.classList.add(`delay-${(index + 1) * 100}`);
    });
  });

  function animateCount(element) {
    const target = parseInt(element.getAttribute("data-target") || 0);
    const duration = 2000;
    const start = 0;
    const increment = target / (duration / 16);
    let current = start;

    const timer = setInterval(() => {
      current += increment;
      if (current >= target) {
        clearInterval(timer);
        current = target;
        element.classList.add("count-animate");
      }
      element.textContent = Math.floor(current).toLocaleString();
    }, 16);
  }
});
