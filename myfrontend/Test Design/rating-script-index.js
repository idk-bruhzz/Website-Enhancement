document.addEventListener("DOMContentLoaded", function () {
  // Elements
  const widget = document.querySelector(".rating-widget");
  const closeBtn = document.querySelector(".close-btn");
  const emojis = document.querySelectorAll(".emoji-rating span");
  const qrPopup = document.querySelector(".qr-popup");
  const qrClose = document.querySelector(".close-qr");

  // State
  let selectedRating = 0;

  // Close widget
  closeBtn.addEventListener("click", () => {
    gsap.to(widget, {
      y: 100,
      opacity: 0,
      duration: 0.3,
      onComplete: () => widget.remove(),
    });
  });

  // Emoji hover effects
  emojis.forEach((emoji) => {
    emoji.addEventListener("mouseenter", () => {
      if (selectedRating) return;
      gsap.to(emoji, {
        scale: 1.2,
        duration: 0.2,
      });
    });

    emoji.addEventListener("mouseleave", () => {
      if (selectedRating) return;
      gsap.to(emoji, {
        scale: 1,
        duration: 0.2,
      });
    });

    // Emoji click
    emoji.addEventListener("click", () => {
      selectedRating = emoji.dataset.rating;

      // Highlight selected emojis
      emojis.forEach((e, i) => {
        if (i < selectedRating) {
          e.classList.add("active");
        } else {
          e.classList.remove("active");
        }
      });

      // Show QR popup after delay
      setTimeout(() => {
        qrPopup.classList.add("active");
      }, 800);
    });
  });

  // Close QR popup
  qrClose.addEventListener("click", () => {
    qrPopup.classList.remove("active");

    // Reset rating after close
    setTimeout(() => {
      selectedRating = 0;
      emojis.forEach((e) => e.classList.remove("active"));
    }, 300);
  });
});
