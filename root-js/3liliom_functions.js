var the_3liliom_date = "2023.01.06";

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("b6-show") == -1) {
        x.className += " b6-show";
    } else {
        x.className = x.className.replace(" b6-show", "");
    }
}
