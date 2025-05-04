// document.addEventListener("DOMContentLoaded", function () {
//   // ========== NEWS CAROUSEL ==========
//   const newsContainer = document.querySelector(".news-grid");
//   const newsCards = document.querySelectorAll(".news-card");

//   if (newsContainer && newsCards.length > 0) {
//     // Convert NodeList to array for easier manipulation
//     let items = Array.from(newsCards);
//     let currentIndex = 0;
//     let autoSlideInterval = null;
//     let isTransitioning = false;

//     // Initialize carousel
//     function initCarousel() {
//       // Set initial active state
//       items.forEach((item, index) => {
//         item.style.display = index === 0 ? "block" : "none";
//         item.classList.toggle("active", index === 0);
//       });

//       // Start auto-slide
//       startAutoSlide();
//     }

//     function goToSlide(index) {
//       if (isTransitioning || !items.length) return;
//       isTransitioning = true;

//       // Hide current slide
//       items[currentIndex].style.display = "none";
//       items[currentIndex].classList.remove("active");

//       // Calculate new index with wrapping
//       currentIndex = (index + items.length) % items.length;

//       // Show new slide
//       items[currentIndex].style.display = "block";
//       items[currentIndex].classList.add("active");

//       // Add animation class
//       items[currentIndex].classList.add("fade-in");
//       setTimeout(() => {
//         items[currentIndex].classList.remove("fade-in");
//         isTransitioning = false;
//       }, 500);
//     }

//     function nextSlide() {
//       goToSlide(currentIndex + 1);
//     }

//     function prevSlide() {
//       goToSlide(currentIndex - 1);
//     }

//     function startAutoSlide() {
//       stopAutoSlide();
//       autoSlideInterval = setInterval(nextSlide, 5000);
//     }

//     function stopAutoSlide() {
//       if (autoSlideInterval) {
//         clearInterval(autoSlideInterval);
//         autoSlideInterval = null;
//       }
//     }

//     // Initialize the carousel
//     initCarousel();

//     // Add event listeners for hover
//     newsContainer.addEventListener("mouseenter", stopAutoSlide);
//     newsContainer.addEventListener("mouseleave", startAutoSlide);
//   }

//   // ========== FETCH WORDPRESS POSTS ==========
//   async function fetchWordPressPosts() {
//     try {
//       const response = await fetch(
//         "http://localhost/wordpress/wp-json/wp/v2/posts?_embed&per_page=3&_fields=id,title,excerpt,date,link,jetpack_featured_media_url"
//       );
//       const posts = await response.json();
//       updateNewsSection(posts);
//     } catch (error) {
//       console.error("Error fetching WordPress posts:", error);
//       // Fallback to static content if API fails
//     }
//   }

//   function updateNewsSection(posts) {
//     const newsGrid = document.querySelector(".news-grid");
//     if (!newsGrid) return;

//     // Clear existing content
//     newsGrid.innerHTML = "";

//     posts.forEach((post, index) => {
//       const title = decodeHTMLEntities(post.title.rendered);
//       const excerpt = post.excerpt.rendered
//         ? decodeHTMLEntities(post.excerpt.rendered.replace(/<[^>]*>/g, ""))
//         : "Read more about this update...";
//       const date = new Date(post.date).toLocaleDateString("en-US", {
//         year: "numeric",
//         month: "long",
//         day: "numeric",
//       });
//       const imageUrl = post.jetpack_featured_media_url || "../img/OCPlong.png";
//       const link = post.link;

//       const newsCard = document.createElement("div");
//       newsCard.className = "news-card";
//       newsCard.setAttribute("data-aos", "flip-left");
//       if (index > 0) {
//         newsCard.setAttribute("data-aos-delay", index * 100);
//       }

//       newsCard.innerHTML = `
//                 <div class="news-image-container">
//                     <img src="${imageUrl}" alt="${title}" class="news-image" width="600" height="400" loading="lazy">
//                 </div>
//                 <span class="news-date">${date}</span>
//                 <h3 class="news-title">${title}</h3>
//                 <p class="news-excerpt">${excerpt}</p>
//                 <a href="${link}" class="news-link" target="_blank">
//                     Read more <i class="fas fa-arrow-right"></i>
//                 </a>
//             `;

//       newsGrid.appendChild(newsCard);
//     });

//     // Reinitialize AOS for new elements
//     if (window.AOS) {
//       AOS.refresh();
//     }
//   }

//   // ========== UTILITY FUNCTIONS ==========
//   function decodeHTMLEntities(text) {
//     const textArea = document.createElement("textarea");
//     textArea.innerHTML = text;
//     return textArea.value;
//   }

//   // ========== INITIALIZATION ==========
//   fetchWordPressPosts();
// });

// Add this to your JavaScript
document.addEventListener("DOMContentLoaded", function () {
  // Initialize OCP Carousel
  const initOCPCarousel = async () => {
    const carouselContainer = document.querySelector(".ocp-carousel-container");
    const carousel = document.querySelector(".ocp-carousel");
    const indicatorsContainer = document.querySelector(
      ".ocp-carousel-indicators"
    );

    if (!carousel) return;

    // Add wrapper for proper sliding
    const carouselWrapper = document.createElement("div");
    carouselWrapper.className = "ocp-carousel-wrapper";
    carouselWrapper.style.overflow = "hidden";
    carouselContainer.insertBefore(carouselWrapper, carousel);
    carouselWrapper.appendChild(carousel);

    // Style the carousel for horizontal layout
    carousel.style.display = "flex";
    carousel.style.transition = "transform 0.5s ease";
    carousel.style.width = "100%";

    try {
      // Fetch WordPress posts
      const response = await fetch(
        "http://localhost/wordpress/wp-json/wp/v2/posts?_embed&per_page=5"
      );
      const posts = await response.json();

      // Clear existing content
      carousel.innerHTML = "";
      indicatorsContainer.innerHTML = "";

      // Create slides
      posts.forEach((post, index) => {
        const slide = document.createElement("div");
        slide.className = "ocp-carousel-slide";
        slide.style.minWidth = "100%"; // Each slide takes full width
        slide.style.flexShrink = "0"; // Prevent shrinking

        const featuredImage =
          post._embedded?.["wp:featuredmedia"]?.[0]?.source_url ||
          "../img/OCPlong.png";
        const title = post.title.rendered;
        const excerpt =
          post.excerpt.rendered.replace(/<[^>]*>/g, "").substring(0, 150) +
          "...";
        const date = new Date(post.date).toLocaleDateString("en-US", {
          year: "numeric",
          month: "long",
          day: "numeric",
        });

        slide.innerHTML = `
          <div class="ocp-carousel-image-container">
            <img src="${featuredImage}" alt="${title}" class="ocp-carousel-image" loading="lazy">
            <div class="ocp-carousel-overlay">
              <span class="ocp-carousel-date">${date}</span>
              <h3 class="ocp-carousel-title">${title}</h3>
              <p class="ocp-carousel-excerpt">${excerpt}</p>
              <a href="${post.link}" class="ocp-carousel-link" target="_blank">
                Read more <i class="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>
        `;

        carousel.appendChild(slide);

        // Create indicator
        const indicator = document.createElement("div");
        indicator.className = "ocp-carousel-indicator";
        indicator.dataset.index = index;
        if (index === 0) indicator.classList.add("active");
        indicatorsContainer.appendChild(indicator);
      });

      // Initialize carousel functionality
      const slides = document.querySelectorAll(".ocp-carousel-slide");
      const indicators = document.querySelectorAll(".ocp-carousel-indicator");
      const prevBtn = document.querySelector(".ocp-carousel-prev");
      const nextBtn = document.querySelector(".ocp-carousel-next");

      let currentIndex = 0;
      let autoSlideInterval;

      const updateCarousel = () => {
        carousel.style.transform = `translateX(-${currentIndex * 100}%)`;

        // Update indicators
        indicators.forEach((indicator, index) => {
          indicator.classList.toggle("active", index === currentIndex);
        });
      };

      const goToSlide = (index) => {
        currentIndex = (index + slides.length) % slides.length;
        updateCarousel();
      };

      const nextSlide = () => goToSlide(currentIndex + 1);
      const prevSlide = () => goToSlide(currentIndex - 1);

      const startAutoSlide = () => {
        stopAutoSlide();
        autoSlideInterval = setInterval(nextSlide, 5000);
      };

      const stopAutoSlide = () => {
        if (autoSlideInterval) {
          clearInterval(autoSlideInterval);
          autoSlideInterval = null;
        }
      };

      // Event listeners
      prevBtn?.addEventListener("click", () => {
        stopAutoSlide();
        prevSlide();
        startAutoSlide();
      });

      nextBtn?.addEventListener("click", () => {
        stopAutoSlide();
        nextSlide();
        startAutoSlide();
      });

      indicators.forEach((indicator) => {
        indicator.addEventListener("click", () => {
          stopAutoSlide();
          goToSlide(parseInt(indicator.dataset.index));
          startAutoSlide();
        });
      });

      carousel.addEventListener("mouseenter", stopAutoSlide);
      carousel.addEventListener("mouseleave", startAutoSlide);

      // Start auto-slide
      startAutoSlide();
    } catch (error) {
      console.error("Error initializing OCP carousel:", error);
      // Fallback to static content if API fails
      carousel.innerHTML = `
        <div class="ocp-carousel-slide" style="min-width:100%">
          <div class="ocp-carousel-image-container">
            <img src="../img/OCPlong.png" alt="OCP News" class="ocp-carousel-image">
            <div class="ocp-carousel-overlay">
              <span class="ocp-carousel-date">Latest Updates</span>
              <h3 class="ocp-carousel-title">Welcome to One Common Portal</h3>
              <p class="ocp-carousel-excerpt">Stay tuned for the latest news and updates from our platform.</p>
              <a href="News.php" class="ocp-carousel-link">
                View all news <i class="fas fa-arrow-right"></i>
              </a>
            </div>
          </div>
        </div>
      `;
    }
  };

  initOCPCarousel();
});
