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

// clears the content of the given element 
function clearElement(el) {
    while(el.hasChildNodes()) {
        el.removeChild(el.lastChild);
    }
}

// enables submit if all input is properly formatted
function checkSpans() {
    var subscribe = document.getElementById("newsletter-submit");
    var spans = document.getElementsByClassName("input-warning");
    var clearedSpans = 0;

    for (var i = 0; i < spans.length; i++) {
        if (!spans[i].hasChildNodes())
            clearedSpans++;
    }

    if (clearedSpans == spans.length)
        subscribe.disabled = false;
    else
        subscribe.disabled = true;

}

// validates the input in the newsletter form
function validateInput(e) {
    var input = e.target;
    var inputID = input.getAttribute("id");
    console.log("the input is " + input + " and the id is " + inputID);

    var spans = document.getElementsByClassName("input-warning");
    var warnings = ["Enter only letters", "Enter only letters", "Enter a vaild email"];
    var myRe = [/^[A-Za-z]+$/, /^[A-Za-z]+$/, /[A-Za-z0-9]+@[A-Za-z]+\.[A-Za-z]+(\.[A-Za-z])*/];

    console.log("second check for id: " + inputID);
    // checks first name
    if (inputID == "fname") {
        console.log("im checking first name");
        clearElement(spans[0]);

        if (!input.value.match(myRe[0])) {
            var warningText = document.createTextNode(warnings[0]);
            spans[0].appendChild(warningText);
        }

        checkSpans();
    }
    // checks last name
    else if (inputID == "lname") {
        console.log("im checking last name");
        clearElement(spans[1]);

        if (!input.value.match(myRe[1])) {
            var warningText = document.createTextNode(warnings[1]);
            spans[1].appendChild(warningText);
        }

        checkSpans();
    }
    // checks email
    else if (inputID == "email") {
        console.log("im checking email");
        clearElement(spans[2]);

        if (!input.value.match(myRe[2])) {
            var warningText = document.createTextNode(warnings[2]);
            spans[2].appendChild(warningText);
        }

        checkSpans();
    }
}

// initialization
function init() {
    var bars = document.getElementById("bars");
    var x = document.getElementById("x");

    bars.addEventListener("click", showMobileNav, false);
    x.addEventListener("click", closeMobileNav, false);


    var first = document.getElementById("fname");
    var last = document.getElementById("lname");
    var email = document.getElementById("email");
    // var subscribe = document.getElementById("newsletter-submit");

    first.addEventListener("blur", validateInput, false);
    last.addEventListener("blur", validateInput, false);
    email.addEventListener("blur", validateInput, false);
    // subscribe.addEventListener("click", validateAllInput, false);
}

// ...
window.addEventListener("load", init, false);