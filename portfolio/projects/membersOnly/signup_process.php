<?php
$random_password = rand();
$e_password = md5($random_password);

include 'db.php';

$sql = "INSERT INTO users (users_first, users_last, users_email, users_password) VALUES ('{$_POST['users_first']}', '{$_POST['users_last']}', '{$_POST['users_email']}','{$e_password}')";
// echo $sql;
// die;
if (mysqli_query($conn, $sql)) {
    // Email the user 

    $to = $_POST['users_email'];
    $subject = "Thank You For Registering";
    $txt = "Thank You For Registering! Your username: " . $_POST['users_email'] . "Your Password:" . $random_password . "Login here: https://portfolio.joshua.opalstacked.com/projects/membersOnly/login.php";
    $headers = "From: noreply @example.com";

    mail($to, $subject, $txt, $headers);
    // Redirect to thank you page
    header("Location: thank_you.html");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>