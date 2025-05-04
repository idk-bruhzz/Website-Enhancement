// document.addEventListener("DOMContentLoaded", function () {
//   const filterDropdown = document.querySelector(".filter-dropdown");
//   const scrollToTopBtn = document.getElementById("scrollToTopBtn");
//   const filterOptions = document.querySelectorAll(
//     ".filter-options input[type='checkbox']"
//   );
//   const resetButton = document.querySelector(".reset-button");
//   const newsList = document.querySelector(".news-list");
//   const heroSection = document.querySelector(".hero");
//   const mobileMenuToggle = document.querySelector(".mobile-menu-toggle");
//   const navList = document.querySelector(".nav-list");

//   if (mobileMenuToggle && navList) {
//     mobileMenuToggle.addEventListener("click", function () {
//       navList.classList.toggle("active");

//       if (navList.classList.contains("active")) {
//         this.innerHTML = "✕";
//       } else {
//         this.innerHTML = "☰";
//       }
//     });
//   }

//   const searchToggle = document.querySelector(".search-toggle");
//   const searchBar = document.querySelector(".search-bar");
//   const searchForm = document.querySelector(".search-bar form");

//   if (searchToggle && searchBar) {
//     searchToggle.addEventListener("click", function (e) {
//       e.stopPropagation();
//       searchBar.classList.toggle("active");

//       if (searchBar.classList.contains("active")) {
//         const input = searchBar.querySelector("input");
//         if (input) input.focus();
//       }

//       if (navList) navList.classList.remove("active");
//     });

//     document.addEventListener("click", function (e) {
//       if (
//         !e.target.closest(".search-bar") &&
//         !e.target.matches(".search-toggle")
//       ) {
//         searchBar.classList.remove("active");
//       }
//     });

//     if (searchForm) {
//       searchForm.addEventListener("submit", function (e) {
//         e.preventDefault();
//         const searchInput = this.querySelector("input");
//         const searchTerm = searchInput.value.trim();

//         if (searchTerm) {
//           console.log("Searching for:", searchTerm);
//         }
//       });
//     }
//   }
//   const apiUrl =
//     "http://localhost/wordpress/wp-json/wp/v2/posts?_embed&per_page=100";

//   fetch(apiUrl)
//     .then((response) => {
//       if (!response.ok) {
//         throw new Error(`HTTP error! Status: ${response.status}`);
//       }
//       return response.json();
//     })
//     .then((posts) => {
//       if (posts.length === 0) {
//         console.log("No posts found.");
//         return;
//       }

//       // Display all posts in the news list
//       displayNewsList(posts);

//       // Add event listeners to filter options
//       filterOptions.forEach((option) => {
//         option.addEventListener("change", () => filterNews(posts));
//       });

//       // Add event listener to reset button
//       resetButton.addEventListener("click", () => {
//         filterOptions.forEach((option) => (option.checked = false));
//         filterNews(posts);
//       });
//     })
//     .catch((error) => {
//       console.error("Error fetching posts:", error);
//     });

//   function displayNewsList(posts) {
//     newsList.innerHTML = ""; // Clear the current news list

//     posts.forEach((post, index) => {
//       const newsItem = createNewsItem(post);

//       // Display the first 3 items fully visible initially
//       if (index < 3) {
//         newsItem.style.opacity = "1"; // Make them fully visible
//       } else {
//         newsItem.style.opacity = "0.5"; // Set opacity for the rest
//       }

//       newsList.appendChild(newsItem);

//       // Add event listener for each news item
//       newsItem.addEventListener("click", function () {
//         swapNewsContent(newsItem, post); // Pass the post data to swap content
//       });

//       // Scroll and fade effect when items enter the viewport
//       observeFadeIn(newsItem);
//     });
//   }

//   function createNewsItem(post) {
//     const newsItem = document.createElement("div");
//     newsItem.className = "news-item";

//     // Extract the featured image
//     const featuredImage = post._embedded["wp:featuredmedia"]
//       ? post._embedded["wp:featuredmedia"][0].source_url
//       : null;

//     let imageElement = "";
//     if (featuredImage) {
//       imageElement = `<img src="${featuredImage}" alt="${post.title.rendered}" />`;
//     }

//     const categoryIds = post.categories ? post.categories.join(" ") : "";

//     newsItem.innerHTML = `
//         ${imageElement}
//         <div>
//             <div class="news-title">${post.title.rendered}</div>
//             <div class="news-date">${new Date(
//               post.date
//             ).toLocaleDateString()}</div>
//             <div class="news-description">${post.excerpt.rendered}</div>
//         </div>
//     `;
//     newsItem.dataset.categories = categoryIds; // Set the categories as a data attribute
//     newsItem.dataset.featuredImage = featuredImage; // Store the featured image URL

//     return newsItem;
//   }

//   function filterNews(posts) {
//     const selectedCategoryIds = Array.from(filterOptions)
//       .filter((option) => option.checked)
//       .map((option) => option.value);

//     const allNewsItems = document.querySelectorAll(".news-item");

//     allNewsItems.forEach((item) => {
//       const categoryIds = item.dataset.categories;
//       const shouldShow =
//         selectedCategoryIds.length === 0 ||
//         selectedCategoryIds.some((categoryId) =>
//           categoryIds.includes(categoryId)
//         );

//       item.style.display = shouldShow ? "flex" : "none";
//     });
//   }

//   function swapNewsContent(clickedNews, post) {
//     const latestNewsImageContainer =
//       document.querySelector(".latest-news-image");
//     const latestNewsTitle = document.querySelector(
//       ".latest-news-content .news-title"
//     );
//     const latestNewsDate = document.querySelector(
//       ".latest-news-content .news-date"
//     );
//     const latestNewsDescription = document.querySelector(
//       ".latest-news-content .news-description"
//     );
//     const latestNewsCategories = document.querySelector(
//       "#latest-news-categories"
//     );

//     // Clear the image container
//     latestNewsImageContainer.innerHTML = "";

//     // Update title, date, and description
//     latestNewsTitle.textContent = post.title.rendered;
//     latestNewsDate.textContent = new Date(post.date).toLocaleDateString();
//     latestNewsDescription.innerHTML = post.excerpt.rendered;

//     // Remove images from the description to avoid duplication
//     latestNewsDescription
//       .querySelectorAll("img")
//       .forEach((img) => img.remove());

//     // Extract all images from the post content
//     const postImages = extractAllImages(post.content.rendered);

//     // Display images in a carousel or as a single image
//     if (postImages.length > 1) {
//       createCarousel(latestNewsImageContainer, postImages);
//     } else if (postImages.length === 1) {
//       // If only one image, display it directly
//       const singleImage = document.createElement("img");
//       singleImage.src = postImages[0];
//       singleImage.alt = "Featured Image";
//       latestNewsImageContainer.appendChild(singleImage);
//     } else {
//       // If no images, fall back to featured image
//       const fallbackImage = document.createElement("img");
//       fallbackImage.src = clickedNews.dataset.featuredImage || "";
//       fallbackImage.alt = "Featured Image";
//       latestNewsImageContainer.appendChild(fallbackImage);
//     }

//     // Update categories
//     updateCategories(latestNewsCategories, post.categories);

//     console.log("Content swapped successfully!");
//   }

//   // Create a carousel for multiple images
//   function createCarousel(container, images) {
//     const carouselWrapper = document.createElement("div");
//     carouselWrapper.classList.add("carousel-wrapper");

//     // Add images to the carousel
//     images.forEach((image, index) => {
//       const imgElement = document.createElement("img");
//       imgElement.src = image;
//       imgElement.alt = `Image ${index + 1}`;
//       imgElement.classList.add("carousel-image");
//       carouselWrapper.appendChild(imgElement);
//     });

//     // Add navigation buttons
//     const prevButton = document.createElement("button");
//     prevButton.textContent = "Prev";
//     prevButton.classList.add("carousel-prev");
//     prevButton.setAttribute("aria-label", "Previous Image");

//     const nextButton = document.createElement("button");
//     nextButton.textContent = "Next";
//     nextButton.classList.add("carousel-next");
//     nextButton.setAttribute("aria-label", "Next Image");

//     carouselWrapper.appendChild(prevButton);
//     carouselWrapper.appendChild(nextButton);

//     // Add carousel to the container
//     container.appendChild(carouselWrapper);

//     let currentImageIndex = 0;
//     updateCarousel(currentImageIndex);

//     // Event listeners for navigation
//     prevButton.addEventListener("click", () => {
//       currentImageIndex =
//         (currentImageIndex - 1 + images.length) % images.length;
//       updateCarousel(currentImageIndex);
//     });

//     nextButton.addEventListener("click", () => {
//       currentImageIndex = (currentImageIndex + 1) % images.length;
//       updateCarousel(currentImageIndex);
//     });
//   }

//   // Update the carousel to show the correct image
//   function updateCarousel(index) {
//     const carouselImages = document.querySelectorAll(
//       ".carousel-wrapper .carousel-image"
//     );
//     carouselImages.forEach((img, i) => {
//       img.style.display = i === index ? "block" : "none"; // Show only the current image
//     });
//   }

//   // Extract all images from post content
//   function extractAllImages(content) {
//     const tempDiv = document.createElement("div");
//     tempDiv.innerHTML = content;
//     const images = tempDiv.querySelectorAll("img");
//     return Array.from(images).map((img) => img.src);
//   }

//   function extractFirstImage(content) {
//     const tempDiv = document.createElement("div");
//     tempDiv.innerHTML = content;
//     const firstImageElement = tempDiv.querySelector("img");
//     return firstImageElement ? firstImageElement.src : null;
//   }

//   function getCategoryName(categoryId) {
//     const categoryMap = {
//       3: "ROCBN",
//       4: "Revenue Division",
//     };
//     return categoryMap[categoryId] || null;
//   }

//   // Fade in effect when an item enters the viewport
//   function observeFadeIn(newsItem) {
//     const observer = new IntersectionObserver(
//       (entries) => {
//         entries.forEach((entry) => {
//           if (entry.isIntersecting) {
//             entry.target.style.transition = "opacity 0.5s ease-in";
//             entry.target.style.opacity = "1"; // Fade in when visible
//           } else {
//             entry.target.style.opacity = "0.5"; // Fade out when not visible
//           }
//         });
//       },
//       {
//         threshold: 0.1, // Trigger when 10% of the item is in the viewport
//       }
//     );
//     observer.observe(newsItem);
//   }

//   // Function to check if we've scrolled past the hero section
//   function checkScroll() {
//     const heroHeight = heroSection.offsetHeight;
//     const scrollPosition =
//       window.pageYOffset || document.documentElement.scrollTop;

//     if (scrollPosition > heroHeight) {
//       scrollToTopBtn.classList.add("visible");
//     } else {
//       scrollToTopBtn.classList.remove("visible");
//     }
//   }

//   // Run check on scroll
//   window.addEventListener("scroll", checkScroll);

//   // Smooth scroll to top
//   scrollToTopBtn.addEventListener("click", function (e) {
//     e.preventDefault();
//     window.scrollTo({
//       top: 0,
//       behavior: "smooth",
//     });
//   });
// });
document.addEventListener("DOMContentLoaded", function () {
  const POSTS_PER_PAGE = 6;
  let currentPage = 0;
  let allPosts = [];
  let filteredPosts = [];

  const mobileMenuToggle = document.querySelector(".mobile-menu-toggle");
  const navList = document.querySelector(".nav-list");
  const searchToggle = document.querySelector(".search-toggle");
  const searchBar = document.querySelector(".search-bar");
  const newsGrid = document.querySelector(".news-grid");
  const gridPrevBtn = document.querySelector(".grid-prev");
  const gridNextBtn = document.querySelector(".grid-next");
  const gridPagination = document.querySelector(".grid-pagination");
  const latestNewsImage = document.querySelector(".latest-news-image");
  const latestNewsTitle = document.querySelector(
    ".latest-news-content .news-title"
  );
  const latestNewsDescription = document.querySelector(
    ".latest-news-content .news-description"
  );
  const latestNewsDate = document.querySelector(
    ".latest-news-content .news-date"
  );
  const latestNewsCategories = document.getElementById(
    "latest-news-categories"
  );
  const scrollToTopBtn = document.getElementById("scrollToTopBtn");

  setupEventListeners();
  fetchPosts();

  function setupEventListeners() {
    if (mobileMenuToggle && navList) {
      mobileMenuToggle.addEventListener("click", function () {
        navList.classList.toggle("active");
        this.innerHTML = navList.classList.contains("active") ? "✕" : "☰";
      });
    }

    if (searchToggle && searchBar) {
      searchToggle.addEventListener("click", function (e) {
        e.stopPropagation();
        searchBar.classList.toggle("active");
        if (searchBar.classList.contains("active")) {
          searchBar.querySelector("input").focus();
        }
        if (navList) navList.classList.remove("active");
      });

      document.addEventListener("click", function (e) {
        if (
          !e.target.closest(".search-bar") &&
          !e.target.matches(".search-toggle")
        ) {
          searchBar.classList.remove("active");
        }
      });
    }

    if (scrollToTopBtn) {
      window.addEventListener("scroll", checkScroll);
      scrollToTopBtn.addEventListener("click", scrollToTop);
    }

    gridPrevBtn.addEventListener("click", goToPrevPage);
    gridNextBtn.addEventListener("click", goToNextPage);
  }

  function checkScroll() {
    const scrollPosition =
      window.pageYOffset || document.documentElement.scrollTop;
    scrollToTopBtn.classList.toggle("visible", scrollPosition > 300);
  }

  function scrollToTop(e) {
    e.preventDefault();
    window.scrollTo({ top: 0, behavior: "smooth" });
  }

  function fetchPosts() {
    const apiUrl =
      "http://localhost/wordpress/wp-json/wp/v2/posts?_embed&per_page=100";

    fetch(apiUrl)
      .then((response) => {
        if (!response.ok)
          throw new Error(`HTTP error! Status: ${response.status}`);
        return response.json();
      })
      .then((posts) => {
        allPosts = posts;
        filteredPosts = [...posts];
        renderNewsGrid();

        if (posts.length > 0) {
          updateLatestNews(posts[0]);
        }
      })
      .catch((error) => {
        console.error("Error fetching posts:", error);
        newsGrid.innerHTML = `<p>Error loading news. Please try again later.</p>`;
      });
  }

  function renderNewsGrid() {
    newsGrid.innerHTML = "";

    const startIdx = currentPage * POSTS_PER_PAGE;
    const endIdx = startIdx + POSTS_PER_PAGE;
    const postsToShow = filteredPosts.slice(startIdx, endIdx);

    if (postsToShow.length === 0) {
      newsGrid.innerHTML = `<p>No news items found.</p>`;
    } else {
      postsToShow.forEach((post) => {
        const newsItem = createNewsItem(post);
        newsGrid.appendChild(newsItem);
        newsItem.addEventListener("click", () => updateLatestNews(post));
      });
    }

    updatePagination();
  }

  function createNewsItem(post) {
    const newsItem = document.createElement("div");
    newsItem.className = "news-item";

    const featuredImage = post._embedded?.["wp:featuredmedia"]?.[0]?.source_url;

    newsItem.innerHTML = `
            ${
              featuredImage
                ? `<img src="${featuredImage}" alt="${post.title.rendered}" loading="lazy">`
                : ""
            }
            <div>
                <div class="news-title">${post.title.rendered}</div>
                <div class="news-date">${formatDate(post.date)}</div>
                <div class="news-description">${post.excerpt.rendered}</div>
            </div>
        `;

    return newsItem;
  }

  function updateLatestNews(post) {
    latestNewsTitle.textContent = post.title.rendered;
    latestNewsDescription.innerHTML = post.excerpt.rendered;
    latestNewsDate.textContent = `Published: ${formatDate(post.date)}`;

    latestNewsDescription
      .querySelectorAll("img")
      .forEach((img) => img.remove());

    updateCategories(post.categories);
    updateLatestNewsImage(post);
  }

  function updateCategories(categories) {
    latestNewsCategories.innerHTML = "";
    if (!categories || categories.length === 0) return;

    const categoryMap = {
      3: "ROCBN",
      4: "Revenue Division",
    };

    categories.forEach((catId) => {
      const categoryName = categoryMap[catId] || `Category ${catId}`;
      const span = document.createElement("span");
      span.textContent = categoryName;
      latestNewsCategories.appendChild(span);
    });
  }

  function updateLatestNewsImage(post) {
    latestNewsImage.innerHTML = "";
    const featuredImage = post._embedded?.["wp:featuredmedia"]?.[0]?.source_url;

    if (featuredImage) {
      const img = document.createElement("img");
      img.src = featuredImage;
      img.alt = post.title.rendered;
      latestNewsImage.appendChild(img);
    } else {
      latestNewsImage.innerHTML = `<img src="img/MOFE_Building.jpg" alt="Default News Image">`;
    }
  }

  function goToPrevPage() {
    if (currentPage > 0) {
      currentPage--;
      renderNewsGrid();
    }
  }

  function goToNextPage() {
    if ((currentPage + 1) * POSTS_PER_PAGE < filteredPosts.length) {
      currentPage++;
      renderNewsGrid();
    }
  }

  function updatePagination() {
    gridPagination.innerHTML = "";
    const pageCount = Math.ceil(filteredPosts.length / POSTS_PER_PAGE);

    for (let i = 0; i < pageCount; i++) {
      const dot = document.createElement("span");
      if (i === currentPage) dot.classList.add("active");
      dot.addEventListener("click", () => {
        currentPage = i;
        renderNewsGrid();
      });
      gridPagination.appendChild(dot);
    }

    gridPrevBtn.disabled = currentPage === 0;
    gridNextBtn.disabled =
      (currentPage + 1) * POSTS_PER_PAGE >= filteredPosts.length;
  }

  function formatDate(dateString) {
    const options = { year: "numeric", month: "long", day: "numeric" };
    return new Date(dateString).toLocaleDateString(undefined, options);
  }
});
