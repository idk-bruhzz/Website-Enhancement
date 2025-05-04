document.addEventListener("DOMContentLoaded", function () {
  const container = document.getElementById("sparkle-background");
  const colors = ["color-1", "color-2", "color-3", "color-4"];
  const sparkleCount = 60; // Number of sparkles

  // Create sparkles distributed randomly across the hero section
  for (let i = 0; i < sparkleCount; i++) {
    const sparkle = document.createElement("div");
    sparkle.className =
      "sparkle " + colors[Math.floor(Math.random() * colors.length)];
    container.appendChild(sparkle);

    // Position randomly in the hero section
    positionSparkle(sparkle);

    // Animate each sparkle with random delays
    animateSparkle(sparkle, i);
  }

  // Reposition sparkles on window resize
  window.addEventListener("resize", function () {
    const sparkles = document.querySelectorAll(".sparkle");
    sparkles.forEach((sparkle) => positionSparkle(sparkle));
  });

  function positionSparkle(sparkle) {
    // Position randomly within the hero section
    const x = Math.random() * 100;
    const y = Math.random() * 100;

    gsap.set(sparkle, {
      x: `${x}%`,
      y: `${y}%`,
      scale: 0,
      opacity: 0,
    });
  }

  function animateSparkle(sparkle, index) {
    const duration = 2 + Math.random() * 3;
    const delay = index * 0.1 + Math.random() * 2;

    // Create a timeline for each sparkle
    const tl = gsap.timeline({
      repeat: -1,
      repeatDelay: 3 + Math.random() * 5,
      delay: delay,
    });

    // Sparkle animation sequence
    tl.to(sparkle, {
      opacity: 1,
      scale: 1.2,
      duration: duration * 0.3,
      ease: "power2.out",
    })
      .to(sparkle, {
        opacity: 0.3,
        scale: 0.8,
        duration: duration * 0.2,
        ease: "sine.inOut",
      })
      .to(sparkle, {
        opacity: 0,
        scale: 0,
        duration: duration * 0.5,
        ease: "power2.in",
      });

    // Add slight movement
    const movementX = -10 + Math.random() * 20;
    const movementY = -10 + Math.random() * 20;

    tl.to(
      sparkle,
      {
        x: `+=${movementX}`,
        y: `+=${movementY}`,
        duration: duration,
        ease: "none",
      },
      0
    );
  }
});
