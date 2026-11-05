<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Where am I?</title>
</head>
<body>
    <h1>Where am I?</h1>
    <?php

    $filepath = realpath("whereami.php");
    echo $filepath;

    $folders = explode("/", $filepath);
    echo "<br>";

    $secondToLast = $folders[count($folders)-2];

    echo "Basename: " . $secondToLast;


    $weekNo = (int) substr($secondToLast, -1);

    echo "<br>";
    echo "Week Number: " . $weekNo;

    ?>
    
</body>
</html>