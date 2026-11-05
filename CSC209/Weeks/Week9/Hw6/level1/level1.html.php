<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level 1</title>
    <style>
        img {
            /* make it so images don't take up the whole page */
            max-width: 60%;
        }
    </style>
</head>
<body>
    <h1>Photos</h1>
    <!-- make a container for the images -->
    <div id="photo-container"></div>

    <!-- use php to get a list of the images -->
    <?php
        $images = glob("./images/*.jpeg");
    ?>

    <!-- use javascript to loop through and add images to container -->
    <script type="module">
        // import function that displays images from an array in a specified container
        import { displayImages } from './js/script.js';

        // make a javascript array from the php array
        let images = <?php echo json_encode($images); ?>;

        // define the container
        let photoContainer = document.getElementById("photo-container");

        // call the function that displays the images
        displayImages(photoContainer, images);
    </script>

</body>
</html>