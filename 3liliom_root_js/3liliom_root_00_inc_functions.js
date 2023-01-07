document.write("Copyright &copy; <script> document.write(new Date().getFullYear())</script> All rights reserved.");

document.getElementById("home").innerHTML += "Step 1: <hr />";
getText("3liliom_root_html/3liliom_root_index_header.html", "home");

document.getElementById("bottom").innerHTML = "Step 2: <hr />";
getText("3liliom_root_html/3liliom_root_index_footer.html", "bottom");

async function getText(file, id) {
    let myObject = await fetch(file);
    let myText = await myObject.text();
    document.getElementById(id).innerHTML = myText;
}
