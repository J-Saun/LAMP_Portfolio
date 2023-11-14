<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Guests</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>My Guests</h1>
                <?php
                // bootstrap alerts for db changes 
                if ($_SESSION['message'] === 'guestupdated') {
                    echo '<div class="alert alert-danger"><strong>Success!</strong> Guest updated.</div>';
                }
                if (isset($_SESSION['message'])) {
                    // echo $_SESSION['message'];
                    if ($_SESSION['message'] === 'guestadded') {
                        echo '<div class="alert alert-success"><strong>Success!</strong> Guest added.</div>';
                    }

                    // if (isset($_SESSION['message'])) {
                    if ($_SESSION['message'] === 'guestdeleted') {
                        echo '<div class="alert alert-danger"><strong>Success!</strong> Guest removed.</div>';
                        // }
                    }
                    unset($_SESSION['message']);
                }

                // set the form to add or update 
                if (isset($_POST['editguest'])) {
                    echo '<form action="updateguest.php" method="POST">';
                } else {
                    echo '<form action="addguest.php" method="POST">';
                }
                ?>

                <form action="addguest.php" method="POST">
                    <div class="form-group">
                        <input class="form-control" type="text" name="firstname" placeholder="First Name" value="<?php if (isset($_POST['firstname'])) {
                            echo $_POST['firstname'];
                        } ?>" required><br><br>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="lastname" placeholder="Last Name" value="<?php if (isset($_POST['lastname'])) {
                            echo $_POST['lastname'];
                        } ?>" required> <br>
                        <br>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="email" placeholder="Email" value="<?php if (isset($_POST['email'])) {
                            echo $_POST['email'];
                        } ?>" required>
                    </div>

                    <?php

                    if (isset($_POST['email'])) {
                        echo $_POST['email'];
                    }
                    ?>


                    <?php
                    if (isset($_POST['editguest'])) {
                        echo '<input type="hidden" name="id" value="' . $_POST['id'] . '" class="btn btn-info">';
                        echo '<button type="submit" name="updateguest" class="btn btn-info">Update Guest</button>';
                    } else {
                        echo '<button type="submit" name="addguest" class="btn btn-primary">Add Guest</button>';
                    }
                    ?>
                </form>
                <br><br>
                <table class="table table-hover table-striped table-bordered">
                    <tr>
                        <th>ID</th>
                        <th>First</th>
                        <th>Last</th>
                        <th>Email</th>
                        <th>Reg_date</th>
                    </tr>
                    <?php
                    include 'db.php';

                    $sql = "SELECT id, firstname, lastname, email, reg_date FROM MyGuests";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td>
                                    <?= $row['id'] ?>
                                </td>
                                <td>
                                    <?= $row['firstname'] ?>
                                </td>
                                <td>
                                    <?= $row['lastname'] ?>
                                </td>
                                <td>
                                    <?= $row['email'] ?>
                                </td>
                                <td>
                                    <?= $row['reg_date'] ?>
                                </td>
                                <td>
                                    <form action="index.php" method="POST">
                                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                        <input type="hidden" name="firstname" value="<?= $row['firstname'] ?>">
                                        <input type="hidden" name="lastname" value="<?= $row['lastname'] ?>">
                                        <input type="hidden" name="email" value="<?= $row['email'] ?>">
                                        <button class="btn btn-xs btn-success" type="submit" name="editguest">Edit</button>
                                    </form>
                                </td>
                                <td>
                                    <form action="deleteguest.php" method="POST">
                                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                        <button class="btn btn-xs btn-danger" type="submit" name="deleteguest">X</button>
                                    </form>
                                </td>
                            </tr>
                            <?php
                        }

                    } else {
                        echo "0 results";
                    }

                    mysqli_close($conn);
                    ?>
                </table>
            </div>
        </div>
        <a href="/">Home</a>
    </div>
</body>

</html>