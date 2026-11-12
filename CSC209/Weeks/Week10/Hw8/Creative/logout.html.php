<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link rel="stylesheet" href="./style/styles.css">
</head>
<body>
    <?php
        $username = $_POST['username'] ?? '';
        $minutes  = (int) ($_POST['minutes'] ?? 0);

        $users = json_decode(file_get_contents('users.json'), true);

        foreach ($users as $i => $user) {
            if ($user['username'] === $username) {
                $users[$i]['minutes'] = ($user['minutes'] ?? 0) + $minutes; // adds to a running total
                file_put_contents('users.json', json_encode($users));
                break;
            }
        }
    ?>

    <h1>You have been logged out.</h1>
    <p>You were logged in for <?= $minutes ?> minutes.</p>
    <a href="login.html.php">Log in again</a>

</body>
</html>