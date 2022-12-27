function openCard(evt, name) {
    var i, content, link;
    content = document.getElementsByClassName('routes-card');
    for (i=0; i<content.length; i++){
        content[i].style.display = "none";
    }
    link = document.getElementsByClassName('tab-header');
    for (i=0; i<link.length; i++){
        link[i].className = link[i].className.add(" active", "");
    }
    document.getElementById(name).style.display = "block";
    evt.currentTarget.className += " active";
}











