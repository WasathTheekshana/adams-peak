<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adams Peak, also known as Sri Pada, is an iconic mountain in Sri Lanka. It is a place of spiritual significance for people of various faiths and is a treasured heritage of Sri Lanka.">
    <meta name="keywords" content="visit Sri Lanka, adam's peak, Sri Padaya, Travel Sri Lanka, Sri Padata Details, Sri Padaya Photos, sri padaya details, adam's peak history">
    <meta http-equiv="refresh">
    <title>Sri Padaya</title>
    <link rel="stylesheet" href="/src/css/index.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="./src/components/forum/forum.js"></script>
</head>

<body>

    <div class="preloader-container">
        <img id="preloader-img" src="../../../public/preloader-img.png" alt="">
        <h2> Adam's Peak </h2>
    </div>

    <script>
      //after window is loaded completely 
      window.onload = function(){
          //hide the preloader
          document.querySelector(".preloader-container").style.display = "none";
      }
  </script>

  <marquee width="1%" direction="left" loop="infinite">
    *New Sri Pada Season - 7th december 2022 to 5th May 2023
    </marquee>

  <!-------------------- Hero Section -------------------->
  <div class="container-hero">
    <div class="hero-section">

      <!-------------------- navBar Section -------------------->
    <?php include './src/navBar/navBar.php';?> 
      <!-------------------- navBar Section end -------------------->

      <div class="hero-content">
        <p class="english-title">Adam’s Peak</p>
        <img class="sinhala-title" src="./public/sinhala.svg" onContextMenu="return false;">
        <p class="content">
          Adam’s Peak is one of the most iconic heritages in Sri Lanka. This conical mountain is located in the
          Sabaragamuwa Province. It is also known as “Samanala Kanda”. This has a history of more than thousand
          years. People of all four main religions in Sri Lanka is truely believe that there are some miracles are
          still happening at the sacred footprint on top of the mountain. Sri Pada is the only mountain in the
          world that receives benefactions and veneration of devotees belonging to different faiths.
        </p>
        <button class="hero-button" onClick="window.location.href='./src/pages/explore.php';">
          Explore More
        </button>
      </div>
    </div>
  </div>
  <!-------------------- Hero Section End -------------------->






  <!-------------------- Intro Section -------------------->

  <div class="intro-section-container">
    <div class="intro-top-left">
      <h3><span>Adam's Peak</span><br>is the,</h3>
      <p>Only mountain in the world that receives benefactions and veneration of devotees belonging to different faiths.
        This is 2,243 m tall. It is well known for the Sri Pada, i.e., "sacred footprint", a 1.8 m rock formation near
        the summit, which in Buddhist tradition is held to be footprint of Buddha. Portuguese Christians believed St
        Thomas and the eunuch of Candace, queen of Ethiopia.</p>
      <button onClick="window.location.href='./src/pages/history.php';">Read More</button>
    </div>

    <div class="intro-top-right">
    </div>

    <div class="intro-bottom-left">
      <p class="intro-coordinates-text">Coordinates</p>
      <h4 class="intro-coordinates">6.8096° N, 80.4994° E</h4>
    </div>

    <div class="intro-bottom-right">
      <h3><span>6 trails,</span> One Sacred location</h3>
      <p>There are several routes that can be taken to reach Sri Pada, also known as Adam's Peak, in Sri Lanka. The most popular route is the Hatton-Nallathanni route, which starts in the town of Hatton and passes through the villages of Nallathanni and Kuruwita before reaching the mountain. This route is well-marked and relatively easy to follow, and it takes about 5-7 hours to reach the summit depending on the pace of the hike.

      </p>
      <button onClick="window.location.href='./src/pages/routes.php';">View Routes</button>
    </div>
  </div>


  <!-------------------- Intro Section End -------------------->

  <!-------------------- Quote Section -------------------->

  <div class="quote-section-container">
    <h3>“The temple is a point of intersection between heaven and earth. In this sacred place, holy work will be
      performed through selfless service and love. The temple reminds of all that is good and beautiful in the world.”
    </h3>
    <p>David A. Bednar </p>
  </div>

  <!-------------------- Quote Section End -------------------->

  <!-------------------- Gallery Section -------------------->

  <div class="container-card">
    <div class="card">
        <div class="card-content">
            <h3>See the real beauty</h3>
            <p>View all the beautiful photos of “Sri Padaya”</p>
            <button onClick="window.location.href='./src/pages/gallery.php';">View Gallery</button>
        </div>
    </div>
</div>

  <!-------------------- Gallery Section End -------------------->

  <!-------------------- Forum Section -------------------->
  <?php include './src/components/forum/forum.php'?>
  <!-------------------- Forum Section End -------------------->

  <!-------------------- Footer Section -------------------->
  <?php include './src/footer/footer.php';?> 
  <!-------------------- Footer Section End -------------------->

  </body>

</html>