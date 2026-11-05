<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level 2</title>
    <style>
        img {
            /* make it so images don't take up the whole page */
            max-width: 60%;
        }
    </style>
</head>
<body>
    <h1>Photos</h1>

    <!-- php loop that goes through each image and creates an image div to hold it -->
    <?php
        $images = glob("./images/*.jpeg");

        foreach ($images as $image):
        ?>
        <img src="<?= $image ?>">
        <br>
    <?php endforeach; ?>
</body>
</html>