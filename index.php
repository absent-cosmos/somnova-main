<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Somnova Studios">

    <title>Somnova Studios</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/somnova.css" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Menu</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="http://somnovastudios.org/yearbook/">Art Gallery</a>
                    </li>
                    <li>
                        <a href="http://somnovastudios.blogspot.com/">Blog</a>
                    </li>
                    <li>
                        <a href="http://missing-stars.net">Missing Stars</a>
                    </li>
                    <li><a href="https://twitter.com/#!/somnovastudios">Twitter</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content Section -->
    <section>
        <div class="logo">
            <img class="img-responsive img-center" src="images/bigss.png" alt="">
        </div>
        <div class="container">
            <div class="column">
                <div class="col-lg-2"></div>
                <div class="col-lg-4">
                    <p class="lead section-lead">Who are Somnova Studios?</p>
                    <p class="section-paragraph">We're a group of people from across the world making visual novels.</p>
                    <img  class="img-responsive img-center" src="./images/group.png">
                    <p>Our current project is <b>Missing Stars</b>, a visual novel set in a Vienna school for students with mental disorders. Erik Wilhelm, a new student there, meets up with his fellow students, including (above, left to right) Annaliese, Natasha, Sofiya, Katja, Jeanne, Isolda, and Lena.</p>
                </div>
                <div class="col-lg-4">
                    <p class="lead section-lead">Recent Blog Posts</p>
                    <ul class="bloglist">
                        <?
                        include "bloglist.php";
                        ?>
                    </ul>
            </div>
                </div>
                <div class="col-lg-2"></div>
            </div>
        </div>
    </section>

    <!-- 
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <p></p>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </footer> -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
