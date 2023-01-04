<div class="navbar">
  <div class="container">
    <div class="logoimage">
      <a class="logo" href="/index.php"><img src="../../public/WebsiteLogo.svg" alt="logo" class="site-logo-img" /></a>
    </div>
    <img id="mobile-cta" class="mobile-menu" src="../../public/menuwhite.svg" alt="Open navigation menu" />

    <nav>
      <img id="mobile-exit" class="mobile-menu-exit" src="../../public/exit.svg" alt="close navigation" />

      <ul class="nav-items">
        <li>
          <a class="nav-link" href="/index.php">Home</a>
        </li>
        <li>
          <a class="nav-link" href="/src/pages/explore.php">Explore</a>
        </li>
        <li>
          <a class="nav-link" href="/src/pages/history.php">History</a>
        </li>
        <li>
          <a class="nav-link" href="/src/pages/routes.php">Routes</a>
        </li>
        <li>
          <a class="nav-link" href="/src/pages/gallery.php">Gallery</a>
        </li>
        <li>
          <a class="nav-link" href="/src/pages/developers.php">Contacts</a>
        </li>
      </ul>
    </nav>
    <script>
      const mobileBtn = document.getElementById("mobile-cta"),
        nav = document.querySelector("nav"),
        mobileBtnExit = document.getElementById("mobile-exit");

      mobileBtn.addEventListener("click", () => {
        nav.classList.add("menu-button");
      });

      mobileBtnExit.addEventListener("click", () => {
        nav.classList.remove("menu-button");
      });

      const noticeContainer = document.querySelector(".notice-container"),
        navbar = document.querySelector(".navbar"),
        doc = document.querySelector("html");
      let topSection = document.querySelector(".top-section");

      document.querySelector("body").onscroll = (e) => {
        // Navbar handle on marquee notices
        if (noticeContainer)
          navbar.style.top = `${Math.max(0, noticeContainer.clientHeight - doc.scrollTop)}px`;

        // Navbar color change on exit of .top-section
        if (topSection && topSection.clientHeight + (noticeContainer ? noticeContainer.clientHeight : 0) < doc.scrollTop) {
          navbar.style.backgroundColor = "#212121";
        } else {
          navbar.style.backgroundColor = "transparent";

          // since .top-section comes after navbar, this line is important 
          topSection = document.querySelector(".top-section");
        }
      }

      // on page load put navbar in currect position
      document.querySelector("body").onload = document.querySelector("body").onscroll;

      const navLinks = document.getElementsByClassName("nav-link"),
        {
          pathname
        } = window.location;

      // modify active link
      for (let i = 0; i < navLinks.length; i++) {
        if (navLinks[i].href.endsWith(pathname)) {
          navLinks[i].classList.add("active-link")
          navLinks[i].onclick = (e) => {
            e.preventDefault();
          };
        }
      }
    </script>
  </div>
</div>