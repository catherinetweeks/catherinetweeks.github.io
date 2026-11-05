<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Users</title>
    <link rel="stylesheet" href="styles.css">
    <?php
        $FILENAME = "./users.json";
    ?>
</head>
<body>

    <?php
        $usernamesArray = json_decode(file_get_contents($FILENAME), true);


        function getTable($usernamesArray) {
            echo "<table> <tr> <th>Username</th> <th>Password</th> <th>Times Logged In</th> </tr>";
            foreach ($usernamesArray as $row) 
                { 
                    echo '<tr>';
                    echo '<td>' . $row["username"] . '</td>';
                    echo '<td>' . $row["password"] . '</td>';
                    echo '<td>' . $row["loggedtimes"] . '</td>';
                    echo '</tr>';
                }
            
            echo "</table>";
        }

        getTable($usernamesArray);

    ?>

    <script>

    </script>
</body>
</html>