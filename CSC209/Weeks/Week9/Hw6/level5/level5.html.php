<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level 5</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <!-- SLIDE LOGIC -->
    <?php
        // get images
        $images = glob("./images/*.jpeg");
        // get the total of images
        $total = count($images);

        // set slide (defaults to first)
        $slide = 1;
        // use GET to pass data on via URL
        if ($_GET) {
            $slide = (int)$_GET['slide'];
        }

        // ensure that slide number stays within range 
        if ($slide > $total) {
            $slide = 1; // if user reaches end it defaults to beginning
        }
        if ($slide < 1) {
            $slide = $total; // if user tries to view previous but is already on the first slide, it goes to the last one
        }

        // set image to corresponding slide
        $currentImage = $images[$slide - 1];
    ?>

    <!-- SLIDESHOW CONTAINER -->
    <div class="slideshow-container">

        <!-- current image -->
        <div class="mySlides fade" style="display: block;">
            <!-- slide number -->
            <div class="numbertext">
                <p> <?= $slide ?> / <?= $total ?> </p>
            </div>

            <!-- show image -->
            <img src="<?= $currentImage ?>" style="width:100%">
        </div>

        <!-- previous and next buttons -->
        <a class="prev" href="?slide=<?= $slide - 1 ?>"> < </a>
        <a class="next" href="?slide=<?= $slide + 1 ?>"> > </a>

    </div>

    <!-- slide indicators (tiny dots at the bottom) -->
    <div style="text-align:center">

        <!-- for loop that makes a dot for every photo -->

    <?php
        include './functions.php';
        makeDots($images, $slide);
    ?>
    </div>

</body>
</html>