<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../style/styles.css">
    <?php
        $FILENAME = "../users.json";
    ?>

    <script>
        function sortTable(column) {
            let table = document.getElementById("usersTable");
            let rows = Array.from(table.rows).slice(1);

            // compare rows and return value according to which one is smaller
            function compareRows(a, b) {
                let x = a.cells[column].innerHTML;
                let y = b.cells[column].innerHTML;

                if (column === 2) {
                    return Number(x) - Number(y);
                }

                if (x < y) {
                    return -1;
                } else if (x > y) {
                    return 1;
                } else {
                    return 0;
                }
            }

            // pass the function by name (no parentheses!)
            rows.sort(compareRows);

            // put the sorted rows back into the table
            for (let i = 0; i < rows.length; i++) {
                table.appendChild(rows[i]);
            }
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