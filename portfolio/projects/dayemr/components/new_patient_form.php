<?php
session_start();
include("header.php");
// include 'db.php';
?>
<h1>New Patient</h1>
<form action="" method="POST">

    <label for="f_name">First name:</label>
    <input type="text" id="f_name" name="fname">
    <label for="l_name">Last name:</label>
    <input type="text" id="l_name" name="lname">
    <label for="email">Email:</label>
    <input type="text" id="email" name="email">
    <label for="tel">Phone:</label>
    <input type="text" id="tel" name="tel">

    <label for="tel">:</label>
    <input type="text" id="tel" name="tel">


</form>
<?php

// $sql = "INSERT INTO Patients (first_name, last_name)
// VALUES ('{$_POST['first_name']}', '{$_POST['last_name']}')";

// if (mysqli_query($conn, $sql)) {
//     $_SESSION['message'] === 'patient_added';

//     header("Location: index.php");
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }

// mysqli_close($conn);
?>
<?php
include("footer.php");
?>