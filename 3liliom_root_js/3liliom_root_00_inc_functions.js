document.write("Copyright &copy; <script> document.write(new Date().getFullYear())</script> All rights reserved.");

getText("3liliom_root_html/3liliom_root_index_head.html", "index_head");
getText("3liliom_root_html/3liliom_root_index_header.html", "home");
getText("3liliom_root_html/3liliom_root_index_footer.html", "bottom");

async function getText(file, id) {
    let myObject = await fetch(file);
    let myText = await myObject.text();
    document.getElementById(id).innerHTML = myText;
}
