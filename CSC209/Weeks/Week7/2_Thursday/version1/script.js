const imageArr = ["./img/cats.jpeg", "./img/finney.jpeg", "./img/moey.jpeg"];
const photoCont = document.getElementById("photo-container")

function displayImages(arr) {
    for (const imgage of arr) {
        const newElem = document.createElement("img");
        newElem.src = imgage;
        photoCont.appendChild(newElem);
    }
}

displayImages(imageArr);