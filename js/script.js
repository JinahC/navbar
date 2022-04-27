// displays the mobile navigation when you click on the hamburger menu
function showMobileNav() {
    var navDiv = document.getElementById("mobile-nav");
    var headers = document.getElementsByTagName("header");

    navDiv.style.display = "block";
    for (var i = 0; i < headers.length; i++)
        headers[i].style.display = "none";
    document.body.style.overflow = "hidden";
}

// closes the mobile navigation when you click on the "x" or one of the links
function closeMobileNav() {
    var navDiv = document.getElementById("mobile-nav");
    var headers = document.getElementsByTagName("header");

    navDiv.style.display = "none";
    for (var i = 0; i < headers.length; i++)
        headers[i].style.display = "block";
    document.body.style.overflow = "initial";
}

// initialization
function init() {
    var bars = document.getElementById("bars");
    var x = document.getElementById("x");

    bars.addEventListener("click", showMobileNav, false);
    x.addEventListener("click", closeMobileNav, false);
}

// ...
window.addEventListener("load", init, false);