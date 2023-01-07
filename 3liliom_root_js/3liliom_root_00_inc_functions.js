document.write("Copyright &copy; <script> document.write(new Date().getFullYear())</script> All rights reserved.");

let file = "3liliom_root_html/3liliom_root_index_header.html";
fetch(file)
.then(x => document.getElementById("home").innerHTML = x.text() + "<hr />")
.then(y => document.getElementById("home").innerHTML += y);

document.getElementById("home").innerHTML += "Step 1";

file = "3liliom_root_html/3liliom_root_index_footer.html";
fetch(file)
.then(x => x.text())
.then(y => document.getElementById("bottom").innerHTML = y);

document.getElementById("bottom").innerHTML += "Step 2";