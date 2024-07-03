<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['email'] = $_POST['email'];
}
$email = isset($_SESSION['email']) ? $_SESSION['email'] : 'user@example.com';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CSRF Lab</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Change Email Address</h1>
        <form method="POST" action="index.php">
            <label for="email">Email:</label>
            <input type="hidden" id="email" name="email" required value="<?php echo $email; ?>"><br>
            <input type="submit" value="Change Email">
        </form>
        <?php if ($_SERVER['REQUEST_METHOD'] == 'POST'): ?>
            <p class="message success">Email address changed to: <?php echo htmlspecialchars($email); ?></p>
        <?php endif; ?>
    </div>
</body>
</html>
