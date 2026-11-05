<!-- using echo -->

<!-- <link rel="stylesheet" href="./style.css"> -->
<!-- <?php

    // $files = glob('./img/*.jpeg');

    // foreach ($files as $file) {
    //     echo "<img src=$file><br>";
    // }

?> -->


<!-- using looping and dom -->
<link rel="stylesheet" href="./style.css">

<form method="GET">
    <button type="submit" name="folder" value="cats">Cats</button>
    <button type="submit" name="folder" value="flowers">Flowers</button>
</form>

<?php
    $folder = $_GET['folder'] ?? 'cats';

    $files = glob("./img/$folder/*.jpeg");

    foreach ($files as $file):
    ?>
    <img src="<?= $file ?>">
    <br>
<?php endforeach; ?>
