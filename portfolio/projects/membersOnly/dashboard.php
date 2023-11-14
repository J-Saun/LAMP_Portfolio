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
    <nav class="navbar navbar-expand-md">
        <a class="navbar-brand revalia" href="#">JS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/projects">Projects</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="./">Project Home</a>
                </li>
            </ul>
            <div class="nav-form">
                <form action="login.php" method="post">
                    <?php
                    if (isset($_SESSION['message'])) {
                        if ($_SESSION['message'] = 'successfullogin') {
                            echo '<button type="submit" name="register_form" class="btn"><i
                            class="fa-solid fa-arrow-right-from-bracket"></i></i>
                        Logout</button>';
                        } else {
                            echo '<button type="submit" name="login_form" class="btn"><i
                            class="fa-solid fa-arrow-right-to-bracket"></i> Login</button>';
                        }
                    }
                    ?>
                </form>
            </div>
            <form action="index.php" method="POST">
                <?php
                if (isset($_POST['light_theme'])) {
                    echo '<button type="submit" name="dark_theme" class="btn"><i class="fa-solid fa-moon"></i></button>';
                } else {
                    echo '<button type="submit" name="light_theme" class="btn"><i class="fa-solid fa-sun"></i></button>';
                }
                ?>
            </form>
            <!-- TODO: get rid of style  -->

            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Dashboard</h1>
                <?php
                if (isset($_SESSION['message'])) {
                    if ($_SESSION['message'] = 'successfullogin') {
                        echo '<h2>Welcome, ' . $_SESSION['users_first'] . '</h2>';
                    }
                }
                ?>
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