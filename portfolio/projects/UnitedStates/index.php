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
                    <a class="nav-link" href="/contact.php">Contact</a>
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
                            echo ' <button type="submit" name="login_form" class="btn"><i
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
        </div>
    </nav>
    <!-- Main content  -->
    <div class="container text-center">
        <h1 class="my-5">United States</h1>
        <div class="row text-center text-lg-start">
            <?php

            $states = array("Alabama", "Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada", "New Hampshire", "New Jersey", "New Mexico", "New York", "North Carolina", "North Dakota", "Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota", "Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming");
            // echo count($states);
            
            foreach ($states as $state) {
                $stateLink = str_replace(" ", "_", $state);

                echo '<div class="col-lg-3 col-md-4 col-6">
                
                <a href="states/' . $stateLink . '.php" class="d-block mb-4 h-100">
                <figure class="figure">
                <img class="img-fluid img-thumbnail" src="https://jaxcode.com/stateflags/' . $stateLink . '.svg.png"
                alt="' . $state . ' state flag"><figcaption class"figure-caption"><strong>' . $state . '</strong></figcaption></figure>
                </a></div>';
                $x = 1;
                while ($x <= count($states)) {
                    $stateLink = str_replace(" ", "_", $state);
                    // preg_replace(/\s+/)

                    foreach ($state_list as $state) { $statename = $state; $state = pregreplace('/\s+/', '', $state);  $myimage = "http://jaxcode.com/stateflags/$state.svg.png";  $state = strtolower($state);  $myfile = fopen("pages/$state.html", "w") or die("Unable to open file!");

                    foreach ($states as $state) {
                        $myfile = fopen("states/" . $state . ".php", "w") or die("Unable to open file");
                        // echo $state;
                        $min = 1;
                        $max = count($states);
                        $previousPage = $x - 1 . ".html";
                        $nextPage = $x + 1 . ".html";
                        $txt = <<<EOT
                    <!DOCTYPE html>
                    <html lang="en">
                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>$state</title>
                        <!-- Latest compiled and minified CSS -->
                        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
                    </head>
                    <body>
                        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
                            <ul class="navbar-nav">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/projects/100">100 Project</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                            </ul>
                        </nav>    
                        <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="jumbotron text-center">
                                            <h1>$state</h1>
                                            <figure class="figure">
                                            <img class="img-fluid img-thumbnail" src="https://jaxcode.com/stateflags/$state.svg.png"
                                            </div>
                                            <br><br>
                                            <div class="col text-center">
                                            <?php
                                            if($x === 1) {
                                                echo '<a href="$previousPage" class="btn btn-primary mx-2 disabled" >&#x2B05; Previous</a>';
                                            } else {
                                                echo '<a href="$previousPage" class="btn btn-primary mx-2" >&#x2B05; Previous</a>';
                                            };
                                            if($x === 100) {
                                                echo '<a href="$nextPage" class="btn btn-primary mx-2 disabled">Next &#x27A1;</a>';
                                            } else {
                                                echo '<a href="$nextPage" class="btn btn-primary mx-2">Next &#x27A1;</a>';
                                            }
                                            ?>
                                            </div>
                                        <br><br>
                                    </div>
                                </div>
                                <a href="../">Back</a>
                            </div>
                        </body>
                    </html>
                EOT;
                        fwrite($myfile, $txt);
                        fclose($myfile);
                        $x++;
                    }
                }
            }
            ?>
        </div>
        <!-- </div> -->
    </div>
    <a href="./">Project Home</a>
    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>