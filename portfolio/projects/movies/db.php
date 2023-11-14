<?php
$servername = "localhost";
$username = "joshua";
$password = "tytCeBhYIctsMxHp";
$dbname = "codebootcamp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>