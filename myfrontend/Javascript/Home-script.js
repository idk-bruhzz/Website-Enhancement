// document.addEventListener("DOMContentLoaded", function () {
//   const carousel = document.getElementById("news-carousel");
//   const newsContainer = document.getElementById("news-container");
//   const indicatorsContainer = document.querySelector(".carousel-indicators");
//   const aboutOcpSection = document.querySelector(".about-ocp");
//   const scrollToTopBtn = document.getElementById("scrollToTopBtn");
//   const heroSection = document.querySelector(".hero");
//   const verticalBar = document.querySelector(".vertical-bar");
//   const navbar = document.querySelector(".navbar");
//   const mobileMenuToggle = document.querySelector(".mobile-menu-toggle");

//   function updateVerticalBar() {
//     if (window.innerWidth <= 992) {
//       const navList = document.querySelector(".nav-list");
//       if (navList && navList.classList.contains("active")) {
//         verticalBar.style.bottom = `${
//           navbar.offsetHeight + navList.offsetHeight + 20
//         }px`;
//       } else {
//         verticalBar.style.bottom = "20px";
//       }
//     } else {
//       verticalBar.style.bottom = "";
//     }
//   }

//   updateVerticalBar();

//   window.addEventListener("resize", updateVerticalBar);

//   if (mobileMenuToggle) {
//     mobileMenuToggle.addEventListener("click", function () {
//       setTimeout(updateVerticalBar, 300);
//     });
//   }

//   document.addEventListener("click", function (e) {
//     if (!e.target.closest(".vertical-bar-item")) {
//       document.querySelectorAll(".analytics-popup").forEach((popup) => {
//         popup.style.opacity = "0";
//       });
//     }
//   });

//   const platformUpdate = document.querySelector(".platform-update");
//   if (platformUpdate) {
//     platformUpdate.addEventListener("click", function (e) {
//       e.preventDefault();
//       const badge = this.querySelector(".notification-badge");
//       if (badge) {
//         badge.style.display = "none";
//       }
//       console.log("Showing platform updates");
//     });
//   }

//   const navList = document.querySelector(".nav-list");
//   const searchToggle = document.querySelector(".search-toggle");
//   const searchBar = document.querySelector(".search-bar");

//   mobileMenuToggle.addEventListener("click", function () {
//     navList.classList.toggle("active");
//     searchBar.classList.remove("active");
//   });

//   searchToggle.addEventListener("click", function (e) {
//     e.stopPropagation();
//     searchBar.classList.toggle("active");
//     if (searchBar.classList.contains("active")) {
//       searchBar.querySelector("input").focus();
//     }
//     navList.classList.remove("active");
//   });

//   document.addEventListener("click", function (e) {
//     if (!searchBar.contains(e.target) && e.target !== searchToggle) {
//       searchBar.classList.remove("active");
//     }
//   });

//   document.querySelectorAll(".nav-list a").forEach((link) => {
//     link.addEventListener("click", function () {
//       navList.classList.remove("active");
//     });
//   });

//   let items = [];
//   let index = 0;
//   const observer = new IntersectionObserver(
//     (entries) => {
//       entries.forEach((entry) => {
//         if (entry.isIntersecting) {
//           entry.target.classList.add("visible");

//           // Trigger count-up animation for stats
//           if (entry.target.classList.contains("stats")) {
//             const counters = entry.target.querySelectorAll(".count");
//             const speed = 200; // Animation speed

//             counters.forEach((counter) => {
//               const updateCount = () => {
//                 const target = +counter.getAttribute("data-target"); // Get the target number
//                 const count = +counter.innerText; // Get the current number
//                 const increment = target / speed; // Calculate the increment

//                 if (count < target) {
//                   counter.innerText = Math.ceil(count + increment); // Update the number
//                   setTimeout(updateCount, 10); // Repeat until target is reached
//                 } else {
//                   counter.innerText = target; // Ensure the final number is exact
//                 }
//               };

//               updateCount(); // Start the count-up animation
//             });
//           }

//           observer.unobserve(entry.target); // Stop observing after animation
//         }
//       });
//     },
//     {
//       threshold: 0.5, // Trigger when 50% of the section is visible
//     }
//   );

//   // Observe the stats section
//   const statsSection = document.querySelector(".stats");
//   if (statsSection) {
//     observer.observe(statsSection);
//   }

//   if (aboutOcpSection) {
//     observer.observe(aboutOcpSection);
//   }

//   if (aboutOcpSection) {
//     observer.observe(aboutOcpSection);
//   }

//   async function fetchWordPressPosts() {
//     try {
//       const apiUrl =
//         "http://10.1.27.9/wordpress/wp-json/wp/v2/posts?_embed&per_page=5&_fields=id,title,content,date,link,_links.wp:featuredmedia";
//       const response = await fetch(apiUrl);
//       const posts = await response.json();
//       displayPosts(posts);
//       setupCarousel();
//     } catch (error) {
//       console.error("Error fetching WordPress posts:", error);
//     }
//   }

//   function displayPosts(posts) {
//     newsContainer.innerHTML = ""; // Clear existing content
//     indicatorsContainer.innerHTML = ""; // Clear existing indicators

//     posts.forEach((post, i) => {
//       const content = decodeHTMLEntities(post.content.rendered); // Decode HTML entities in content
//       const title = decodeHTMLEntities(post.title.rendered); // Decode HTML entities in title
//       const date = new Date(post.date).toDateString();
//       const link = post.link;

//       // Extract the first image inside the content
//       const tempDiv = document.createElement("div");
//       tempDiv.innerHTML = content;
//       const firstImageElement = tempDiv.querySelector("img");

//       let firstImage = "img/default.jpg"; // Default fallback image
//       if (firstImageElement) {
//         firstImage = firstImageElement.src;
//         firstImageElement.remove(); // Remove first image from content
//       }

//       const cleanedContent = tempDiv.innerHTML; // Content without first image

//       // Create the carousel item
//       const carouselItem = document.createElement("div");
//       carouselItem.classList.add("carousel-item");
//       if (i === 0) carouselItem.classList.add("active"); // Set first item as active

//       // Create the carousel image container
//       const carouselImageContainer = document.createElement("div");
//       carouselImageContainer.classList.add("carousel-image-container");

//       // Create the carousel link
//       const carouselLink = document.createElement("a");
//       carouselLink.href = link;
//       carouselLink.target = "_blank";
//       carouselLink.classList.add("carousel-link");

//       // Create the carousel image
//       const carouselImage = document.createElement("img");
//       carouselImage.src = firstImage;
//       carouselImage.alt = title;
//       carouselImage.loading = "lazy"; // Lazy load the image
//       carouselImage.classList.add("carousel-image");

//       // Create the overlay
//       const overlay = document.createElement("div");
//       overlay.classList.add("overlay");

//       // Create the overlay content
//       const overlayContent = document.createElement("div");
//       overlayContent.classList.add("overlay-content");

//       // Create the title
//       const titleElement = document.createElement("h3");
//       titleElement.textContent = title;

//       // Create the date
//       const dateElement = document.createElement("small");
//       dateElement.textContent = date;

//       // Create the post content
//       const postContent = document.createElement("div");
//       postContent.classList.add("post-content");
//       postContent.innerHTML = cleanedContent;

//       // Append elements to the DOM
//       overlayContent.appendChild(titleElement);
//       overlayContent.appendChild(dateElement);
//       overlayContent.appendChild(postContent);
//       overlay.appendChild(overlayContent);
//       carouselLink.appendChild(carouselImage);
//       carouselLink.appendChild(overlay);
//       carouselImageContainer.appendChild(carouselLink);
//       carouselItem.appendChild(carouselImageContainer);
//       newsContainer.appendChild(carouselItem);

//       // Add indicators
//       const indicator = document.createElement("span");
//       indicator.dataset.index = i;
//       if (i === 0) indicator.classList.add("active");
//       indicator.addEventListener("click", () => goToSlide(i));
//       indicatorsContainer.appendChild(indicator);
//     });

//     // Initialize items after appending all carousel items
//     items = document.querySelectorAll(".carousel-item");

//     // Check if items exist
//     if (items.length === 0) {
//       console.error("No carousel items found.");
//       return; // Exit the function if no items are found
//     }

//     // Log the rendered HTML and styles
//     console.log("Rendered HTML:", newsContainer.innerHTML);
//     debugStyles(".images");
//     debugStyles(".carousel-item");

//     // Start auto-slide
//     startAutoSlide();
//   }
//   function debugStyles(selector) {
//     const element = document.querySelector(selector);
//     if (!element) {
//       console.error(`Element with selector "${selector}" not found.`);
//       return;
//     }

//     console.log("Element:", element);
//     console.log("Computed Styles:", window.getComputedStyle(element));
//   }

//   debugStyles(".images");
//   debugStyles(".carousel-item");

//   fetchWordPressPosts();

//   function setupCarousel() {
//     const prevButton = carousel.querySelector(".prev");
//     const nextButton = carousel.querySelector(".next");

//     if (prevButton && nextButton) {
//       prevButton.addEventListener("click", prevSlide);
//       nextButton.addEventListener("click", nextSlide);
//     } else {
//       console.error("Prev/Next buttons not found!");
//     }

//     startAutoSlide();
//   }
//   let currentIndex = 0;
//   let autoSlideInterval;
//   let isTransitioning = false; // Flag to prevent overlapping transitions

//   function goToSlide(index) {
//     if (isTransitioning) return; // Exit if already transitioning

//     isTransitioning = true; // Set flag to true

//     if (index < 0) {
//       index = items.length - 1; // Loop to the last slide if index is negative
//     } else if (index >= items.length) {
//       index = 0; // Loop to the first slide if index exceeds the number of items
//     }

//     currentIndex = index;
//     updateCarousel();

//     // Reset the flag after the transition is complete
//     setTimeout(() => {
//       isTransitioning = false;
//     }, 500); // Match the duration of the CSS transition (0.5s)
//   }

//   function updateCarousel() {
//     const offset = -currentIndex * 100; // Calculate the offset for horizontal scroll
//     newsContainer.style.transform = `translateX(${offset}%)`; // Apply the slide animation

//     // Update active class on carousel items
//     items.forEach((item, i) => {
//       item.classList.toggle("active", i === currentIndex);
//     });

//     // Update indicators
//     const indicators = document.querySelectorAll(".carousel-indicators span");
//     indicators.forEach((indicator, i) => {
//       indicator.classList.toggle("active", i === currentIndex);
//     });
//   }

//   function nextSlide() {
//     goToSlide(currentIndex + 1);
//   }

//   function prevSlide() {
//     goToSlide(currentIndex - 1);
//   }

//   function startAutoSlide() {
//     // Only start auto-slide once
//     if (!autoSlideInterval) {
//       autoSlideInterval = setInterval(nextSlide, 5000); // 5000ms = 5 seconds
//     }
//   }

//   function stopAutoSlide() {
//     clearInterval(autoSlideInterval);
//   }

//   // Add event listeners for navigation buttons
//   const prevButton = document.querySelector(".carousel-button.prev");
//   const nextButton = document.querySelector(".carousel-button.next");

//   if (prevButton && nextButton) {
//     prevButton.addEventListener("click", prevSlide);
//     nextButton.addEventListener("click", nextSlide);
//   }

//   // Pause auto-slide on hover
//   carousel.addEventListener("mouseenter", stopAutoSlide);
//   carousel.addEventListener("mouseleave", startAutoSlide);
//   // Fetch WordPress posts and initialize carousel
//   fetchWordPressPosts();

//   // Decode HTML entities
//   function decodeHTMLEntities(text) {
//     const textArea = document.createElement("textarea");
//     textArea.innerHTML = text;
//     return textArea.value;
//   }
//   async function fetchWeather() {
//     try {
//       const response = await fetch("https://wttr.in/Brunei?format=%C");
//       const weather = await response.text(); //"cloudy";
//       console.log("Weather response:", weather);
//       updateBackground(weather.trim());
//     } catch (error) {
//       console.error("Error fetching weather data:", error);
//     }
//   }
//   function updateBackground(weather) {
//     console.log("Updating header background with weather:", weather);

//     const videoBackground = document.getElementById("video-background");
//     const weatherLower = weather.toLowerCase();

//     let videoSource = "videos/cloudy.mov"; // Default video

//     if (weatherLower.includes("sunny") || weatherLower.includes("clear")) {
//       videoSource = "videos/cloudy.mov"; // Video for sunny weather
//     } else if (
//       weatherLower.includes("cloudy") ||
//       weatherLower.includes("overcast")
//     ) {
//       videoSource = "videos/cloudy.mov"; // Video for cloudy weather
//     } else if (
//       weatherLower.includes("rain") ||
//       weatherLower.includes("showers") ||
//       weatherLower.includes("patchy rain")
//     ) {
//       videoSource = "videos/rainy.mp4"; // Video for rainy weather
//     }

//     // Update the video source
//     videoBackground.src = videoSource;
//     videoBackground.load(); // Reload the video
//     videoBackground.play(); // Start playing the new video
//   }

//   fetchWeather();

//   // Function to translate text using your PHP backend
//   async function translateText(text, targetLang) {
//     try {
//       console.log("Sending request to Translate.php with:", {
//         text,
//         targetLang,
//       });

//       const response = await fetch(
//         "http://10.1.26.60/myfrontend/Translate.php",
//         {
//           method: "POST",
//           headers: {
//             "Content-Type": "application/json",
//           },
//           body: JSON.stringify({
//             text: text,
//             targetLang: targetLang,
//           }),
//         }
//       );

//       if (!response.ok) {
//         throw new Error("Translation failed");
//       }

//       const data = await response.json();
//       console.log("Received response:", data);
//       return data.translation;
//     } catch (error) {
//       console.error("Error:", error);
//       return text; // Return original text if translation fails
//     }
//   }

//   // Function to translate the entire webpage
//   async function translatePage(targetLang) {
//     const elements = document.querySelectorAll(
//       "h1, h2, h3, h4, h5, h6, p, span, a, li, button"
//     );

//     for (const element of elements) {
//       const originalText = element.textContent.trim();
//       if (originalText) {
//         const translatedText = await translateText(originalText, targetLang);
//         element.textContent = translatedText;
//       }
//     }
//   }

//   // Add event listener to the language switcher
//   document
//     .getElementById("languageSwitcher")
//     .addEventListener("change", function () {
//       const lang = this.value;
//       translatePage(lang);
//     });
//   // function updateBackgroundAndAccent() {
//   //   const now = new Date();
//   //   const hour = now.getHours();
//   //   const videoBackground = document.getElementById("video-background");
//   //   const root = document.documentElement; // Access the root element for CSS variables

//   //   root.style.setProperty("--primary-color", "#FF6347"); // Tomato red
//   //   console.log(
//   //     "Updated --primary-color to:",
//   //     getComputedStyle(root).getPropertyValue("--primary-color")
//   //   );
//   //   let videoSource;
//   //   let accentColor;

//   //   if (hour >= 6 && hour < 12) {
//   //     // Morning (6 AM - 12 PM)
//   //     videoSource = "videos/cloudy.mov"; // Morning video
//   //     accentColor = "#FFA500"; // Orange for morning
//   //   } else if (hour >= 12 && hour < 18) {
//   //     // Afternoon (12 PM - 6 PM)
//   //     videoSource = "videos/test.mp4"; // Afternoon video
//   //     accentColor = "#ff7f68"; // Tomato red for afternoon
//   //   } else if (hour >= 18 && hour < 22) {
//   //     // Evening (6 PM - 10 PM)
//   //     videoSource = "videos/night.mp4"; // Evening video
//   //     accentColor = "#8A2BE2"; // Purple for evening
//   //   } else {
//   //     // Night (10 PM - 6 AM)
//   //     videoSource = "videos/night.mp4"; // Night video
//   //     accentColor = "#1E90FF"; // Dodger blue for night
//   //   }

//   //   // Update the video background
//   //   videoBackground.src = videoSource;
//   //   videoBackground.load(); // Reload the video
//   //   videoBackground.play(); // Start playing the new video

//   //   // Update the accent color
//   //   root.style.setProperty("--primary-color", accentColor);
//   // }

//   // // Call the function on page load and every hour
//   // updateBackgroundAndAccent();
//   // setInterval(updateBackgroundAndAccent, 3600000); // Update every hour
//   // async function fetchWeather() {
//   //   try {
//   //     const response = await fetch("https://wttr.in/Brunei?format=%C");
//   //     const weather = await response.text(); //"cloudy";
//   //     console.log("Weather response:", weather);
//   //     updateBackground(weather.trim());
//   //   } catch (error) {
//   //     console.error("Error fetching weather data:", error);
//   //   }
//   // }
//   // function decodeHTMLEntities(text) {
//   //   const textArea = document.createElement("textarea");
//   //   textArea.innerHTML = text;
//   //   return textArea.value;
//   // }
//   // function updateBackground(weather) {
//   //   console.log("Updating header background with weather:", weather);

//   //   const videoBackground = document.getElementById("video-background");
//   //   const weatherLower = weather.toLowerCase();

//   //   let videoSource = "videos/test.mp4"; // Default video

//   //   if (weatherLower.includes("sunny") || weatherLower.includes("clear")) {
//   //     videoSource = "videos/test.mp4"; // Video for sunny weather
//   //   } else if (
//   //     weatherLower.includes("cloudy") ||
//   //     weatherLower.includes("overcast")
//   //   ) {
//   //     videoSource = "videos/test.mp4"; // Video for cloudy weather
//   //   } else if (
//   //     weatherLower.includes("rain") ||
//   //     weatherLower.includes("showers") ||
//   //     weatherLower.includes("patchy rain")
//   //   ) {
//   //     videoSource = "videos/rainy.mp4"; // Video for rainy weather
//   //   }

//   //   // Update the video source
//   //   videoBackground.src = videoSource;
//   //   videoBackground.load(); // Reload the video
//   //   videoBackground.play(); // Start playing the new video
//   // }

//   // fetchWeather();
//   function observeDynamicContent(targetElement) {
//     const observer = new MutationObserver((mutations) => {
//       mutations.forEach((mutation) => {
//         mutation.addedNodes.forEach((node) => {
//           if (node.nodeType === 1) {
//             // Ensure it's an element
//             if (node.matches(".carousel-item")) {
//               node.classList.add("active");
//             }
//             if (node.matches(".news-item")) {
//               node.style.animation = "none"; // Reset animation
//               void node.offsetWidth; // Trigger reflow
//               node.style.animation = "fadeIn 0.5s forwards";
//             }
//           }
//         });
//       });
//     });

//     observer.observe(targetElement, { childList: true });
//   }

//   function centerItem(itemIndex) {
//     // Remove active class from all items
//     items.forEach((item) => item.classList.remove("active"));

//     // Add active class to the hovered item
//     items[itemIndex].classList.add("active");
//   }

//   function resetPosition() {
//     // Reset to the current active item
//     const activeIndex = Array.from(items).findIndex((item) =>
//       item.classList.contains("active")
//     );
//     if (activeIndex !== -1) {
//       updateCarousel(activeIndex);
//     }
//   }
//   const counters = document.querySelectorAll(".count");
//   const speed = 200; // Animation speed

//   counters.forEach((counter) => {
//     const updateCount = () => {
//       const target = +counter.getAttribute("data-target"); // Get the target number
//       const count = +counter.innerText; // Get the current number
//       const increment = target / speed; // Calculate the increment

//       if (count < target) {
//         counter.innerText = Math.ceil(count + increment); // Update the number
//         setTimeout(updateCount, 10); // Repeat until target is reached
//       } else {
//         counter.innerText = target; // Ensure the final number is exact
//       }
//     };

//     updateCount();
//   });
//   // console.log("Scroll to top button element:", scrollToTopBtn); // Should show the button element

//   // function checkScroll() {
//   //   const scrollPosition = window.scrollY || document.documentElement.scrollTop;
//   //   const windowHeight = window.innerHeight;
//   //   const documentHeight = document.documentElement.scrollHeight;
//   //   const distanceFromBottom = documentHeight - (scrollPosition + windowHeight);

//   //   console.log(
//   //     `Scroll position: ${scrollPosition}, Distance from bottom: ${distanceFromBottom}`
//   //   );

//   //   // Show button when within 300px of bottom
//   //   if (distanceFromBottom < 300) {
//   //     console.log("Showing button (near bottom)");
//   //     scrollToTopBtn.classList.add("visible");
//   //   } else {
//   //     console.log("Hiding button (not near bottom)");
//   //     scrollToTopBtn.classList.remove("visible");
//   //   }
//   // }

//   // window.addEventListener("scroll", checkScroll);
//   // checkScroll(); // Initial check

//   // scrollToTopBtn.addEventListener("click", function (e) {
//   //   e.preventDefault();
//   //   window.scrollTo({
//   //     top: 0,
//   //     behavior: "smooth",
//   //   });
//   // });
// });

document.addEventListener("DOMContentLoaded", function () {
  // ========== DOM ELEMENTS ==========
  const mobileMenuToggle = document.querySelector(".mobile-menu-toggle");
  const navList = document.querySelector(".nav-list");
  const searchToggle = document.querySelector(".search-toggle");
  const searchBar = document.querySelector(".search-bar");
  const searchForm = document.querySelector(".search-bar form");
  const carousel = document.getElementById("news-carousel");
  const newsContainer = document.getElementById("news-container");
  const indicatorsContainer = document.querySelector(".carousel-indicators");
  const aboutOcpSection = document.querySelector(".about-ocp");
  const scrollToTopBtn = document.getElementById("scrollToTopBtn");
  const heroSection = document.querySelector(".hero");
  const verticalBar = document.querySelector(".vertical-bar");
  const navbar = document.querySelector(".navbar");
  const platformUpdate = document.querySelector(".platform-update");
  const languageSwitcher = document.getElementById("languageSwitcher");
  const videoBackground = document.getElementById("video-background");

  // ========== MOBILE MENU & SEARCH ==========
  function toggleMobileMenu() {
    if (!navList || !mobileMenuToggle) return;

    navList.classList.toggle("active");
    searchBar?.classList.remove("active");
    mobileMenuToggle.innerHTML = navList.classList.contains("active")
      ? "✕"
      : "☰";
    updateVerticalBar();
  }

  function toggleSearch(e) {
    if (!searchBar || !searchToggle) return;

    if (e) e.stopPropagation();
    searchBar.classList.toggle("active");
    navList?.classList.remove("active");

    if (searchBar.classList.contains("active")) {
      searchBar.querySelector("input")?.focus();
    }
    updateVerticalBar();
  }

  function closeSearchOnClickOutside(e) {
    if (!searchBar?.contains(e.target) && !e.target.matches(".search-toggle")) {
      searchBar?.classList.remove("active");
    }
  }

  function handleNavLinkClick() {
    navList?.classList.remove("active");
    mobileMenuToggle.innerHTML = "☰";
    updateVerticalBar();
  }

  // ========== VERTICAL BAR POSITIONING ==========
  function updateVerticalBar() {
    if (!verticalBar || window.innerWidth > 992) {
      verticalBar.style.bottom = "";
      return;
    }

    if (navList?.classList.contains("active")) {
      verticalBar.style.bottom = `${
        navbar.offsetHeight + navList.offsetHeight + 20
      }px`;
    } else {
      verticalBar.style.bottom = "20px";
    }
  }

  let items = [];
  let currentIndex = 0;
  let autoSlideInterval = null;
  let isTransitioning = false;

  async function fetchWordPressPosts() {
    try {
      const response = await fetch(
        "http://10.1.27.9/wordpress/wp-json/wp/v2/posts?_embed&per_page=5&_fields=id,title,content,date,link,_links.wp:featuredmedia"
      );
      const posts = await response.json();
      displayPosts(posts);
      setupCarousel();
    } catch (error) {
      console.error("Error fetching WordPress posts:", error);
    }
  }

  function displayPosts(posts) {
    if (!newsContainer || !indicatorsContainer) return;

    newsContainer.innerHTML = "";
    indicatorsContainer.innerHTML = "";

    posts.forEach((post, i) => {
      const content = decodeHTMLEntities(post.content.rendered);
      const title = decodeHTMLEntities(post.title.rendered);
      const date = new Date(post.date).toDateString();
      const link = post.link;

      // Extract first image
      const tempDiv = document.createElement("div");
      tempDiv.innerHTML = content;
      const firstImageElement = tempDiv.querySelector("img");
      let firstImage = "img/default.jpg";
      if (firstImageElement) {
        firstImage = firstImageElement.src;
        firstImageElement.remove();
      }

      const cleanedContent = tempDiv.innerHTML;

      // Create carousel item
      const carouselItem = document.createElement("div");
      carouselItem.classList.add("carousel-item");
      if (i === 0) carouselItem.classList.add("active");

      carouselItem.innerHTML = `
        <div class="carousel-image-container">
          <a href="${link}" target="_blank" class="carousel-link">
            <img src="${firstImage}" alt="${title}" loading="lazy" class="carousel-image">
            <div class="overlay">
              <div class="overlay-content">
                <h3>${title}</h3>
                <small>${date}</small>
                <div class="post-content">${cleanedContent}</div>
              </div>
            </div>
          </a>
        </div>
      `;

      newsContainer.appendChild(carouselItem);

      // Add indicator
      const indicator = document.createElement("span");
      indicator.dataset.index = i;
      if (i === 0) indicator.classList.add("active");
      indicator.addEventListener("click", () => goToSlide(i));
      indicatorsContainer.appendChild(indicator);
    });

    items = document.querySelectorAll(".carousel-item");
    if (items.length > 0) {
      updateCarousel();

      startAutoSlide();
    }
  }

  function setupCarousel() {
    const prevButton = carousel?.querySelector(".prev");
    const nextButton = carousel?.querySelector(".next");

    if (prevButton && nextButton) {
      prevButton.addEventListener("click", () => {
        stopAutoSlide();
        prevSlide();
        startAutoSlide();
      });
      nextButton.addEventListener("click", () => {
        stopAutoSlide();
        nextSlide();
        startAutoSlide();
      });
    }
  }

  function goToSlide(index) {
    if (isTransitioning || !items.length) return;
    isTransitioning = true;

    currentIndex =
      index < 0 ? items.length - 1 : index >= items.length ? 0 : index;

    updateCarousel();
    setTimeout(() => (isTransitioning = false), 500);
  }

  function updateCarousel() {
    if (!newsContainer || items.length === 0) return;

    newsContainer.style.transform = `translateX(${-currentIndex * 100}%)`;

    items.forEach((item, i) => {
      item.classList.toggle("active", i === currentIndex);
    });

    const indicators = document.querySelectorAll(".carousel-indicators span");
    indicators?.forEach((indicator, i) => {
      indicator.classList.toggle("active", i === currentIndex);
    });
  }

  function nextSlide() {
    goToSlide(currentIndex + 1);
  }

  function prevSlide() {
    goToSlide(currentIndex - 1);
  }

  function startAutoSlide() {
    // Clear any existing interval first
    stopAutoSlide();

    // Only start if we have items
    if (items.length > 0) {
      autoSlideInterval = setInterval(() => {
        nextSlide();
      }, 5000); // 5 seconds
    }
  }

  function stopAutoSlide() {
    if (autoSlideInterval) {
      clearInterval(autoSlideInterval);
      autoSlideInterval = null;
    }
  }

  // ========== INTERSECTION OBSERVER ==========
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("visible");

          if (entry.target.classList.contains("stats")) {
            animateCounters(entry.target);
          }
          observer.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.5 }
  );

  function animateCounters(container) {
    const counters = container.querySelectorAll(".count");
    const speed = 200;

    counters.forEach((counter) => {
      const updateCount = () => {
        const target = +counter.getAttribute("data-target");
        const count = +counter.innerText;
        const increment = target / speed;

        if (count < target) {
          counter.innerText = Math.ceil(count + increment);
          setTimeout(updateCount, 10);
        } else {
          counter.innerText = target;
        }
      };
      updateCount();
    });
  }

  // ========== WEATHER FUNCTION ==========
  async function fetchWeather() {
    try {
      const response = await fetch("https://wttr.in/Brunei?format=%C");
      const weather = await response.text();
      updateBackground(weather.trim());
    } catch (error) {
      console.error("Error fetching weather data:", error);
    }
  }

  function updateBackground(weather) {
    if (!videoBackground) return;

    const weatherLower = weather.toLowerCase();
    let videoSource = "videos/cloudy.mov"; // Default

    if (weatherLower.includes("rain") || weatherLower.includes("showers")) {
      videoSource = "videos/rainy.mp4";
    }

    videoBackground.src = videoSource;
    videoBackground.load();
    videoBackground.play().catch((e) => console.log("Video play error:", e));
  }

  // ========== TRANSLATION FUNCTION ==========
  async function translateText(text, targetLang) {
    try {
      const response = await fetch(
        "http://10.1.26.60/myfrontend/Translate.php",
        {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify({ text, targetLang }),
        }
      );
      const data = await response.json();
      return data.translation;
    } catch (error) {
      console.error("Translation error:", error);
      return text;
    }
  }

  async function translatePage(targetLang) {
    const elements = document.querySelectorAll(
      "h1, h2, h3, h4, h5, h6, p, span, a, li, button"
    );
    for (const element of elements) {
      const originalText = element.textContent.trim();
      if (originalText) {
        element.textContent = await translateText(originalText, targetLang);
      }
    }
  }

  // ========== UTILITY FUNCTIONS ==========
  function decodeHTMLEntities(text) {
    const textArea = document.createElement("textarea");
    textArea.innerHTML = text;
    return textArea.value;
  }

  // ========== EVENT LISTENERS ==========
  // Mobile and Search
  mobileMenuToggle?.addEventListener("click", toggleMobileMenu);
  searchToggle?.addEventListener("click", toggleSearch);
  document.addEventListener("click", closeSearchOnClickOutside);
  document.querySelectorAll(".nav-list a").forEach((link) => {
    link.addEventListener("click", handleNavLinkClick);
  });

  // Carousel
  carousel?.addEventListener("mouseenter", stopAutoSlide);
  carousel?.addEventListener("mouseleave", startAutoSlide);

  // Platform Update
  platformUpdate?.addEventListener("click", function (e) {
    e.preventDefault();
    this.querySelector(".notification-badge")?.style.setProperty(
      "display",
      "none"
    );
  });

  // Language Switcher
  languageSwitcher?.addEventListener("change", function () {
    translatePage(this.value);
  });

  // Window Resize
  window.addEventListener("resize", updateVerticalBar);

  // Intersection Observer
  if (aboutOcpSection) observer.observe(aboutOcpSection);
  const statsSection = document.querySelector(".stats");
  if (statsSection) observer.observe(statsSection);

  // ========== INITIALIZE ==========
  updateVerticalBar();
  fetchWordPressPosts();
  fetchWeather();
});
