<?php
session_start();

include 'db.php';

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('{$_POST['firstname']}', '{$_POST['lastname']}', '{$_POST['email']}')";


if (mysqli_query($conn, $sql)) {
  $_SESSION['message'] === 'guestadded';

  header("Location: index.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>