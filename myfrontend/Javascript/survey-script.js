document.addEventListener("DOMContentLoaded", function () {
  // Display NPS slider value
  const npsSlider = document.getElementById("nps");
  const npsValueDisplay = document.getElementById("npsValue");

  npsSlider.addEventListener("input", function () {
    npsValueDisplay.textContent = this.value;
  });

  // Set current page URL and timestamp
  document.getElementById("pageUrl").value = window.location.pathname;
  document.getElementById("timestamp").value = new Date().toISOString();

  // Form submission
  const form = document.getElementById("satisfactionSurvey");
  form.addEventListener("submit", function (e) {
    e.preventDefault();

    // Here you would typically send the data to your server
    // For demonstration, we'll show a thank you message
    const submitBtn = form.querySelector(".submit-btn");
    submitBtn.innerHTML = '<i class="fas fa-check"></i> Thank You!';
    submitBtn.style.backgroundColor = "#4CAF50";

    // Reset form after 2 seconds
    setTimeout(() => {
      form.reset();
      submitBtn.innerHTML =
        '<i class="fas fa-paper-plane"></i> Submit Feedback';
      submitBtn.style.backgroundColor = "";
      npsValueDisplay.textContent = "5";
    }, 2000);
  });

  // Add animation to radio buttons when selected
  const radioInputs = document.querySelectorAll(
    '.rating-option input[type="radio"]'
  );
  radioInputs.forEach((input) => {
    input.addEventListener("change", function () {
      const label = this.nextElementSibling;
      label.style.animation = "pulse 0.5s ease";
      setTimeout(() => {
        label.style.animation = "";
      }, 500);
    });
  });
});
