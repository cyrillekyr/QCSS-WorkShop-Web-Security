<?php
$servername = "localhost";
$username = "root";
$password = ""; // Mettez ici le mot de passe de votre utilisateur MySQL root
$dbname = "ctf";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
