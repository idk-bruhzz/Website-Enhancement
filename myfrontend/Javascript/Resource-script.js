document.addEventListener("DOMContentLoaded", function () {
  const placeholderImage = document.getElementById("placeholderImage");
  const videoPlayer = document.getElementById("videoPlayer");
  const loadingSpinner = document.getElementById("loadingSpinner");
  const loadingInstruction = document.getElementById("loadingInstruction");

  function hideLoading() {
    console.log("Hiding loading spinner and text...");
    loadingSpinner.style.display = "none";
    loadingInstruction.style.display = "none";
  }

  function showLoading() {
    console.log("Showing loading spinner and text...");
    loadingSpinner.style.display = "block";
    loadingInstruction.style.display = "block";
  }

  videoPlayer.addEventListener("canplaythrough", function () {
    console.log("Video is ready to play - canplaythrough event");
    hideLoading();
  });

  videoPlayer.addEventListener("playing", function () {
    console.log("Video started playing - playing event");
    hideLoading();
  });

  videoPlayer.addEventListener("error", function () {
    console.log("Error loading video - error event");
    hideLoading();
  });

  placeholderImage.addEventListener("click", function () {
    console.log("Placeholder clicked - show video and spinner...");
    placeholderImage.style.display = "none";
    videoPlayer.style.display = "block";
    showLoading();
    videoPlayer.play();
  });

  if (videoPlayer.readyState >= 3) {
    console.log("Video already loaded, hiding spinner...");
    hideLoading();
  }

  videoPlayer.addEventListener("click", function () {
    console.log("Video clicked - hiding spinner...");
    hideLoading();
  });
});

const topics = {
  gettingStarted: {
    videos: [
      {
        src: "videos/Getting-Started/Video_1.mp4",
        title: "Getting Started Video 1",
      },
      {
        src: "videos/Getting-Started/Video_2.mp4",
        title: "Getting Started Video 2",
      },
    ],
    documents: [
      {
        title: "Getting Started Guide",
        download: "documents/getting_started.pdf",
      },
      { title: "FAQs for Beginners", download: "documents/faq_beginners.pdf" },
    ],
  },
  registry: {
    videos: [
      { src: "videos/registry_1.mp4", title: "Registry Video 1" },
      { src: "videos/registry_2.mp4", title: "Registry Video 2" },
      { src: "videos/registry_3.mp4", title: "Registry Video 3" },
      { src: "videos/registry_4.mp4", title: "Registry Video 4" },
      { src: "videos/registry_2.mp4", title: "Registry Video 2" },
      { src: "videos/registry_2.mp4", title: "Registry Video 2" },
      { src: "videos/registry_2.mp4", title: "Registry Video 2" },
    ],
    documents: [
      {
        title: "Company Registration Guide",
        download: "documents/company_registration.pdf",
      },
      {
        title: "Business Name Registration",
        download: "documents/business_name.pdf",
      },
    ],
  },
  revenue: {
    videos: [
      { src: "videos/revenue_1.mp4", title: "Revenue Division Video 1" },
      { src: "videos/revenue_2.mp4", title: "Revenue Division Video 2" },
    ],
    documents: [
      { title: "Tax Filing Guide", download: "documents/tax_filing.pdf" },
      {
        title: "Revenue Division Handbook",
        download: "documents/revenue_handbook.pdf",
      },
    ],
  },
};

function changeTopic(topic) {
  const videoGrid = document.getElementById("videoGrid");
  const documentList = document.getElementById("documentList");

  videoGrid.innerHTML = "";
  documentList.innerHTML = "";

  const selectedTopic = topics[topic];

  selectedTopic.videos.forEach((video) => {
    console.log("Loading video:", video.src); // Debugging

    const videoItem = document.createElement("div");
    videoItem.className = "video-item";
    videoItem.innerHTML = `
      <video class="video-thumbnail" muted loop playsinline preload="auto">
        <source src="${video.src}" type="video/mp4">
        Your browser does not support the video tag.
      </video>
      <span>${video.title}</span>
    `;
    videoItem.onclick = () => showResources(video.src);
    videoGrid.appendChild(videoItem);
  });

  // Add hover logic for video thumbnails
  const videoThumbnails = document.querySelectorAll(".video-thumbnail");
  videoThumbnails.forEach((video) => {
    video.addEventListener("mouseenter", () => {
      video.play();
    });

    video.addEventListener("mouseleave", () => {
      video.pause();
      video.currentTime = 0; // Reset to the beginning
    });
  });

  selectedTopic.documents.forEach((doc) => {
    const docItem = document.createElement("div");
    docItem.className = "document-item";
    docItem.innerHTML = `
      ${doc.title}
      <div class="download-btn" onclick="downloadFile('${doc.download}')">Download</div>
    `;
    documentList.appendChild(docItem);
  });
}

function showResources(videoSrc) {
  const videoPlayer = document.getElementById("videoPlayer");
  const placeholder = document.getElementById("placeholderImage");

  placeholder.style.display = "none";
  videoPlayer.style.display = "block";
  videoPlayer.src = videoSrc;
  showLoading(); // Show spinner while video loads
  videoPlayer.load();
}
function downloadFile(file) {
  alert(`Downloading ${file}`);
}

changeTopic("gettingStarted");

async function fetchWeather() {
  try {
    const response = await fetch("https://wttr.in/Brunei?format=%C");
    const weather = await response.text();
    console.log("Weather response:", weather);
    updateBackground(weather.trim());
  } catch (error) {
    console.error("Error fetching weather data:", error);
  }
}

function updateBackground(weather) {
  console.log("Updating header background with weather:", weather);

  const header = document.querySelector(".hero");
  const weatherLower = weather.toLowerCase();

  let gradient = "linear-gradient(270deg, #3498db, #8e44ad)";

  if (weatherLower.includes("sunny") || weatherLower.includes("clear")) {
    gradient = "linear-gradient(270deg, #ff7e5f, #feb47b)";
  } else if (
    weatherLower.includes("cloudy") ||
    weatherLower.includes("overcast")
  ) {
    gradient = "linear-gradient(270deg, #007bff, #00c6ff)";
  } else if (
    weatherLower.includes("rain") ||
    weatherLower.includes("showers") ||
    weatherLower.includes("patchy rain")
  ) {
    gradient = "linear-gradient(270deg, #2c3e50, #bdc3c7)";
  }

  header.style.backgroundImage = gradient;
}
const scrollToTopBtn = document.getElementById("scrollToTopBtn");

const heroSection = document.querySelector(".hero");
function checkScroll() {
  const heroHeight = heroSection.offsetHeight;
  const scrollPosition =
    window.pageYOffset || document.documentElement.scrollTop;

  if (scrollPosition > heroHeight) {
    scrollToTopBtn.classList.add("visible");
  } else {
    scrollToTopBtn.classList.remove("visible");
  }
}

// Run check on scroll
window.addEventListener("scroll", checkScroll);

// Smooth scroll to top
scrollToTopBtn.addEventListener("click", function (e) {
  e.preventDefault();
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
  fetchWeather();
});
