<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simule un mot de passe par défaut pour tous les utilisateurs
    if ($password == 'defaultpassword') {
        echo "<h1>Welcome, $username!</h1>";
        echo "<p>Congratulations! You bypassed the authentication using a default password.</p>";
    } else {
        echo "<h1>Login failed</h1>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Default Password</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Login - Default Password</h1>
    <form method="POST" action="login2.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Login">
    </form>










<!-- Default: "":defaultpassword -->

</body>
</html>
