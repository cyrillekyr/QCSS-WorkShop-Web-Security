<?php
session_start();
if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
    header('Location: index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $password = $_POST['password'];

    // Password is found through LFI
    if ($password === 'this_is_the_secret_password!!!') {
        echo "Congratulations! Here is your final flag: FLAG{Th15_15_th3_f1n4l_fl4G} . Send me it to assogbacyrillekyrillos@gmail.com" ;
    } else {
        echo "Incorrect password.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Protected Area</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Protected Area</h1>
        <form method="POST" action="protected_area.php">
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required><br>
            <input type="submit" value="Enter">
        </form>
    </div>
</body>
</html>
