<?php
include 'config.php';

session_start();

if (!isset($_SESSION['attempts'])) {
    $_SESSION['attempts'] = 0;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h1>Welcome, $username!</h1>";
        echo "<p>Congratulations! You bypassed the authentication using brute force.</p>";
    } else {
        $_SESSION['attempts'] += 1;
        echo "<h1>Login failed</h1>";
        echo "<p>Attempt: " . $_SESSION['attempts'] . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Brute Force</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Login - Brute Force</h1>
    <form method="POST" action="login3.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
