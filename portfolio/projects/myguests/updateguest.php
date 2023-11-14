<?php
session_start();
include 'db.php';

$sql = "UPDATE MyGuests SET firstname='{$_POST['firstname']}',lastname='{$_POST['lastname']}',email='{$_POST['email']}' WHERE id='{$_POST['id']}'";

if (mysqli_query($conn, $sql)) {
    $_SESSION['message'] === 'guestupdated';

    header("Location: index.php");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
?>


// Update Guest
// is this supposed to be SESSION or POST?
// if (isset($_POST['updateguest'])) {
// $sql = "UPDATE MyGuests SET
firstname='{$_POST['firstname']}',lastname='{$_POST['lastname']}',email='{$_POST['email']}' WHERE id='{$_POST['id']}'";

// if ($conn->query($sql) === TRUE) {
// echo "Record updated successfully";
// } else {
// //fix this
// echo "Error updating record: " . $conn->error;
// }
// }