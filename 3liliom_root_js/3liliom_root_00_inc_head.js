// read&write to 3liliom.hu/index.html head

console.log("head");

getText("3liliom_root_html/3liliom_root_index_head.html");

async function getText(file) {
    let myObject = await fetch(file);
    let myText = await myObject.text();
    document.write(myText);
    console.log(myText);
}
