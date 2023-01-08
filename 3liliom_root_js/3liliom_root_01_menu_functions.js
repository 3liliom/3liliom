var the_3liliom_date = "2023.01.06";

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("toggleNavbar");
    if (x.className.indexOf("show") == -1) {
        x.className += " b6-show";
    } else {
        x.className = x.className.replace(" show", "");
    }
}

// Change style of navbar on scroll
window.onscroll = function () {
    changeTopNavbarStyle()
};

function changeTopNavbarStyle() {
    var navbar = document.getElementById("topNavbar");
    if (document.body.scrollTop > 96 || document.documentElement.scrollTop > 96) {
        navbar.className = "navbar-top" + " b6-card" + " b6-animate-top" + " b6-white";
    } else {
        navbar.className = navbar.className.replace(" b6-card b6-animate-top b6-white", "");
    }
}
