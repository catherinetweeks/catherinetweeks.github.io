<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link rel="stylesheet" href="../../style/styles.css">
</head>
<body>
    <?php
        include "../../functions.php";
        $users = json_decode(file_get_contents('../../users.json'), true);
        $currentDir = __DIR__;
        $username = extractFolderName($currentDir);

        $loggedtimes = 0;
        foreach ($users as $user) {
            if ($user['username'] === $username) {
                $loggedtimes = $user['loggedtimes'];
            }
        }
    ?>

    <h1>Welcome, <?= htmlspecialchars($username) ?>!</h1>
    <p>You have logged in <?= (int) $loggedtimes ?> times.</p>


    <script>
        const loginTime = Date.now(); // get the time when the page loads (in miliseconds)

        function timeLoggedIn() {
            return Math.floor((Date.now() - loginTime) / 60000); // return minutes logged in
        }
    </script>

    <form action="../../logout.html.php" method="post"
      onsubmit="document.getElementById('minutes').value = timeLoggedIn();"> <!-- call the time logged in function -->
        
        <input type="hidden" name="username" value="<?= htmlspecialchars($username) ?>"> 
        <!-- hide the minutes logged in so it's being computed in JS but not shown -->
        <input type="hidden" name="minutes" id="minutes">
        <button type="submit">Log out</button>
    </form>

</body>
</html>