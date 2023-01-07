function loadContents() {
    getText("../3liliom_root_html/3liliom_root_index_header.html", "home");
    getText("../3liliom_root_html/3liliom_root_index_footer.html", "bottom");
}

async function getText(file, id) {
    let myObject = await fetch(file);
    let myText = await myObject.text();
    //console.log(myText);
    document.getElementById(id).innerHTML = myText;
}
