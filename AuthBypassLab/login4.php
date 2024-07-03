<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Simule une faille logique en permettant l'accès à un utilisateur spécifique
    if ($username == 'admin' && $password == '') {
        echo "<h1>Welcome, $username!</h1>";
        echo "<p>Congratulations! You bypassed the authentication using a logical flaw.</p>";
    } else {
        echo "<h1>Login failed</h1>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logical Flaw</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Login - Logical Flaw</h1>
    <form method="POST" action="login4.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" ><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
