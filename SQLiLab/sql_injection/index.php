<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SQL Injection Challenge</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>SQL Injection Challenge</h1>
    </header>
    <div class="container">
        <form action="login.php" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <input type="submit" value="Login">
        </form>
    </div>
    <footer>
        <p>CTF Challenge - Good luck!</p>
    </footer>
</body>
</html>
