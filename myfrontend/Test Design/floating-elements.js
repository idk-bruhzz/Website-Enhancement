document.addEventListener("DOMContentLoaded", function () {
  // Configuration
  const config = {
    totalElements: 15, // Number of elements to create
    containerMargin: 50, // Margin from container edges
    minDistance: 80, // Minimum distance between elements
    sizeRange: { min: 30, max: 60 }, // Element size range
    opacityRange: { min: 0.6, max: 0.9 }, // Opacity range
    animationDuration: { min: 8, max: 15 }, // Float animation duration
    colors: [
      // Color palette
      "rgba(0, 180, 216, 0.8)", // Teal
      "rgba(238, 96, 85, 0.8)", // Coral
      "rgba(247, 157, 101, 0.8)", // Orange
      "rgba(163, 218, 255, 0.8)", // Light blue
      "rgba(255, 203, 119, 0.8)", // Yellow
    ],
    icons: [
      // Font Awesome icons
      "file-invoice-dollar",
      "chart-line",
      "building",
      "landmark",
      "handshake",
      "file-contract",
      "balance-scale",
      "briefcase",
      "coins",
    ],
    shapes: ["circle", "square", "blob"], // Different shape styles
  };

  // Get container
  const container = document.querySelector(".graphics-container");
  if (!container) return;

  // Create floating elements container
  const floatingContainer = document.createElement("div");
  floatingContainer.className = "floating-elements";
  container.appendChild(floatingContainer);

  // Create elements with entrance animations
  for (let i = 0; i < config.totalElements; i++) {
    createFloatingElement(floatingContainer, container, config, i);
  }

  // Continuous drifting animation
  startDrifting(floatingContainer, container, config);
});

function createFloatingElement(container, parentContainer, config, index) {
  const element = document.createElement("div");
  element.className = "floating-element";

  // Random properties
  const size = randomInRange(config.sizeRange.min, config.sizeRange.max);
  const color = config.colors[Math.floor(Math.random() * config.colors.length)];
  const icon = config.icons[Math.floor(Math.random() * config.icons.length)];
  const shape = config.shapes[Math.floor(Math.random() * config.shapes.length)];
  const rotation = randomInRange(-10, 10);

  // Set element styles
  element.style.width = `${size}px`;
  element.style.height = `${size}px`;
  element.style.backgroundColor = color;
  element.style.opacity = "0"; // Start invisible
  element.classList.add(shape);

  // Add icon
  element.innerHTML = `<i class="fas fa-${icon}"></i>`;

  // Position element (off-screen initially)
  const startX = randomInRange(-100, parentContainer.offsetWidth + 100);
  const startY = randomInRange(-100, parentContainer.offsetHeight + 100);
  element.style.left = `${startX}px`;
  element.style.top = `${startY}px`;

  container.appendChild(element);

  // Animate entrance
  gsap.fromTo(
    element,
    {
      x: randomInRange(-200, 200),
      y: randomInRange(-200, 200),
      opacity: 0,
      scale: 0.5,
      rotation: rotation - 30,
    },
    {
      x: 0,
      y: 0,
      opacity: randomInRange(config.opacityRange.min, config.opacityRange.max),
      scale: 1,
      rotation: rotation,
      duration: 1.5,
      delay: index * 0.2,
      ease: "back.out(1.7)",
      onComplete: () => {
        // Start float animation after entrance
        startFloatAnimation(element, config);
      },
    }
  );

  // Add hover effects
  element.addEventListener("mouseenter", () => {
    gsap.to(element, {
      scale: 1.2,
      zIndex: 10,
      boxShadow: "0 0 20px rgba(255, 255, 255, 0.6)",
      duration: 0.3,
    });
  });

  element.addEventListener("mouseleave", () => {
    gsap.to(element, {
      scale: 1,
      zIndex: 1,
      boxShadow: "0 4px 20px rgba(0, 0, 0, 0.1)",
      duration: 0.3,
    });
  });
}

function startFloatAnimation(element, config) {
  const duration = randomInRange(
    config.animationDuration.min,
    config.animationDuration.max
  );

  gsap.to(element, {
    y: randomInRange(-20, 20),
    rotation: element._rotation + randomInRange(-5, 5),
    duration: duration,
    repeat: -1,
    yoyo: true,
    ease: "sine.inOut",
  });
}

function startDrifting(container, parentContainer, config) {
  const elements = container.querySelectorAll(".floating-element");

  function updatePositions() {
    elements.forEach((element) => {
      if (!element._targetX || !element._targetY) {
        // Set initial target position
        element._targetX = parseFloat(element.style.left);
        element._targetY = parseFloat(element.style.y);
      }

      // Calculate new target position
      const newX = randomInRange(
        config.containerMargin,
        parentContainer.offsetWidth - config.containerMargin
      );

      const newY = randomInRange(
        config.containerMargin,
        parentContainer.offsetHeight - config.containerMargin
      );

      // Animate to new position
      gsap.to(element, {
        left: newX,
        top: newY,
        duration: randomInRange(15, 30),
        ease: "power1.inOut",
        onComplete: () => {
          element._targetX = newX;
          element._targetY = newY;
        },
      });
    });

    // Schedule next position update
    setTimeout(updatePositions, randomInRange(15000, 30000));
  }

  // Start the drifting
  updatePositions();
}

function randomInRange(min, max) {
  return min + Math.random() * (max - min);
}
