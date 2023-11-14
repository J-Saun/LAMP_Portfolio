    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>New York</title>
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
                            <h1>New York</h1>
                            <figure class="figure">
                            <img class="img-fluid img-thumbnail" src="https://jaxcode.com/stateflags/New York.svg.png"
                            </div>
                            <br><br>
                            <div class="col text-center">
                            <?php
                            if(32 === 1) {
                                echo '<a href="31.html" class="btn btn-primary mx-2 disabled" >&#x2B05; Previous</a>';
                            } else {
                                echo '<a href="31.html" class="btn btn-primary mx-2" >&#x2B05; Previous</a>';
                            };
                            if(32 === 100) {
                                echo '<a href="33.html" class="btn btn-primary mx-2 disabled">Next &#x27A1;</a>';
                            } else {
                                echo '<a href="33.html" class="btn btn-primary mx-2">Next &#x27A1;</a>';
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