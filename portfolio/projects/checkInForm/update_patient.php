<?php
session_start();
include("db.php");

$sql = "UPDATE Patients SET first_name='{$_POST['first_name']}', last_name='{$_POST['last_name']}' WHERE patient_id='{$_POST['patient_id']}'";

if (mysqli_query($conn, $sql)) {
    $_SESSION['message'] == 'patient_updated';
    header('Location: index.php');
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>