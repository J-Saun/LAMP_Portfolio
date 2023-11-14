<?php
session_start();
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Movies</h1>
                <?php
                if (isset($_SESSION['message'])) {
                    if ($_SESSION['message'] == 'movieAdded') {
                        echo ' <div class="alert alert-success"><strong>Success!</strong> Movie added.</div>';
                    }
                    if ($_SESSION['message'] == 'movieDeleted') {
                        echo ' <div class="alert alert-danger"><strong>Success!</strong> Movie deleted.</div>';
                    }
                    if ($_SESSION['message'] == 'movieUpdated') {
                        echo ' <div class="alert alert-info"><strong>Success!</strong> Movie updated.</div>';
                    }
                    unset($_SESSION['message']);
                }
                // set the form to add or update 
                if (isset($_POST['updateMovie'])) {
                    echo '<form action="updateMovie.php" method="POST">';
                } else {
                    echo '<form action="addmovie.php" method="POST">';
                }
                ?>
                <div class="form-group">
                    <label>Movie Title:</label>
                    <input class="form-control" type="text" name="movie_title" placeholder="Enter Title" value="<?php if (isset($_POST['movie_title'])) {
                        echo $_POST['movie_title'];
                    } ?>" required>
                </div>
                <div class="form-group">
                    <label>Genre:</label>
                    <select name="movie_genre" id="" class="form-control" required>
                        <?php
                        $genres = array("Action", "Scy-Fy", "Comedy", "Kids and Family", "Drama", "Fantasy", "Horror", "Mystery", "Romance", "Thriller", "Western");

                        if (isset($_POST['movie_genre'])) {
                            if ($_POST['movie_genre'] = $genre) {
                                echo '<h1>$genre</h1>';
                                // echo '<option value="' . $genre . '">' . $genre . '</option>';
                                // echo '<option value="" disabled selected>Select a genre</option>';
                            }
                            echo '<option value="" disabled selected>Select a genre</option>';
                        }
                        foreach ($genres as $genre) {
                            echo '<option value="' . $genre . '">' . $genre . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <?php
                if (isset($_POST['updateMovie'])) {
                    echo '<input type="hidden" name="movie_id" value="' . $_POST['movie_id'] . '" class="btn btn-info">';
                    echo '<button type="submit" name="updateMovie" class="btn btn-info">Update Movie</button>';
                } else {
                    echo '<button type="submit" name="addmovie" class="btn btn-success">Add Movie</button>';
                }
                ?>
                <br>
                <br>*All fields are required
                </form>
                <br><br>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Genre</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include 'db.php';

                        $sql = "SELECT * FROM Movies";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td>
                                        <?= $row["movie_id"] ?>
                                    </td>
                                    <td>
                                        <?= $row["movie_title"] ?>
                                    </td>
                                    <td>
                                        <?= $row["movie_genre"] ?>
                                    </td>
                                    <td>
                                        <form action="index.php" method="POST">
                                            <input type="hidden" name="movie_id" value="<?= $row["movie_id"] ?>">
                                            <input type="hidden" name="movie_title" value="<?= $row["movie_title"] ?>">
                                            <input type="hidden" name="genre" value="<?= $row["movie_genre"] ?>">

                                            <button class="btn btn-xs btn-success" type="submit"
                                                name="updateMovie">Edit</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="deleteMovie.php" method="POST">
                                            <input type="hidden" name="movie_id" value="<?= $row['movie_id'] ?>">
                                            <button class="btn btn-xs btn-danger" type="submit" name="deleteMovie">X</button>
                                        </form>
                                    </td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo "0 results";
                        }
                        $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <a href="/">Home</a>
    </div>
</body>
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

</html>