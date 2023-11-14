<?php
session_start();
include("db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check-In</title>
    <!-- Stylesheet  -->
    <link rel="stylesheet" href="styles.css">
    <!-- CSS RESET  -->
    <link rel="stylesheet" href="../reset.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Check-in Form</h1>

                <?php
                // switch (n) {
                //     case label1:
                //       code to be executed if n=label1;
                //       break;
                //     case label2:
                //       code to be executed if n=label2;
                //       break;
                //     case label3:
                //       code to be executed if n=label3;
                //       break;
                //       ...
                //     default:
                //       code to be executed if n is different from all labels;
                //   }
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
                if (isset($_POST['update_patient'])) {
                    echo '<form action="update_patient.php" method="POST" class="mb-5">';
                } else {
                    echo '<form action="checkin.php" method="POST" class="mb-5">';
                }
                ?>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Patient</span>
                    </div>
                    <input type="text" name="first_name" class="form-control" placeholder="First Name" value="<?php if (isset($_POST['first_name'])) {
                        echo $_POST['last_name'];
                    } ?>">
                    <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="<?php if (isset($_POST['last_name'])) {
                        echo $_POST['last_name'];
                    } ?>">
                </div>
                <?php
                if (isset($_POST['update_patient'])) {
                    echo '<input type="hidden" name="patient_id" value="' . $_POST['patient_id'] . '" class="btn btn-info">';
                    echo '<button type="submit" name="update_patient" class="btn btn-info">Update Patient</button>';
                } else {
                    echo '<button type="submit" name="checkin" class="btn btn-success">Submit</button>';
                }
                ?>
                </form>
                <table class="table table-striped table-bordered">
                    <tr class="thead-dark">
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php
                    include('db.php');

                    $sql = "SELECT * FROM Patients";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // output data of each row
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <tr>
                                <td>
                                    <?= $row['patient_id'] ?>
                                </td>
                                <td>
                                    <?= $row['first_name'] ?>
                                </td>
                                <td>
                                    <?= $row['last_name'] ?>
                                </td>
                                <td class="table-icon">
                                    <form action="index.php" method="POST">
                                        <input type="hidden" name="patient_id" value="<?= $row['patient_id'] ?>">
                                        <input type="hidden" name="first_name" value="<?= $row['first_name'] ?>">
                                        <input type="hidden" name="last_name" value="<?= $row['last_name'] ?>">
                                        <button type="submit" name="update_patient" class="btn btn-xs">
                                            <i class="fa-regular fa-pen-to-square"></i>
                                        </button>
                                    </form>
                                </td>
                                <td class="table-icon">
                                    <form action="delete_guest.php">
                                        <input type="hidden" name="patient_id" value="<?= $row['patient_id'] ?>">
                                        <button type="submit" class="btn btn-xs" name="delete_patient">
                                            <i class="fa-solid fa-trash "></i>
                                        </button>
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
                    <!-- <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Address</span>
                        </div>
                        <input type="text" name="address" placeholder="  Enter Address">
                        <input type="text" name="state" placeholder="  State">
                        <input type="text" name="city" placeholder="  City">
                    </div> -->
                </table>
            </div>
        </div>
        <a href="/">Home</a>
    </div>
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>