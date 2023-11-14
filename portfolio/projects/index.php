<?php
session_start();
// include("db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>United</title>
    <link rel="stylesheet" href="styles.css">
    <!-- CSS RESET  -->
    <link rel="stylesheet" href="../reset.css">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a class="navbar-brand revalia" href="#">JS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/projects">Projects</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>

            <!-- TODO: get rid of style  -->
            <i class="fa-sharp fa-solid fa-jedi fa-2xl" style="color: #b5b7ba;"></i><i
                class="fa-brands fa-galactic-republic fa-2xl" style="color: #b5b7ba;"></i>
            <!-- <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form> -->
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h1>Projects</h1>
                <table class="table table-hover table-striped">
                    <tr>
                        <th>Project</th>
                        <th>Github</th>
                        <th>Technology</th>
                    </tr>
                    <?php
                    include("db.php");
                    $sql = "SELECT project_id, project_name, project_link,code_link FROM Projects";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td>
                                    <a href="/projects/<?= $row['project_link'] ?>">
                                        <?= $row['project_name'] ?>
                                    </a>
                                </td>
                                <td>
                                    <a href="<?= $row['code_link'] ?>">
                                        View Code
                                    </a>
                                </td>
                                <td>
                                    <i class="fa-brands fa-html5 html"></i>
                                    <i class="fa-brands fa-css3-alt"></i>
                                    <i class="fa-brands fa-php"></i>
                                    <i class="fa-solid fa-database"></i>
                                    <i class="fa-brands fa-php"></i>
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
    </div>
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>