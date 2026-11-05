<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level 4</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <!-- Slideshow container -->
    <div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <?php
        $images = glob("./images/*.jpeg");

        foreach ($images as $index => $image):
        ?>
            <div class="mySlides fade">
            <div class="numbertext"> <?= $index + 1 ?> / <?=count($images)?></div>
            <img src="<?= $image ?>" style="width:100%">
        </div>
    <?php endforeach; ?>

    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <?php
            foreach ($images as $index => $image):
            ?>
                <span class="dot" onclick="currentSlide(<?= $index + 1 ?>)"></span>
        <?php endforeach; ?>
    </div>
    <script src="./js/script.js"></script>
</body>
</html>