export function displayImages(photoContainer, images) {
    for (let i = 0; i < images.length; i++) {
        let img = document.createElement("img");
        img.src = images[i];
        photoContainer.appendChild(img);
        photoContainer.appendChild(document.createElement("br"));
    }
}