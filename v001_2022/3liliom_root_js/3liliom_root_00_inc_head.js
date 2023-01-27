// read&write to 3liliom.hu/index.html head

getText("3liliom_root_html/3liliom_root_index_head.html");

async function getText(file) {
    let myObject = await fetch(file);
    let myText = await myObject.text();
    //console.log(myText);
    document.getElementsByTagName("head")[0].innerHTML = myText;
}
