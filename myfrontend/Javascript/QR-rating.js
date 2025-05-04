// Show rating widget after delay
setTimeout(() => {
  document.querySelector(".rating-widget").classList.add("visible");

  // Make stars appear one by one
  const stars = document.querySelectorAll(".star");
  stars.forEach((star, index) => {
    setTimeout(() => {
      star.style.opacity = 1;
      star.style.transform = "translateY(0)";
    }, index * 100);
  });
}, 1000);

// Star rating interaction
document.querySelectorAll(".star").forEach((star) => {
  star.addEventListener("click", function () {
    const widget = document.querySelector(".rating-widget");

    document
      .querySelectorAll(".star")
      .forEach((s) => s.classList.remove("selected"));

    this.classList.add("selected");

    widget.classList.remove("submitted");

    widget.classList.add("submitted");

    setTimeout(() => {
      document.querySelector(".qr-popup").classList.add("active");
    }, 800);
  });
});

// Close popup handlers
document.querySelector(".qr-close").addEventListener("click", function () {
  document.querySelector(".qr-popup").classList.remove("active");
  document.querySelector(".rating-widget").classList.remove("submitted");
});

document.querySelector(".qr-popup").addEventListener("click", function (e) {
  if (e.target === this) {
    this.classList.remove("active");
    document.querySelector(".rating-widget").classList.remove("submitted");
  }
});
