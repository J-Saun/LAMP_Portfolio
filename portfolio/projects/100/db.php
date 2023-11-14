<?php
$servername = "localhost";
$username = "joshua";
$password = "tytCeBhYIctsMxHp";
$dbname = "codebootcamp";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>