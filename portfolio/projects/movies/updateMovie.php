<?php
session_start();
include 'db.php';

$sql = "UPDATE Movies SET movie_title='{$_POST['movie_title']}',movie_genre='{$_POST['movie_genre']}' WHERE movie_id='{$_POST['movie_id']}'";
// echo $sql;
// die;
if (mysqli_query($conn, $sql)) {
    $_SESSION['message'] === 'movieUpdated';
    header("Location: index.php");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
?>