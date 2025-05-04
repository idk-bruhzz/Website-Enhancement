document.addEventListener("DOMContentLoaded", function () {
  const liveChatBtn = document.querySelector(".live-chat-button");
  const chatWindow = document.querySelector(".chat-window");
  const closeChatBtn = document.querySelector(".close-chat");
  const chatInput = document.querySelector(".chat-input");
  const sendBtn = document.querySelector(".send-button");
  const chatBody = document.querySelector(".chat-body");
  const typingIndicator = document.querySelector(".typing-indicator");
  const scrollToTopBtn = document.getElementById("scrollToTopBtn");
  const scrollPosition = window.scrollY || document.documentElement.scrollTop;
  const windowHeight = window.innerHeight;
  const documentHeight = document.documentElement.scrollHeight;
  const distanceFromBottom = documentHeight - (scrollPosition + windowHeight);
  const stars = document.querySelectorAll(".star");
  const ratingWidget = document.querySelector(".rating-widget");
  const prompt = document.querySelector(".rating-prompt");
  const cards = document.querySelectorAll(".feature-card");

  cards.forEach((card, index) => {
    card.style.setProperty("--order", index);
  });

  if (window.innerWidth <= 768) {
    cards.forEach((card) => {
      card.addEventListener("click", function () {
        this.classList.toggle("active");
      });
    });
  }

  let currentRating = 0;
  let isFirstMessage = true;

  document
    .querySelector(".language-switcher-toggle")
    .addEventListener("click", function (e) {
      e.preventDefault();
      document.querySelector(".language-switcher").classList.toggle("active");
    });

  document.addEventListener("click", function (e) {
    if (!e.target.closest(".language-switcher")) {
      document.querySelector(".language-switcher").classList.remove("active");
    }
  });

  document.querySelectorAll(".language-option").forEach((option) => {
    option.addEventListener("click", function (e) {
      e.preventDefault();
      const lang = this.querySelector("span").textContent;
      const flag = this.querySelector(".language-flag").src;

      document.querySelector(".language-name").textContent = lang
        .substring(0, 2)
        .toUpperCase();
      document.querySelector(".language-switcher-toggle .language-flag").src =
        flag;

      document.querySelector(".language-switcher").classList.remove("active");

      console.log("Changing language to:", lang);
    });
  });

  // Modified live chat button handler
  liveChatBtn.addEventListener("click", function (e) {
    e.preventDefault();

    if (chatWindow.classList.contains("active")) {
      chatWindow.classList.remove("active");
      this.setAttribute("data-tooltip", "Live Chat");
      // Remove the setTimeout for display none - we'll handle with opacity
    } else {
      chatWindow.classList.add("active");
      this.setAttribute("data-tooltip", "Close Chat");
      chatInput.focus();

      // Hide notifications when chat is opened
      const badge = this.querySelector(".notification-badge");
      if (badge) badge.style.display = "none";
    }
  });

  // Modified close chat handler
  closeChatBtn.addEventListener("click", function () {
    chatWindow.classList.remove("active");
    liveChatBtn.setAttribute("data-tooltip", "Live Chat");
  });

  // Modified click outside handler
  document.addEventListener("click", function (e) {
    if (
      !e.target.closest(".chat-window") &&
      !e.target.closest(".live-chat-button") &&
      chatWindow.classList.contains("active")
    ) {
      chatWindow.classList.remove("active");
      liveChatBtn.setAttribute("data-tooltip", "Live Chat");
    }
  });

  // Keep your existing addMessage function exactly as is
  function addMessage(text, sender, isSystem = false) {
    const messageDiv = document.createElement("div");
    messageDiv.classList.add("chat-message", sender);

    const contentDiv = document.createElement("div");
    contentDiv.classList.add("message-content");
    contentDiv.textContent = text;

    messageDiv.appendChild(contentDiv);
    chatBody.appendChild(messageDiv);

    chatBody.scrollTo({
      top: chatBody.scrollHeight,
      behavior: "smooth",
    });

    if (
      sender === "agent" &&
      !chatWindow.classList.contains("active") &&
      !isSystem
    ) {
      liveChatBtn.classList.add("pulse");
      // Update notification badge
      const badge = liveChatBtn.querySelector(".notification-badge");
      if (badge) {
        const count = parseInt(badge.textContent) || 0;
        badge.textContent = count + 1;
        badge.style.display = "flex";
      }
    }
  }

  // Keep your existing sendMessage function exactly as is
  function sendMessage() {
    const message = chatInput.value.trim();
    if (message) {
      addMessage(message, "user");
      chatInput.value = "";

      typingIndicator.style.display = "flex";

      setTimeout(() => {
        typingIndicator.style.display = "none";
        const responses = [
          "Thanks for your message! How can I help?",
          "I'll check that for you right away.",
          "We appreciate your feedback!",
          "Let me find that information for you.",
        ];
        const randomResponse =
          responses[Math.floor(Math.random() * responses.length)];
        addMessage(randomResponse, "agent");
      }, 1500 + Math.random() * 2000);
    }
  }

  sendBtn.addEventListener("click", sendMessage);

  chatInput.addEventListener("keypress", function (e) {
    if (e.key === "Enter") {
      sendMessage();
    }
  });

  function checkScroll() {
    const scrollPosition = window.scrollY || document.documentElement.scrollTop;
    const windowHeight = window.innerHeight;
    const documentHeight = document.documentElement.scrollHeight;
    const distanceFromBottom = documentHeight - (scrollPosition + windowHeight);

    if (distanceFromBottom < 300 || chatWindow.classList.contains("active")) {
      scrollToTopBtn.classList.add("visible");
      scrollToTopBtn.style.bottom = chatWindow.classList.contains("active")
        ? "calc(90px + 350px)"
        : "90px";
    } else {
      scrollToTopBtn.classList.remove("visible");
    }
  }

  window.addEventListener("scroll", checkScroll);
  checkScroll();
  scrollToTopBtn.addEventListener("click", function (e) {
    e.preventDefault();
    window.scrollTo({
      top: 0,
      behavior: "smooth",
    });
  });

  setTimeout(() => {
    ratingWidget.classList.add("visible");

    stars.forEach((star, index) => {
      setTimeout(() => {
        star.classList.add("visible");
      }, index * 100);
    });
  }, 1000);

  stars.forEach((star) => {
    star.addEventListener("mouseover", () => {
      const ratingValue = parseInt(star.getAttribute("data-rating"));
      highlightStars(ratingValue);
    });

    star.addEventListener("mouseout", () => {
      if (!currentRating) {
        resetStars();
      } else {
        highlightStars(currentRating);
      }
    });

    star.addEventListener("click", (e) => {
      currentRating = parseInt(star.getAttribute("data-rating"));
      highlightStars(currentRating);
      submitRating(currentRating);

      const ripple = document.createElement("span");
      ripple.classList.add("ripple");
      star.appendChild(ripple);
      setTimeout(() => ripple.remove(), 600);
    });
  });

  function highlightStars(rating) {
    stars.forEach((star, index) => {
      star.classList.remove("hovered", "selected");
      if (index < rating) {
        star.classList.add("hovered");
      }
    });
  }

  function resetStars() {
    stars.forEach((star) => {
      star.classList.remove("hovered", "selected");
    });
  }

  function submitRating(rating) {
    console.log("User rated:", rating, "stars");

    const messages = [
      "Thanks!",
      "Appreciated!",
      "Awesome!",
      "Fantastic!",
      "Perfect!",
    ];
    prompt.textContent = messages[rating - 1];
    prompt.style.fontWeight = "600";
    prompt.style.color = "#2d3748";

    stars.forEach((star, index) => {
      star.classList.remove("hovered");
      if (index < rating) {
        setTimeout(() => {
          star.classList.add("selected");
        }, index * 100);
      }
    });

    ratingWidget.classList.add("submitted");

    setTimeout(() => {
      ratingWidget.style.opacity = "0.8";
      ratingWidget.style.transform = "translateY(10px)";
    }, 3000);
  }

  //   // Notification sound for new messages (optional)
  //   function playNotificationSound() {
  //     const audio = new Audio(
  //       "https://assets.mixkit.co/sfx/preview/mixkit-software-interface-start-2574.mp3"
  //     );
  //     audio.volume = 0.3;
  //     audio.play().catch((e) => console.log("Audio play failed:", e));
  //   }
});
