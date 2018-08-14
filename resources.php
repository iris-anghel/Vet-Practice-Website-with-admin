<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pet Love Vet</title>
    <link rel="icon" type="image/png" href="img/silhouette.png" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" id="pet-love-logo" href="index.php">
                    <img src="img/logo.png" height="70" alt="logo">
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php" >Acasa</a></li>
                    <li><a href="about.php">Despre noi</a></li>
                    <li><a href="services.php">Servicii</a></li>
                    <li><a href="resources.php" class="active-nav">Articole</a></li>
                    <li><a href="#footer1" class="book-now">Contact</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
     </nav><!--   /.nav  -->

     <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-header">Articole</h1>
            </div>
        </div><!-- /.row -->

        <div class="row">
            <!-- Blog Entries Column -->
            <div class="col-sm-12" id="blog-wrapper">
                <!-- First Blog Post -->
                <h2>
                    <a class="footer-link" href="blogpost1.php">Sterilizarea si castrarea</a>
                </h2>
                <p class="lead">de Denisa Pop</p>
                <p><span class="glyphicon glyphicon-time"></span> Postat in Septembrie 28, 2017 la 10:00 AM</p>
                <hr>
                <img class="img-responsive img-hover" src="img/cutePuppies.jpg" alt="puppies">
                <hr>
                <p>La cabinetul veterinar Pet Love Vet avem grija ca animalele dumneavoastra de companie sa fie ingrijite asa cum se cuvine. De aceea, medicii nostri veterinari va vin in ajutor cu serviciul de castrare al cainilor. Cu toate ca aceasta interventie chirurgicala este privita cu suspiciune de multi stapani de animale, ea este absolut necesara.</p>
                <a class="btn btn-default allButtons" href="blogpost1.php">Mai multe &raquo;</a>
                <hr>
                <!-- Second Blog Post -->
                <h2>
                    <a class="footer-link" href="blogpost2.php">Cum trebuie hranit in mod corect un caine?</a>
                </h2>
                <p class="lead">de Paula Pop</p>
                <p><span class="glyphicon glyphicon-time"></span> Postat in Iunie 12, 2017 la 11:00 AM</p>
                <hr>
                <img class="img-responsive img-hover" src="img/puppies-food.jpg" alt="puppies with food">
                <hr>
                <p>Alimentatia cainelui joaca un rol decisiv pentru starea lui de sanatate, si difera in functie de varsta, nivel de activitate, eventuale alergii sau afectiuni. Este foarte importanta alegerea unui tip de mancare uscata de calitate, sau prepararea mancarii in casa cu ingrediente recomandate cainilor.</p>
                <a class="btn btn-default allButtons" href="blogpost2.php">Mai multe &raquo;</a>
            </div>
         </div><!-- /.row -->
    </div><!-- /.container -->

    <div class="container-fluid">
        <div class="row about-excerpt flex-center">
            <div class="col-sm-9">
                <h3>Aveti intrebari?</h3>
                <p>Echipa cabinetului veterinar Pet Love Vet va sta la dispozitie</p>
            </div>
            <div class="col-sm-3">
                <p><a class="btn btn-default center-block allButtons book-now" href="#footer1" role="button">Faceti o programare &raquo;</a></p>
            </div>
        </div>
    </div>

    <?php
    include('footer.php');
    ?>
