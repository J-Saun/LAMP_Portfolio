<?php
session_start();
include 'db.php';

$sql = "DELETE FROM Movies WHERE movie_id='{$_POST['movie_id']}'";
// echo $sql;
// die;
if ($conn->query($sql) === TRUE) {
    // echo $_POST['movie_id'];
    $_SESSION['message'] = 'movieDeleted';
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>