<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Confirmation</title>
</head>
<body>
<html>
<body>
    <?php
        $username = $_POST["username"];


        $rawJson = file_get_contents("./users.json");
        $jsonArray = json_decode($rawJson);

        if (in_array($username, $jsonArray) === 'true') {
            echo '<script>alert("Username found")</script>';
        }
        
    ?>

    Welcome <?php echo $_POST["username"]; ?><br>
    Your password is: <?php echo $_POST["password"]; ?>

</body>
</html>
</body>
</html>