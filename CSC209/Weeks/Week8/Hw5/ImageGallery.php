<?php

class ImageGallery {
    // methods gets all images from each folder and returns array of them
    public function getImages($folder) {
        return glob("./img/$folder/*.jpeg");
    }

}
?>