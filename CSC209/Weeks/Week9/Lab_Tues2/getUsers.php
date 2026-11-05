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

    <script>
        function sortTable(column) {
            let table = document.getElementById("usersTable");
            let rows = Array.from(table.rows).slice(1);

            rows.sort((a, b) => {
                let x = a.cells[column].innerHTML;
                let y = b.cells[column].innerHTML;

                if (column === 2) {
                    return Number(x) - Number(y);
                }

                // sort text
                if (x < y) {
                    return -1;
                } else if (x > y) {
                    return 1;
                } else {
                    return 0;
                }
            });

            rows.forEach(row => table.appendChild(row)); //moves html instead of making a duplicate
        }
    </script>
</head>
<body>

    <?php
        $usernamesArray = json_decode(file_get_contents($FILENAME), true);


        function getTable($usernamesArray) {
            echo "<table id='usersTable'> 
                    <tr>
                        <th onclick='sortTable(0)'>Username</th>
                        <th onclick='sortTable(1)'>Password</th>
                        <th onclick='sortTable(2)'>Times Logged In</th>
                    </tr>";
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
</body>
</html>