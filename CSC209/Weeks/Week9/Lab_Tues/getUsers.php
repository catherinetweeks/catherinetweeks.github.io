<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Users</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 2px;
            text-align: center;
        }

        tr:nth-child(even) {
            background-color: rgb(241, 243, 250);
        }
    </style>
</head>
<body>

    <!-- Part 1 -->
    <?php
        $json = file_get_contents("./users.json");
        $usernamesArray = json_decode($json, true);
        print_r($usernamesArray);
    ?>

    <!-- Part 2 -->

    <?php 
        function getTable($usernamesArray) {
            echo "<table>";
            echo "<tr>";
            echo "<th>Username</th>";
            echo "<th>Password</th>";
            echo "<th>Times Logged In</th>";
            echo "</tr>";
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