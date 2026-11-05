<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level 3</title>
    <style>
        img {
            /* make it so images don't take up the whole page */
            max-width: 60%;
        }
    </style>
</head>
<body>
    <h1>Photos</h1>

    <!-- get array of image paths -->
    <?php
        $images = glob("./images/*.jpeg");
    ?>

    <!-- dropdown menu -->
    <select id="imageSelect">
        <!-- go through each image -->
        <?php foreach ($images as $image): ?>

            <!-- add it as an option -->
            <option value="<?= $image ?>">

                <!-- extract the basename so it can be displayed as an option -->
                <?= basename($image) ?>

            </option>
        <?php endforeach; ?>
    </select>
    <br><br>

    <!-- display images -->
    <?php foreach ($images as $index => $image): ?>
        <img
            src="<?= $image ?>"
            <?= $index !== 0 ? 'hidden' : '' ?>
        >
    <?php endforeach; ?>
    <script src="./js/script.js"></script>
</body>
</html>