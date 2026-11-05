<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level 7</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <!-- SLIDE LOGIC -->
    <?php
    // get folder names
    $folders = array_map('basename', glob("./images/*", GLOB_ONLYDIR));

    // get selected folder (defaults to first folder)
    $folder = $_GET['folder'] ?? $folders[0];

    // get all images from selected folder
    $images = glob("./images/" . $folder . "/*.jpeg");

    // get total number of images in current folder
    $total = count($images);

    // set slide (defaults to first)
    $slide = isset($_GET['slide']) ? (int)$_GET['slide'] : 1;

    // make sure slides stay in range
    if ($total > 0) {
        if ($slide > $total) {
            $slide = 1;
        }

        if ($slide < 1) {
            $slide = $total;
        }

        // set current image
        $currentImage = $images[$slide - 1];
    }
    ?>

    <!-- SELECT FOLDER -->
    <div id="selection">
        <form method="GET">
            <label for="folder">Select a folder:</label>
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
        <a class="prev" href="?folder=<?= $folder ?>&slide=<?= $slide - 1 ?>"> < </a>
        <a class="next" href="?folder=<?= $folder ?>&slide=<?= $slide + 1 ?>"> > </a>

    </div>

    <!-- set the caption -->
    <div id="caption">
        <?php
            include "functions.php";
            echo getCaption($images, $slide);
        ?>
        
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