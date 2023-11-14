<?php
session_start();

// encrypt password 
$e_password = md5($_POST['pwd']);

// select data 
include "db.php";

$sql = "SELECT * FROM users wHERE users_email ='{$_POST['user_email']}' AND users_password = '{$e_password}'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        // redirect to dashboard page 
        $_SESSION['users_first'] = $row['users_first'];
        $_SESSION['message'] = 'successfullogin';
        header("Location: dashboard.php");
    }
} else {
    $_SESSION['message'] = 'failedlogin';
    // send back to login 
    header("Location: login.php");
    // echo "failed login";
}

mysqli_close($conn);

?>