function buttonClick(no) {
    document.getElementById("hattonButton").style.background = "#FFFFFF";
    document.getElementById("hattonButton").style.color = "#000000";
    document.getElementById("rathnapuraButton").style.background = "#FFFFFF";
    document.getElementById("rathnapuraButton").style.color = "#000000";
    document.getElementById("kuruvitaButton").style.background = "#FFFFFF";
    document.getElementById("kuruvitaButton").style.color = "#000000";
    document.getElementById("deraniyagalaButton").style.background = "#FFFFFF";
    document.getElementById("deraniyagalaButton").style.color = "#000000";
    document.getElementById("rajamaleButton").style.background = "#FFFFFF";
    document.getElementById("rajamaleButton").style.color = "#000000";
    document.getElementById("hapugastennaButton").style.background = "#FFFFFF";
    document.getElementById("hapugastennaButton").style.color = "#000000";

    if (no == 1) {
        document.getElementById("hattonButton").style.background = 'linear-gradient(93.66deg, #000000 -109.29%, rgba(46, 46, 46, 0.56) 298.88%)';
        document.getElementById("hattonButton").style.color = '#FFFFFF';
        document.getElementById("town").innerHTML = "Nallathanniya";
        document.getElementById("diffDot").src = "../.././public/green.svg";
        document.getElementById("difficulty").innerHTML="Moderate";
        document.getElementById("gain").innerHTML = "1000m";
        document.getElementById("distance").innerHTML = "5Km";
        document.getElementById("routeImg").src="../.././public/routes-1.jpg";
        document.getElementById("routeImg").alt="hatton nallathanni trail sri padaya";
        document.getElementById("routeDes").innerHTML = "Hatton - Nallathanni route is the most famous and the shortest route among the 6 main routes. This is the route which starts from the highest elevation. Roads of this route is well paved as this is the most popular route among both local and foreign devotees. This route has stairs all the way. Drinking water and restpoints are also available there in this route. Also comparatively this route has more facilities than other routes. On this route you’ll be passing “Japanese Temple”, “Makara Thorana”, “Gangul Thenna”, “Seetha Gangula River” and the “Seetha Gangula Rest point”.";
    }
    else if (no == 2) {
        document.getElementById("rathnapuraButton").style.background = 'linear-gradient(93.66deg, #000000 -109.29%, rgba(46, 46, 46, 0.56) 298.88%)';
        document.getElementById("rathnapuraButton").style.color = '#FFFFFF';
        document.getElementById("town").innerHTML = "Siripagama";
        document.getElementById("diffDot").src = "../.././public/yellow.svg";
        document.getElementById("difficulty").innerHTML="Strenuous";
        document.getElementById("gain").innerHTML = "2000m";
        document.getElementById("distance").innerHTML = "8.5Km";
        document.getElementById("routeImg").src = "../.././public/routes-2.jpg";
        document.getElementById("routeImg").alt="Rathnapura Palabaddala trail sri padaya";
        document.getElementById("routeDes").innerHTML = "This route is more eco-friendly and gives a greenery look than the most popular Hatton - Nallathanni route. Evergreen rainforest covers this route at the beginning and gradually transforms to a dry zone forest towards the trail end. Sri Lanka's inherent butterflies and birds are also there in this route. Part of this route has well built stairs. There are safe rest points each at 1.5km in this route. These rest points are suitable for an overnight stay if required. On this route you’ll be passing “Haramitipana Ambalama” the place which will connect the Kuruwita - Erathna route to this route. This pllace is also known as “Galwangediya”. Then you’ll reach the last restpoint before the final climb which is known as “Adiyamalthenna Ambalama”.";
    }
    else if (no == 3) {
        document.getElementById("kuruvitaButton").style.background = 'linear-gradient(93.66deg, #000000 -109.29%, rgba(46, 46, 46, 0.56) 298.88%)';
        document.getElementById("kuruvitaButton").style.color = '#FFFFFF';
        document.getElementById("town").innerHTML = "Adevikanda";
        document.getElementById("diffDot").src = "../.././public/green.svg";
        document.getElementById("difficulty").innerHTML="Moderate";
        document.getElementById("gain").innerHTML = "1850m";
        document.getElementById("distance").innerHTML = "12Km";
        document.getElementById("routeImg").src = "../.././public/routes-3.jpg";
        document.getElementById("routeImg").alt = "Kuruvita Eraththa trail sri padaya";
        document.getElementById("routeDes").innerHTML = "This route is the third most popular route. This route is quite hard to climb. This also has a greenery surrounding. Kuruwita - Erathna route connects to the Rathnapura – Palabaddala route 2km before the end.  On this route you’ll be passing “Warnagala Waterfall”, “Seetha Gangula Ambalama”, “Medahinna Temple”, “Indikatupana (Geththampana)” accordingly. Then you’ll reach Haramitipana Ambalama. The rest of the route will be same as Rathnapura - Palabaddala route. ”Adiyathenna Ambalama” the last rest point before the final climb will be the next specific place on this route.";
    }
    else if (no == 4) {
        document.getElementById("deraniyagalaButton").style.background = 'linear-gradient(93.66deg, #000000 -109.29%, rgba(46, 46, 46, 0.56) 298.88%)';
        document.getElementById("deraniyagalaButton").style.color = '#FFFFFF';
        document.getElementById("town").innerHTML = "Ihala-Maliboda";
        document.getElementById("diffDot").src = "../.././public/red.svg";
        document.getElementById("difficulty").innerHTML="Tough";
        document.getElementById("gain").innerHTML = "1700m";
        document.getElementById("distance").innerHTML = "12Km";
        document.getElementById("routeImg").src = "../.././public/routes-4.jpg";
        document.getElementById("routeImg").alt = "Deraniyagala Udamaliboda trail sri padaya";
        document.getElementById("routeDes").innerHTML = "This route is well paved upto the Udamaliboda tea facory. This route is not that popular. It is one of the toughest routes to reach the mountain top. This route is mostly on a footpath and surrounded with the dense forest. On this route you’ll definitely meet plenty of leeches. Also you’ll pass ”Kuru River”. At last this route will join the Kuruwita - Erathna route.";
    }
    else if (no == 5) {
        document.getElementById("rajamaleButton").style.background = 'linear-gradient(93.66deg, #000000 -109.29%, rgba(46, 46, 46, 0.56) 298.88%)';
        document.getElementById("rajamaleButton").style.color = '#FFFFFF';
        document.getElementById("town").innerHTML = "Mulgama";
        document.getElementById("diffDot").src = "../.././public/green.svg";
        document.getElementById("difficulty").innerHTML="Moderate";
        document.getElementById("gain").innerHTML = "N/A";
        document.getElementById("distance").innerHTML = "5Km";
        document.getElementById("routeImg").src = "../.././public/routes-5.jpg";
        document.getElementById("routeImg").alt = "Rajamale Sandagalathenna trail sri padaya";
        document.getElementById("routeDes").innerHTML = "";
    }
    else if (no == 6) {
        document.getElementById("hapugastennaButton").style.background = 'linear-gradient(93.66deg, #000000 -109.29%, rgba(46, 46, 46, 0.56) 298.88%)';
        document.getElementById("hapugastennaButton").style.color = '#FFFFFF';
        document.getElementById("town").innerHTML = "Mukkuwatta";
        document.getElementById("diffDot").src = "../.././public/red.svg";
        document.getElementById("difficulty").innerHTML="Tough";
        document.getElementById("gain").innerHTML = "N/A";
        document.getElementById("distance").innerHTML = "14Km";
        document.getElementById("routeImg").src = "../.././public/routes-6.jpg";
        document.getElementById("routeImg").alt = "Hapugastenna Dehena Kanda trail sri padaya";
        document.getElementById("routeDes").innerHTML = "";
    }
}