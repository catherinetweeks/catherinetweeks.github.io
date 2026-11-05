<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catherine's Portfolio</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <h1>Catherine's Sketchbook</h1>
    <!-- SLIDE LOGIC -->
    <?php
        include "functions.php";
        // get folder names
        $folders = array_map('basename', glob("./sketchbookImages/*", GLOB_ONLYDIR));

        // get selected folder (defaults to first folder)
        $folder = $_GET['folder'] ?? $folders[0];

        // get all images from selected folder
        $images = glob("./sketchbookImages/" . $folder . "/*.jpeg");

        // get total number of images in current folder
        $total = count($images);

        // get total number of spreads needed
        $totalSpreads = ceil($total / 2);

        // set slide (defaults to first)
        $slide = isset($_GET['slide']) ? (int)$_GET['slide'] : 1;

        // make sure slides stay in range
        if ($totalSpreads > 0) {
            if ($slide > $totalSpreads) {
                $slide = 1;
            }
            if ($slide < 1) {
                $slide = $totalSpreads;
            }
        } else {
            $slide = 1;
        }

        // get two images for current spread
        $image1 = $images[($slide - 1) * 2] ?? null;
        $image2 = $images[(($slide - 1) * 2) + 1] ?? null;
    ?>

    <!-- SELECT FOLDER -->
    <div id="selection">
        <form method="GET">
            <label for="folder">Select a Sketchbook: </label>
            <select name="folder" id="folder" onchange="this.form.submit()">
                <?php foreach ($folders as $f): ?>
                    <option value="<?= $f ?>"
                        <?= ($folder == $f) ? 'selected' : '' ?>>
                        <?= $f ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </form>
    </div>

    <!-- SLIDESHOW CONTAINER -->
    <div class="slideshow-container">

        <!-- LEFT IMAGE -->
        <div class="mySlides fade">
            <?php if ($image1): ?>
                <img src="<?= $image1 ?>" style="width:100%">
            <?php endif; ?>
        </div>

        <!-- RIGHT IMAGE -->
        <div class="mySlides fade">
            <?php if ($image2): ?>
                <img src="<?= $image2 ?>" style="width:100%">
            <?php endif; ?>
        </div>

        <!-- previous and next buttons -->
        <a class="prev" href="?folder=<?= $folder ?>&slide=<?= $slide - 1 ?>"> &lt; </a>
        <a class="next" href="?folder=<?= $folder ?>&slide=<?= $slide + 1 ?>"> &gt; </a>

    </div>

    <!-- slide indicators (tiny dots at the bottom) -->
    <div style="text-align:center">

    <!-- for loop that makes a dot for every photo -->
    <?php
        makeDots($images, $slide, $folder);
    ?>
    </div>

</body>
</html>