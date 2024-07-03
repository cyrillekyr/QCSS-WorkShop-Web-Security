<?php
include 'config.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h1>Welcome, $username!</h1>";
        echo "<p>Congratulations! The flag is: FLAG{sql_injection_success}</p>";
    } else {
        echo "<h1>Login failed</h1>";
    }
} else {
    echo "<h1>Invalid request</h1>";
}
$conn->close();
?>
