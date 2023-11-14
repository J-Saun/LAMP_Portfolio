<?php

session_start();
include 'db.php';

$sql = "INSERT INTO Patients (first_name, last_name)
VALUES ('{$_POST['first_name']}', '{$_POST['last_name']}')";

if (mysqli_query($conn, $sql)) {
    $_SESSION['message'] === 'patient_added';

    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>