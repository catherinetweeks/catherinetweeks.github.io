<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./style/styles.css">
</head>
<body>
    <div class="form-container">
        <form action="./redirect.php" method="post">
            <h1>Log in</h1>
            <p class="hint">Enter your username and password.</p>
    
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
    
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
    
            <button type="submit">Log in</button>
        </form>
    </div>
</body>
</html>