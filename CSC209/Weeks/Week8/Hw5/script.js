let FOLDERS = ["cats", "flowers"];

function showFolder(selected) {
    for (let folder of FOLDERS) {
        document.getElementById(folder).style.display = "none";
    }

    document.getElementById(selected).style.display = "block";
}