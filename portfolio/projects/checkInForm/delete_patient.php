<?php
session_start();
include("db.php");
// sql to delete a record
$sql = "DELETE FROM Patients WHERE patient_id={$_POST['patient_id']}";

if (mysqli_query($conn, $sql)) {
    $_SESSION['message'] == 'patient_deleted';
    header('Location: index.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>