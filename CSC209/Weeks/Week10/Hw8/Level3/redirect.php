<?php
    include "./functions.php";
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $users = json_decode(file_get_contents('users.json'), true);

    // check user and password
    directUser($users, $username, $password);

    // sends right back to login if the info is wrong
    header('Location: ./login.html.php');
    exit;
?>