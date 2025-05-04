document.addEventListener("DOMContentLoaded", function () {
  // Hero section animations
  const heroTl = gsap.timeline();

  // Background shapes animation
  heroTl
    .from(".shape-circle", {
      duration: 2,
      x: -100,
      y: -50,
      rotation: 180,
      ease: "sine.out",
    })
    .from(
      ".shape-triangle",
      {
        duration: 1.5,
        x: 100,
        y: 50,
        rotation: -90,
        ease: "back.out(1.2)",
      },
      "-=1.5"
    )
    .from(
      ".shape-wave",
      {
        duration: 2,
        scale: 0,
        rotation: 45,
        ease: "elastic.out(1, 0.5)",
      },
      "-=1.5"
    );

  // Text/staggered content animation
  gsap.from(".hero-title span, .hero-text, .hero-buttons a", {
    duration: 1.2,
    y: 30,
    opacity: 0,
    stagger: 0.15,
    ease: "power2.out",
    delay: 0.3,
  });

  // Stats counter animation
  gsap.utils.toArray(".stat-number").forEach((stat) => {
    const target = parseInt(stat.textContent);
    stat.textContent = "0";

    gsap.to(stat, {
      duration: 2,
      innerText: target,
      snap: { innerText: 1 },
      ease: "power2.out",
      scrollTrigger: {
        trigger: stat,
        start: "top 80%",
      },
    });
  });

  // Feature cards hover animation
  gsap.utils.toArray(".feature-card").forEach((card) => {
    gsap.to(card, {
      y: -10,
      duration: 0.3,
      ease: "power1.out",
      paused: true,
      scrollTrigger: {
        trigger: card,
        start: "top 85%",
      },
    });

    card.addEventListener("mouseenter", () => {
      gsap.to(card, {
        y: -15,
        boxShadow: "0 15px 30px rgba(0,0,0,0.15)",
        duration: 0.4,
      });
    });

    card.addEventListener("mouseleave", () => {
      gsap.to(card, {
        y: -10,
        boxShadow: "0 8px 20px rgba(0,0,0,0.1)",
        duration: 0.4,
      });
    });
  });
});
