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
        <div class="tab-header" id="q" onclick="openCard(event, '1')"> <img src="../.././public/green.svg" alt=""> Hatton, Nallathanni </div>
        <div class="tab-header" onclick="openCard(event, '2')"> <img src="../.././public/yellow.svg" alt=""> Rathnapura, Palabaddala </div>
        <div class="tab-header" onclick="openCard(event, '3')"> <img src="../.././public/green.svg" alt=""> Kuruvita, Eraththa </div>
        <div class="tab-header" onclick="openCard(event, '4')"> <img src="../.././public/red.svg" alt=""> Deraniyagala, Udamaliboda </div>
        <div class="tab-header" onclick="openCard(event, '5')"> <img src="../.././public/green.svg" alt=""> Rajamale </div>
        <div class="tab-header" onclick="openCard(event, '6')"> <img src="../.././public/red.svg" alt=""> Hapugastenna </div>
    </div>
    
    <div class="routes-card-section">
        

       <div class="main">

       
        <div class="routes-card" id="1">
            <div class="routes-card-heading">
                <h2>Nearest town</h2>
                <h4>Nallathanniya</h4>
            </div>

            <div class="routes-card-elements">
                <div> <img src="../.././public/green.svg" alt=""> Moderate </div>
                <div> Elevation Gain: <span>1000m</span> </div>
                <div> Distance: <span>5Km</span> </div>
            </div>

            <div class="routes-card-image"><img src="../.././public/Rectangle 48.jpg" alt=""></div>

            <div class="routes-card-content">
                <p>Hatton - Nallathanni route is the most famous and the shortest route among the 6 main routes. This is the route which starts from the highest elevation. Roads of this route is well paved as this is the most popular route among both local and foreign devotees. This route has stairs all the way. Drinking water and restpoints are also available there in this route. Also comparatively this route has more facilities than other routes. On this route you’ll be passing “Japanese Temple”, “Makara Thorana”, “Gangul Thenna”, “Seetha Gangula River” and the “Seetha Gangula Rest point”.</p>
            </div>

        </div>

        <div class="routes-card" id="2">
            <div class="routes-card-heading">
                <h2>Nearest town</h2>
                <h4>Siripagama</h4>
            </div>

            <div class="routes-card-elements">
                <div> <img src="../.././public/yellow.svg" alt=""> Strenuous </div>
                <div> Elevation Gain: <span>2000m</span> </div>
                <div> Distance: <span>8.5Km</span> </div>
            </div>

            <div class="routes-card-image"><img src="../.././public/Rectangle 48.jpg" alt=""></div>

            <div class="routes-card-content">
                <p>This route is more eco-friendly and gives a greenery look than the most popular Hatton - Nallathanni route. Evergreen rainforest covers this route at the beginning and gradually transforms to a dry zone forest towards the trail end. Sri Lanka's inherent butterflies and birds are also there in this route. Part of this route has well built stairs. There are safe rest points each at 1.5km in this route. These rest points are suitable for an overnight stay if required. On this route you’ll be passing “Haramitipana Ambalama” the place which will connect the Kuruwita - Erathna route to this route. This pllace is also known as “Galwangediya”. Then you’ll reach the last restpoint before the final climb which is known as “Adiyamalthenna Ambalama”.</p>
            </div>

        </div>

        <div class="routes-card" id="3">
            <div class="routes-card-heading">
                <h2>Nearest town</h2>
                <h4>Adevikanda</h4>
            </div>

            <div class="routes-card-elements">
                <div> <img src="../.././public/green.svg" alt=""> Moderate </div>
                <div> Elevation Gain: <span>1850m</span> </div>
                <div> Distance: <span>12Km</span> </div>
            </div>

            <div class="routes-card-image"><img src="../.././public/Rectangle 48.jpg" alt=""></div>

            <div class="routes-card-content">
                <p>This route is the third most popular route. This route is quite hard to climb. This also has a greenery surrounding. Kuruwita - Erathna route connects to the Rathnapura – Palabaddala route 2km before the end.  On this route you’ll be passing “Warnagala Waterfall”, “Seetha Gangula Ambalama”, “Medahinna Temple”, “Indikatupana (Geththampana)” accordingly. Then you’ll reach Haramitipana Ambalama. The rest of the route will be same as Rathnapura - Palabaddala route. ”Adiyathenna Ambalama” the last rest point before the final climb will be the next specific place on this route.</p>
            </div>
        </div>

        <div class="routes-card" id="4">
            <div class="routes-card-heading">
                <h2>Nearest town</h2>
                <h4>Ihala-Maliboda</h4>
            </div>

            <div class="routes-card-elements">
                <div> <img src="../.././public/red.svg" alt=""> Tough </div>
                <div> Elevation Gain: <span>1700m</span> </div>
                <div> Distance: <span>12Km</span> </div>
            </div>

            <div class="routes-card-image"><img src="../.././public/Rectangle 48.jpg" alt=""></div>

            <div class="routes-card-content">
                <p>This route is well paved upto the Udamaliboda tea facory. This route is not that popular. It is one of the toughest routes to reach the mountain top. This route is mostly on a footpath and surrounded with the dense forest. On this route you’ll definitely meet plenty of leeches. Also you’ll pass ”Kuru River”. At last this route will join the Kuruwita - Erathna route.</p>
            </div>
        </div>

        <div class="routes-card" id="5">
            <div class="routes-card-heading">
                <h2>Nearest town</h2>
                <h4>Mulgama</h4>
            </div>

            <div class="routes-card-elements">
                <div> <img src="../.././public/green.svg" alt=""> Moderate </div>
                <div> Elevation Gain: <span>N/A</span> </div>
                <div> Distance: <span>5Km</span> </div>
            </div>

            <div class="routes-card-image"><img src="../.././public/Rectangle 48.jpg" alt=""></div>

            <div class="routes-card-content">
                <p></p>
            </div>
        </div>

        <div class="routes-card" id="6">
            <div class="routes-card-heading">
                <h2>Nearest town</h2>
                <h4>Mukkuwatta</h4>
            </div>

            <div class="routes-card-elements">
                <div> <img src="../.././public/red.svg" alt=""> Tough </div>
                <div> Elevation Gain: <span>N/A</span> </div>
                <div> Distance: <span>~14Km</span> </div>
            </div>

            <div class="routes-card-image"><img src="../.././public/Rectangle 48.jpg" alt=""></div>

            <div class="routes-card-content">
                <p></p>
            </div>
        </div>

    </div>

    </div>

    </div>


    <?php include '../footer/footer.php' ?>
</body>
</html>