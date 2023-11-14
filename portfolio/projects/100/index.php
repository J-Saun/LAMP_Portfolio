<?php

$x = 1;
while ($x <= 100) {
    $square = $x * $x;
    $myfile = fopen("pages/" . $x . ".html", "w") or die("Unable to open file");
    // function checkVal($currentVal, $min, $max)
    // {
    //     if ($currentVal < $min || $currentVal > $max)
    //         return false;
    // }
    $min = 1;
    $max = 100;
    $previousPage = $x - 1 . ".html";
    $nextPage = $x + 1 . ".html";
    $txt = <<<EOT
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>#$x</title>
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
                                <h1>The Number $x</h1>
                                </div>
                                <br><br>
                                <p class="text-center mb-5">$x x $x = $square</p>
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
                </div>
            </body>s
        </html>
    EOT;
    fwrite($myfile, $txt);
    fclose($myfile);
    $x++;
}
?>
<a href="pages/1.html">Page 1</a>