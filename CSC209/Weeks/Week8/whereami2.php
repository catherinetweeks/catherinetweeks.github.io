<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Where am I?</title>
    <?php
        include "extractFolderNumber.php";
    ?>
</head>
<body>
    <h1>Where am I? (2)</h1>
    <?php

    $filepath = realpath("whereami.php");
    $weekNo = extractFolderNumber($filepath);
    echo "This is work for week " . $weekNo;

    ?>
    
</body>
</html>