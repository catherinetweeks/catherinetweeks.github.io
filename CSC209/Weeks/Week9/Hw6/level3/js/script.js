const select = document.getElementById("imageSelect");
const images = document.querySelectorAll("img");

// check if a given image matches the selected value
function checkImagePath(image) {
    // check image against selected value
    if (image.getAttribute("src") === select.value) {
        // show the image if it matches
        image.hidden = false;
    } else {
        // hide the image if it doesn't
        image.hidden=true;
    }
}

// loop through all images in an array to see if they match the selected value
function checkAllImagePaths(images) {
    // go through all images
    for (let i=0; i < images.length; i++) {
        // check their paths
        checkImagePath(images[i]);
    }
}

// listen for changes in the dropdown and call function to select image accordingly
select.addEventListener("change", () => checkAllImagePaths(images)); // don't call the function immediatly, this syntax calls the function when the event listener is activated