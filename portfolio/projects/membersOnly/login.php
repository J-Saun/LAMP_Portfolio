<?php
session_start();
// include("db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>
    <link rel="stylesheet" href="styles.css">
    <!-- CSS RESET  -->
    <link rel="stylesheet" href="../reset.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <!-- A grey horizontal navbar that becomes vertical on small screens -->
    <nav class="navbar navbar-expand-sm bg-light navbar-light">

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="./">Project Home</a>
            </li>
        </ul>
        <!-- <div class="nav-form">
            <form action="login.php" method="post">
                <button type="submit" name="login_form" class="btn active"><i
                        class="fa-solid fa-arrow-right-to-bracket"></i> Login</button>
                <button type="submit" name="register_form" class="btn"><i class="fa-regular fa-user"></i>
                    Register</button>
            </form>
        </div> -->
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php

                if (isset($_SESSION['message'])) {
                    // if ($_SESSION['message'] == 'failedlogin') {
                    echo '<div class="alert alert-danger">
                    <strong>Failed Login!</strong> Username or password id invalid.
                    </div>';
                    unset($_SESSION['message']);
                    // }
                }
                ?>
                <div class="container text-center">
                    <h1>Log-in</h1>
                    UN: joshua_saun@protonmail.com <br>
                    Pwd: 1486181480
                    <div class="row d-flex justify-content-center mt-5">
                        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                            <form action="login_process.php" method="POST" class="myform">
                                <div class="form-group">
                                    <input type="email" name="user_email" class="form-control"
                                        placeholder="Enter Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="pwd" class="form-control" placeholder="Enter Password">
                                </div>
                                <div class="row text-center">
                                    <div class="col-md-6 col-12">
                                        <div class="form-group form-check">
                                            <input type="checkbox" name="login_user" class="form-check-input"
                                                id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-12 bn"><a href="./">Need an account? Register here!</a>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" name="login_user"
                                        class="btn btn-block btn-primary btn-lg"><small><i
                                                class="fa-solid fa-arrow-right-to-bracket"></i>
                                            Log-in</small></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>