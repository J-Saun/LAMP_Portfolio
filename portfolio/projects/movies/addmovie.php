<?php
session_start();

include 'db.php';

$sql = "INSERT INTO Movies (movie_title, movie_genre)
VALUES ('{$_POST['movie_title']}', '{$_POST['movie_genre']}')";

if ($conn->query($sql) === TRUE) {
    $_SESSION['message'] = 'movieAdded';
    header('Location: index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>