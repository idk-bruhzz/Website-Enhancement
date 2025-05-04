document.addEventListener("DOMContentLoaded", function () {
  // Configuration
  const postsPerPage = 5; // Number of posts to show per page
  let currentPage = 1;
  let allPosts = []; // Store all fetched posts
  let filteredPosts = []; // Store filtered posts (for search/category)

  // ========== FETCH WORDPRESS POSTS ==========
  async function fetchWordPressPosts() {
    try {
      const response = await fetch(
        "http://localhost/wordpress/wp-json/wp/v2/posts?_embed&per_page=100&_fields=id,title,excerpt,date,link,jetpack_featured_media_url,categories"
      );
      allPosts = await response.json();
      filteredPosts = [...allPosts]; // Initialize filtered posts with all posts
      updateNewsSection();
      updatePagination();
    } catch (error) {
      console.error("Error fetching WordPress posts:", error);
      // Fallback to static content if API fails
      showStaticContent();
    }
  }

  function updateNewsSection() {
    const newsGrid = document.querySelector(".news-grid");
    if (!newsGrid) return;

    // Clear existing content
    newsGrid.innerHTML = "";

    // Calculate posts to show for current page
    const startIndex = (currentPage - 1) * postsPerPage;
    const endIndex = startIndex + postsPerPage;
    const postsToShow = filteredPosts.slice(startIndex, endIndex);

    // Process each post
    postsToShow.forEach((post, index) => {
      const title = decodeHTMLEntities(post.title.rendered);
      const excerpt = post.excerpt.rendered
        ? decodeHTMLEntities(post.excerpt.rendered.replace(/<[^>]*>/g, ""))
        : "Read more about this update...";
      const date = new Date(post.date).toLocaleDateString("en-US", {
        year: "numeric",
        month: "long",
        day: "numeric",
      });
      const imageUrl = post.jetpack_featured_media_url || "../img/OCPlong.png";
      const link = post.link;

      // Get category name (first category only for simplicity)
      const category = getCategoryName(post.categories[0]);

      // Create news card
      const newsCard = document.createElement("article");
      newsCard.className =
        index === 0 && currentPage === 1 ? "news-card featured" : "news-card";
      newsCard.setAttribute("data-aos", "fade-up");
      if (index > 0) {
        newsCard.setAttribute("data-aos-delay", index * 50);
      }

      // Featured card (only on first page)
      if (index === 0 && currentPage === 1) {
        newsCard.innerHTML = `
          <div class="news-image-container">
            <img src="${imageUrl}" alt="${title}" class="news-image" loading="lazy">
            <div class="news-badge">Featured</div>
          </div>
          <div class="news-content">
            <div class="news-meta">
              <span class="news-date"><i class="far fa-calendar-alt"></i> ${date}</span>
              <span class="news-category-tag">${
                category || "Announcements"
              }</span>
            </div>
            <h2 class="news-title">${title}</h2>
            <p class="news-excerpt">${excerpt}</p>
            <a href="${link}" class="news-link" target="_blank">
              Read full story <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        `;
      } else {
        newsCard.innerHTML = `
          <div class="news-image-container">
            <img src="${imageUrl}" alt="${title}" class="news-image" loading="lazy">
          </div>
          <div class="news-content">
            <div class="news-meta">
              <span class="news-date"><i class="far fa-calendar-alt"></i> ${date}</span>
              <span class="news-category-tag">${
                category || "Announcements"
              }</span>
            </div>
            <h2 class="news-title">${title}</h2>
            <p class="news-excerpt">${excerpt}</p>
            <a href="${link}" class="news-link" target="_blank">
              Read more <i class="fas fa-arrow-right"></i>
            </a>
          </div>
        `;
      }

      newsGrid.appendChild(newsCard);
    });

    // Reinitialize AOS for new elements
    if (window.AOS) {
      AOS.refresh();
    }
  }

  function updatePagination() {
    const paginationContainer = document.querySelector(".news-pagination");
    if (!paginationContainer) return;

    // Clear existing pagination
    paginationContainer.innerHTML = "";

    const totalPages = Math.ceil(filteredPosts.length / postsPerPage);

    // Previous button
    const prevButton = document.createElement("a");
    prevButton.className = "page-link";
    prevButton.innerHTML = '<i class="fas fa-chevron-left"></i>';
    prevButton.addEventListener("click", (e) => {
      e.preventDefault();
      if (currentPage > 1) {
        currentPage--;
        updateNewsSection();
        updatePagination();
        window.scrollTo({ top: 0, behavior: "smooth" });
      }
    });
    paginationContainer.appendChild(prevButton);

    // Page numbers
    const maxVisiblePages = 5; // Maximum number of page buttons to show
    let startPage, endPage;

    if (totalPages <= maxVisiblePages) {
      // Show all pages
      startPage = 1;
      endPage = totalPages;
    } else {
      // Calculate start and end pages
      const maxPagesBeforeCurrent = Math.floor(maxVisiblePages / 2);
      const maxPagesAfterCurrent = Math.ceil(maxVisiblePages / 2) - 1;

      if (currentPage <= maxPagesBeforeCurrent) {
        // Near the beginning
        startPage = 1;
        endPage = maxVisiblePages;
      } else if (currentPage + maxPagesAfterCurrent >= totalPages) {
        // Near the end
        startPage = totalPages - maxVisiblePages + 1;
        endPage = totalPages;
      } else {
        // Somewhere in the middle
        startPage = currentPage - maxPagesBeforeCurrent;
        endPage = currentPage + maxPagesAfterCurrent;
      }
    }

    // Add page numbers
    for (let i = startPage; i <= endPage; i++) {
      const pageLink = document.createElement("a");
      pageLink.className = `page-link ${i === currentPage ? "active" : ""}`;
      pageLink.textContent = i;
      pageLink.addEventListener("click", (e) => {
        e.preventDefault();
        if (i !== currentPage) {
          currentPage = i;
          updateNewsSection();
          updatePagination();
          window.scrollTo({ top: 0, behavior: "smooth" });
        }
      });
      paginationContainer.appendChild(pageLink);
    }

    // Next button
    const nextButton = document.createElement("a");
    nextButton.className = "page-link";
    nextButton.innerHTML = '<i class="fas fa-chevron-right"></i>';
    nextButton.addEventListener("click", (e) => {
      e.preventDefault();
      if (currentPage < totalPages) {
        currentPage++;
        updateNewsSection();
        updatePagination();
        window.scrollTo({ top: 0, behavior: "smooth" });
      }
    });
    paginationContainer.appendChild(nextButton);
  }

  // ========== UTILITY FUNCTIONS ==========
  function decodeHTMLEntities(text) {
    const textArea = document.createElement("textarea");
    textArea.innerHTML = text;
    return textArea.value;
  }

  function getCategoryName(categoryId) {
    // This is a simplified version - in a real implementation you'd fetch category names from WP API
    const categories = {
      1: "Announcements",
      2: "System Updates",
      3: "Maintenance",
      4: "Events",
      5: "Regulations",
    };
    return categories[categoryId];
  }

  function showStaticContent() {
    const newsGrid = document.querySelector(".news-grid");
    if (!newsGrid) return;

    newsGrid.innerHTML = `
      <!-- Featured News Card -->
      <article class="news-card featured" data-aos="fade-up">
        <div class="news-image-container">
          <img src="../img/OCPlong.png" alt="OCP Mobile App Launch" class="news-image" loading="lazy">
          <div class="news-badge">Featured</div>
        </div>
        <div class="news-content">
          <div class="news-meta">
            <span class="news-date"><i class="far fa-calendar-alt"></i> June 15, 2025</span>
            <span class="news-category-tag">System Updates</span>
          </div>
          <h2 class="news-title">OCP Mobile App Now Available for Download</h2>
          <p class="news-excerpt">The official One Common Portal mobile application is now available on both iOS and Android platforms.</p>
          <a href="news-detail.html" class="news-link">
            Read full story <i class="fas fa-arrow-right"></i>
          </a>
        </div>
      </article>

      <!-- Regular News Cards -->
      <article class="news-card" data-aos="fade-up" data-aos-delay="100">
        <div class="news-image-container">
          <img src="../img/OCPlong.png" alt="Enhanced Tax Features" class="news-image" loading="lazy">
        </div>
        <div class="news-content">
          <div class="news-meta">
            <span class="news-date"><i class="far fa-calendar-alt"></i> June 10, 2025</span>
            <span class="news-category-tag">Announcements</span>
          </div>
          <h2 class="news-title">Enhanced Tax Filing Features Now Live</h2>
          <p class="news-excerpt">Our tax portal has been upgraded with new features including bulk uploads and payment scheduling.</p>
          <a href="news-detail.html" class="news-link">
            Read more <i class="fas fa-arrow-right"></i>
          </a>
        </div>
      </article>

      <article class="news-card" data-aos="fade-up" data-aos-delay="150">
        <div class="news-image-container">
          <img src="../img/OCPlong.png" alt="System Maintenance" class="news-image" loading="lazy">
        </div>
        <div class="news-content">
          <div class="news-meta">
            <span class="news-date"><i class="far fa-calendar-alt"></i> June 5, 2025</span>
            <span class="news-category-tag">Maintenance</span>
          </div>
          <h2 class="news-title">Scheduled System Maintenance Notification</h2>
          <p class="news-excerpt">Planned maintenance will occur on June 20th from 2AM to 5AM.</p>
          <a href="news-detail.html" class="news-link">
            Read more <i class="fas fa-arrow-right"></i>
          </a>
        </div>
      </article>
    `;
  }

  // ========== INITIALIZATION ==========
  fetchWordPressPosts();

  // ========== CATEGORY FILTERING ==========
  const categories = document.querySelectorAll(".news-category");

  categories.forEach((category) => {
    category.addEventListener("click", () => {
      categories.forEach((c) => c.classList.remove("active"));
      category.classList.add("active");

      // Reset to first page when changing category
      currentPage = 1;

      // Filter posts by category
      if (category.textContent === "All") {
        filteredPosts = [...allPosts];
      } else {
        // This is simplified - in a real implementation you'd match category IDs
        filteredPosts = allPosts.filter((post) => {
          const postCategory = getCategoryName(post.categories[0]);
          return postCategory === category.textContent;
        });
      }

      updateNewsSection();
      updatePagination();
    });
  });

  // ========== SEARCH FUNCTIONALITY ==========
  const searchInput = document.querySelector(".news-search input");
  const searchButton = document.querySelector(".news-search button");

  searchButton.addEventListener("click", (e) => {
    e.preventDefault();
    performSearch(searchInput.value);
  });

  searchInput.addEventListener("keypress", (e) => {
    if (e.key === "Enter") {
      e.preventDefault();
      performSearch(searchInput.value);
    }
  });

  function performSearch(query) {
    if (!query.trim()) {
      // If search is empty, show all posts
      filteredPosts = [...allPosts];
    } else {
      // Simple search implementation - searches in title and excerpt
      const searchTerm = query.toLowerCase();
      filteredPosts = allPosts.filter((post) => {
        const title = post.title.rendered.toLowerCase();
        const excerpt = post.excerpt.rendered.toLowerCase();
        return title.includes(searchTerm) || excerpt.includes(searchTerm);
      });
    }

    // Reset to first page when searching
    currentPage = 1;
    updateNewsSection();
    updatePagination();
  }
});
