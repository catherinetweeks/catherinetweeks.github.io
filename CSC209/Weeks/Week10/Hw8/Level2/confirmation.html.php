<?php
// get posted user and pass values
$username = $_POST['username'];
$password = $_POST['password'];
 
// load in json of users
$users = json_decode(file_get_contents('users.json'), true);
 
// look through users and determine if user exists and if password matches
$userFound = false; // defaults to false: boolean that tracks whether user was found with a matching password
foreach ($users as $i => $user) {
    if ($user['username'] === $username && $user['password'] === $password) {
        $userFound = true; 
        $users[$i]['loggedtimes'] += 1;   // change times logged in
        $matchedUser = $users[$i];        // get user (make copy?)
        file_put_contents('users.json', json_encode($users)); // change the original json
        break;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Level 2</title>
    <link rel="stylesheet" href="./style/styles.css">
</head>
<body>
    <div>
        <!-- If user exists and password is correct -->
        <?php if ($userFound): ?>
            <h1>Welcome, <?= htmlspecialchars($matchedUser['username']) ?>!</h1>
            <p>You have logged in <?= (int) $matchedUser['loggedtimes'] ?> times.</p>
        <!-- If user doesn't exist or password is incorrect -->
        <?php else: ?>
            <h1>Login failed</h1>
            <p>The username or password is incorrect.</p>
            <a href="./login.html.php">Try again</a>
        <?php endif; ?>
    </div>
</body>
</html>