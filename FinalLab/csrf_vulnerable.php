<?php
session_start();
if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
    header('Location: index.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['email'] = $_POST['email'];
}
$email = isset($_SESSION['email']) ? $_SESSION['email'] : 'user@example.com';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CSRF Vulnerable</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Change Email Address</h1>
        <form method="POST" action="csrf_vulnerable.php">
            <label for="email">Email:</label>
            <input type="hidden" id="email" name="email" required value="<?php echo htmlspecialchars($email); ?>"><br>
            <input type="submit" value="Change Email">
        </form>
        <?php if (($_SERVER['REQUEST_METHOD'] == 'POST') && ($_POST['email'] != 'user@example.com' )): ?>
            <p class="message success">Email address changed to: <?php echo htmlspecialchars($email); ?></p>
            <p class="message">Next hint: Check the new email in the SQL Injection vulnerable page : sql_injection.php .</p>
        <?php endif; ?>
    </div>
</body>
</html>
