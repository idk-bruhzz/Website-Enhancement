document
  .querySelector(".live-chat-button")
  .addEventListener("click", function () {
    document.querySelector(".live-chat-container").classList.toggle("active");
  });

document.querySelector(".close-chat").addEventListener("click", function () {
  document.querySelector(".live-chat-container").classList.remove("active");
});

document
  .getElementById("darkModeToggle")
  .addEventListener("click", function () {
    document.documentElement.classList.toggle("dark-mode");
  });
