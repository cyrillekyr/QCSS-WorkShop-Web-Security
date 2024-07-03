<?php
session_start();
if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
    header('Location: index.php');
    exit();
}

if (isset($_GET['file'])) {
    $file = $_GET['file'];
    include($file);
} else {
    echo "File not specified.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LFI Vulnerable</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Local File Inclusion</h1>
        <form method="GET" action="lfi_vulnerable.php">
            <label for="file">File:</label>
            <input type="text" id="file" name="file" required><br>
            <input type="submit" value="Include File">
        </form>
        <p class="message">Hint: Include the file theholypassword.txt  to get the password for the next challenge. He is in the directory for add-on sofware packages. </p>
    </div>
</body>
</html>
