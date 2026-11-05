<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image gallery</title>
    <link rel="stylesheet" href="./style.css">
    <?php
        include "ImageGallery.php";
        $FOLDERS = ["cats", "flowers"];
        $IMAGES = [];

    ?>
</head>

<body>
    <?php
        // start new image gallery
        $gallery = new ImageGallery();
    ?>

    <!-- buttons -->
    <?php foreach ($FOLDERS as $folder): ?>
        <button onclick="showFolder('<?= $folder ?>')">
            <?= ucfirst($folder) ?>
        </button>
    <?php endforeach; ?>

    <!-- image containers -->
    <?php foreach ($FOLDERS as $folder): ?>
        <div id="<?= $folder ?>" style="display: <?= $folder == "cats" ? "block" : "none" ?>;">
            <?php foreach ($gallery->getImages($folder) as $file): ?>
                <img src="<?= $file ?>">
                <br>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>

    <script src="./script.js"></script>
</body>
</html>