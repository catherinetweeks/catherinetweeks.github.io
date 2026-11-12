<?php
    // get the basename of the current path 
    function extractFolderName($path) {
        return basename($path);
    }

    // check username and update json (number of times logged in)
    function directUser($users, $username, $password) {
        foreach ($users as $i => $user) {
            if ($user['username'] === $username && $user['password'] === $password) {
                $users[$i]['loggedtimes'] += 1;   // change times logged in
                $matchedUser = $users[$i];       // get user info (makes copy?)

                file_put_contents('users.json', json_encode($users)); // update the times logged in

                if ($user['username'] === 'admin') {
                    header('Location: ./Admin/admin.html.php'); // send admin to the admin page
                } else {
                    header('Location: ./User/' . $username . '/user.html.php');
                }
                exit;
            }
        }
    }

?>