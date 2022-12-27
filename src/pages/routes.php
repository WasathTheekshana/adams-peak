<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Routes</title>
    <link rel="stylesheet" href="routes.css">
    <script src="routes.js"></script>
    <link rel="stylesheet" href="./routes-css/routes.css">
</head>
<body>
    <div class="routes-heading-section">
        <div class="routes-nav">
            <?php include './../navBar/navBar.php' ?>
        </div>
        <div class="heading-routes">
            <h1> <span>6 trails,</span> <br> One Sacred location. </h1>

        </div>
    </div>

    
    <div class="routes-tab-header">
        <div id="hattonButton" class="tab-header" onclick="buttonClick(1)"> <img src="../.././public/green.svg" alt=""> Hatton, Nallathanni </div>
        <div id="rathnapuraButton" class="tab-header" onclick="buttonClick(2)"> <img src="../.././public/yellow.svg" alt=""> Rathnapura, Palabaddala </div>
        <div id="kuruvitaButton" class="tab-header" onclick="buttonClick(3)"> <img src="../.././public/green.svg" alt=""> Kuruvita, Eraththa </div>
        <div id="deraniyagalaButton" class="tab-header" onclick="buttonClick(4)"> <img src="../.././public/red.svg" alt=""> Deraniyagala, Udamaliboda </div>
        <div id="rajamaleButton" class="tab-header" onclick="buttonClick(5)"> <img src="../.././public/green.svg" alt=""> Rajamale </div>
        <div id="hapugastennaButton" class="tab-header" onclick="buttonClick(6)"> <img src="../.././public/red.svg" alt=""> Hapugastenna </div>
    </div>
    
    <div class="routes-card-section">
        

       <div class="main">

       
        <div class="routes-card">
            <div class="routes-card-heading">
                <h2>Nearest town</h2>
                <h4 id="town">Nallathanniya</h4>
            </div>

            <div class="routes-card-elements">
                <div> <img id="diffDot" src="../.././public/green.svg" alt=""> <span id="difficulty">Moderate</span> </div>
                <div> Elevation Gain: <span id="gain">1000m</span> </div>
                <div> Distance: <span id="distance">5Km</span> </div>
            </div>

            <div class="routes-card-image"><img id="routeImg" src="../.././public/Rectangle1.jpg" alt=""></div>

            <div class="routes-card-content">
                <p id="routeDes">Hatton - Nallathanni route is the most famous and the shortest route among the 6 main routes. This is the route which starts from the highest elevation. Roads of this route is well paved as this is the most popular route among both local and foreign devotees. This route has stairs all the way. Drinking water and restpoints are also available there in this route. Also comparatively this route has more facilities than other routes. On this route you’ll be passing “Japanese Temple”, “Makara Thorana”, “Gangul Thenna”, “Seetha Gangula River” and the “Seetha Gangula Rest point”.</p>
            </div>

        </div>

    </div>

    </div>

    </div>


    <?php include '../footer/footer.php' ?>
</body>
</html>