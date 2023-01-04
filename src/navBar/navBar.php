<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="navBar.css">
  <title>Document</title>
</head>
<body>
  
</body>
</html>

<div class="navbar">
  <div class="container">
    <div class="logoimage">
      <a class="logo" href="/index.php"><img src="../../public/WebsiteLogo.svg" alt="logo" class="site-logo-img" /></a>
    </div>
    <img id="mobile-cta" class="mobile-menu" src="../../public/menuwhite.svg" alt="Open navigation menu" />

    <nav>
      <img id="mobile-exit" class="mobile-menu-exit" src="../../public/exit.svg" alt="close navigation" />

      <ul class="nav-items">
        <li><a href="/index.php">Home</a></li>
        <li><a href="/src/pages/explore.php">Explore</a></li>
        <li><a href="/src/pages/history.php">History</a></li>
        <li><a href="/src/pages/routes.php">Routes</a></li>
        <li><a href="/src/pages/gallery.php">Gallery</a></li>
        <li><a href="/src/pages/developers.php">Contacts</a></li>
      </ul>
    </nav>
    <script>

      const mobileBtn = document.getElementById("mobile-cta");
      nav = document.querySelector("nav");
      mobileBtnExit = document.getElementById("mobile-exit");

      mobileBtn.addEventListener("click", () => {
        nav.classList.add("menu-button");
      });

      mobileBtnExit.addEventListener("click", () => {
        nav.classList.remove("menu-button");
      });
    </script>
  </div>
</div>
