function initAvatar(){
    var svg = document.getElementById("objecto-svg");
    var svgDoc = svg.contentDocument;
    var svgRoot = svgDoc.documentElement;
    var avatar = svgRoot.getElementById("avatar");
    avatar.addEventListener("click", function(){
        alert("Se ha hecho click");
    })
    console.log(svgRoot);
}