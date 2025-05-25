<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gallery Page | J's Photography</title>
  <link rel="stylesheet" href="CSS/gallery-style.css" />
  <style>
    @import url("https://fonts.googleapis.com/css2?family=Lekton:ital,wght@0,400;0,700;1,400&display=swap");
    @import url("https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap");
  </style>
</head>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const nav = document.querySelector(".navigation");
  const gallerySection = document.querySelector(".gallery-section");
  const galleryItems = document.querySelectorAll(".gallery-item");

  // NAVIGATION BAR SHRINK
  window.addEventListener("scroll", () => {
    if (window.scrollY > 50) {
      nav.style.height = "70px";
    } else {
      nav.style.height = "100px";
    }
  });

  // INTERSECTION OBSERVER TO TRIGGER SECTION VISIBILITY
  const sectionObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        gallerySection.classList.add("visible");
      }
    });
  }, { threshold: 0.2 });

  sectionObserver.observe(gallerySection);

  // INTERSECTION OBSERVER FOR GALLERY ITEMS
  const itemObserver = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("show");
        itemObserver.unobserve(entry.target); // only animate once
      }
    });
  }, { threshold: 0.1 });

  galleryItems.forEach((item, index) => {
    item.style.transitionDelay = `${index * 100}ms`;
    itemObserver.observe(item);
  });
});
document.addEventListener("DOMContentLoaded", () => {
  const galleryBlocks = document.querySelectorAll(".gallery-block");
  const searchInput = document.getElementById("searchInput");
  const filterLinks = document.querySelectorAll(".filter-dropdown a");

  // FILTER FUNCTION
  function filterGalleryBy(category) {
    galleryBlocks.forEach(block => {
      const blockCategory = block.dataset.category.toLowerCase();
      if (category === "all" || blockCategory.includes(category.toLowerCase())) {
        block.style.display = "block";
      } else {
        block.style.display = "none";
      }
    });
  }

  // 🔍 SEARCH INPUT FILTER
  searchInput.addEventListener("input", () => {
    const query = searchInput.value.trim();
    filterGalleryBy(query);
  });

  // 🍔 HAMBURGER DROPDOWN CATEGORY FILTER
  filterLinks.forEach(link => {
    link.addEventListener("click", (e) => {
      e.preventDefault();
      const selectedCategory = link.dataset.category;
      filterGalleryBy(selectedCategory);
    });
  });
});
</script>

<body>
   <!--Main Container-->
    <div class="main">
      <!--sidebar-->
      <aside class="sidenav">
        <div class="socials">
          <a href="https://www.facebook.com/JsgPh" target="_blank"
            ><img src="image/fb.png"
          /></a>
          <a href="https://www.instagram.com/" target="_blank"
            ><img src="image/ig.png"
          /></a>
          <a href="https://x.com/home" target="_blank"
            ><img src="image/x.png"
          /></a>
        </div>
        <div class="visit-container">
          <h1 class="visit-text">VISIT US &nbsp;&nbsp;</h1>
        </div>
        <div class="user-prof-icon">
          <a href="user-profile.php"><img src="image/user.png" /></a>
        </div>
        <div class="audit-trail-icon">
          <a href="audit-trail.php"><img src="image/audit.png" /></a>
        </div>
        <div class="settings">
          <a href="settings.php"><img src="image/settingslogo.png" /></a>
        </div>
      </aside>

      <!--right container-->
      <section class="right-body">
        <!--top-->
        <div id="top"></div>
        <!--navigation container-->
        <nav class="navigation">
          <div class="identity">
            <img src="image/logo.png" class="nav_logo" />
            <h6 class="nav_companyname">J's Photography</h6>
          </div>
          <div class="burgermenu">
            <img
              src="image/hamburgermenu.png"
              class="burgermen"
              onclick="
            toggleDim();
            toggleNav();
            "
            />
          </div>
          <div class="home">
            <a href="home.php" class="link home">Home</a>
          </div>
          <div class="dashboard">
            <a href="dashboard.php" class="link home">Dashboard</a>
          </div>
          <div class="gallery">
            <a href="gallery.php" class="link gallery">Gallery</a>
          </div>
          <div class="about">
            <a href="about.php" class="link about">About</a>
          </div>
          <div class="contact">
            <a href="contact.php" class="link contact">Contact</a>
          </div>
        </nav>

        <!--nav overlay-->
        <nav class="nav-overlay">
          <div class="nav-header">
            <img src="image/logo.png" class="nav_logo2" />
            <h6 class="nav_companyname2">J's Photography</h6>
            <button
              class="close-btn3"
              onclick="
            toggleNavClose()
            toggleLit()"
            >
              ×
            </button>
          </div>
          <div class="nav-body">
            <div class="dashboard2">
              <a href="dashboard.php" class="link2">Dashboard</a>
            </div>
            <div class="gallery2">
              <a href="gallery.php" class="link2">Gallery</a>
            </div>
            <div class="about2">
              <a href="about.php" class="link2">About</a>
            </div>
            <div class="contact2">
              <a href="contact.php" class="link2">Contact</a>
            </div>
          </div>
        </nav>

      <!--Seach Bar-->
      <div class="search-bar-wrapper">
  <div class="search-box">
    <input type="text" placeholder="Search categories..." id="searchInput" />
    <button class="search-btn">
      <img src="image/search-icon.png" alt="Search" />
    </button>
  </div>
  <div class="category-filter">
    <button class="filter-btn">
      <img src="image/custom-hamburger-icon.webp" alt="Filter" />
    </button>
    <div class="filter-dropdown">
  <a href="#" data-category="Debutants">Debutants</a>
  <a href="#" data-category="Wedding">Wedding</a>
  <a href="#" data-category="Fashion">Fashion</a>
  <a href="#" data-category="Portrait">Portrait</a>
  <a href="#" data-category="Newborn">Newborn</a>
  <a href="#" data-category="Landscape">Landscape</a>
  <a href="#" data-category="Macro Photography">Macro Photography</a>
  <a href="#" data-category="Category 7">Category 7</a>
  <a href="#" data-category="Category 8">Category 8</a>
  <a href="#" data-category="all">Show All</a>
</div>
<!-- Booking Button -->
  </div>
  <div class="booking-button">
  <a href="contact.php" class="book-now-link">Book Now</a>
</div>
</div>

  
      <!-- Gallery Section -->
      <main class="gallery-section">
        <div class="masonry">

          <!-- DEBUTANTS -->
          <div class="gallery-block" data-category="Debutants">
            <div class="gallery-text">DEBUTANTS</div>
            <div class="gallery-item">
              <img src="Debutant.webp" alt="Sweet 18th Birthday" />
              <p class="image-caption">Sweet 18th Birthday Photoshoots</p>
            </div>
          </div>

          <!-- WEDDING -->
          <div class="gallery-block" data-category="Wedding">
            <div class="gallery-text">WEDDING</div>
            <div class="gallery-item">
              <img src="Wedding.jpg" alt="Wedding" />
              <p class="image-caption">Wonderous Wedding Prenup Photoshoots</p>
            </div>
          </div>

          <!-- FASHION -->
          <div class="gallery-block" data-category="Fashion">
            <div class="gallery-text">FASHION</div>
            <div class="gallery-item">
              <img src="Fashion.webp" alt="Fashion Showcase" />
              <p class="image-caption">Fashion Showcase</p>
            </div>
          </div>

          <!-- PORTRAIT -->
          <div class="gallery-block" data-category="Portrait">
            <div class="gallery-text">PORTRAIT</div>
            <div class="gallery-item">
              <img src="Portrait.jpg" alt="Portrait" />
              <p class="image-caption">Images of Beautiful Faces</p>
            </div>
          </div>

          <!-- NEWBORN -->
          <div class="gallery-block" data-category="Newborn">
            <div class="gallery-text">NEWBORN</div>
            <div class="gallery-item">
              <img src="Newborn.jpg" alt="Newborn" />
              <p class="image-caption">Heartwarming Smiles of Infants</p>
            </div>
          </div>

          <!-- LANDSCAPE -->
          <div class="gallery-block" data-category="Landscape">
            <div class="gallery-text">LANDSCAPE</div>
            <div class="gallery-item">
              <img src="Landscape.jpg" alt="Lovely Sceneries" />
              <p class="image-caption">Lovely Sceneries Captured</p>
            </div>
          </div>
          <!-- MACRO PHOTOGRAPHY -->
          <div class="gallery-block" data-category="Macro Photography">
            <div class="gallery-text">MACRO PHOTOGRAPHY</div>
            <div class="gallery-item">
              <img src="Macro.jpg" alt="Lovely Sceneries" />
              <p class="image-caption">Pay Attention to Cool Details</p>
            </div>
          </div>
          <!-- Extras -->
          <div class="gallery-block" data-category="Category 7">
            <div class="gallery-text">CATEGORY 7</div>
          </div>
          <div class="gallery-block" data-category="Category 8">
            <div class="gallery-text">CATEGORY 8</div>
          </div>

        </div>
      </main>

    </section>
  </div>

  <script>
    function toggleMobileMenu() {
      const menu = document.getElementById("mobileMenu");
      menu.classList.toggle("show");
    }
  </script>

  <script>
  document.addEventListener("DOMContentLoaded", () => {
    const items = document.querySelectorAll(".gallery-item");

    function revealOnScroll() {
      items.forEach(item => {
        const rect = item.getBoundingClientRect();
        if (rect.top < window.innerHeight - 100) {
          item.classList.add("show");
        }
      });
    }

    // Initial check
    revealOnScroll();

    // Check on scroll
    window.addEventListener("scroll", revealOnScroll);
  });
</script>

<!-- Chatbot Toggle Button -->
<button class="botbutton" onclick="toggleChat()">
  <img src="image/chat-alert1.avif" class="bot-alert1" />
  <img src="image/chat-alert2.avif" class="bot-alert2" />
  <img src="image/botpic.png" class="botpic" />
</button>

<!-- Chatbot Panel -->
<div class="chat-panel" id="chatPanel">
  <div class="chat-header">
    <h3 class="jbot">J’Bot</h3>
    <button class="close-btn" onclick="toggleChat()">×</button>
  </div>
  <div class="chat-content">
    <div class="bot-message">
      <img src="image/botpic.png" alt="Bot" class="bot-icon" />
      <div class="message-bubble">
        Good Day! How may I be of service?
        <div class="bot-options">
          <button onclick="addUserMessage('Book an appointment'); addBotReplyWithLink('Sure! You can proceed by clicking the link below:', 'Go to appointment page', 'contact.html');">&#8226; Book an appointment</button>
          <button onclick="addUserMessage('Visit Facebook Page'); addBotReplyWithLink('Click the link below to visit our Facebook Page:', 'Facebook page', 'https://www.facebook.com/JsgPh');">&#8226; Visit Facebook Page</button>
          <button onclick="addUserMessage('Check available packages'); addBotReplyWithLink('Click the message below to check our available packages:', 'Packages', '#packages');">&#8226; Check out the package offers</button>
          <button onclick="addUserMessage('Generate a QR code copy of the pictures'); addBotReplyWithLink('Click the link below to access your photos:', 'QR Code', '#');">&#8226; Generate a QR code copy of the pictures</button>
          <button onclick="addUserMessage('Report a problem/issue'); addBotReplyWithLink('Here is the link where you can report your problems:', 'Report Issue', 'https://www.facebook.com/messages/t/373469663221561');">&#8226; Report a problem/issue</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Chatbot Overlay -->
<div class="overlay" id="chatOverlay" onclick="toggleChat()"></div>

<script>
function toggleChat() {
  document.getElementById("chatPanel").classList.toggle("show");
  document.getElementById("chatOverlay").classList.toggle("show");
}

function addUserMessage(message) {
  const content = document.querySelector(".chat-content");
  const userMsg = document.createElement("div");
  userMsg.className = "user-message";
  userMsg.innerHTML = `<div class="message-bubble user">${message}</div>`;
  content.appendChild(userMsg);
}

function addBotReplyWithLink(text, linkText, linkHref) {
  const content = document.querySelector(".chat-content");
  const botReply = document.createElement("div");
  botReply.className = "bot-message";
  botReply.innerHTML = `
    <img src="image/botpic.png" alt="Bot" class="bot-icon" />
    <div class="message-bubble">
      ${text}<br>
      <a href="${linkHref}" class="bot-link" target="_blank">${linkText}</a>
    </div>`;
  content.appendChild(botReply);
}
</script>

</body>
</html>