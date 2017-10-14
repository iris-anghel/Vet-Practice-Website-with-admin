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
                    <img src="#" height="80" alt="logo">
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
    </nav><!--  end nav  -->

    <div class="container">
         <div class="row">
            <div class="col-sm-12">
                <h1 class="page-header">Cum trebuie hranit in mod corect un caine?
                    <small>de Paula Pop</small>
                </h1>
            </div>
        </div><!-- /.row -->

         <div class="row">
            <div class="col-sm-12">
                <p><span class="glyphicon glyphicon-time"></span> Postat in Iunie 12, 2017 la 11:00 AM</p>
                <img class="img-responsive" src="img/puppies-food.jpg" alt="puppies with food">
                <hr>
                <!-- Post Content -->
                <p class="lead">Alimentatia cainelui joaca un rol decisiv pentru starea lui de sanatate, si difera in functie de varsta, nivel de activitate, eventuale alergii sau afectiuni.</p>
                <p>Puii pana la 6 luni primesc 3-4 mese pe zi. Dupa sase luni, doua mese pot fi suficiente, dar se recomanda trei. Ca si omul, cainele are o digestie similara si are nevoie o pauza de 15-30 de minute dupa masa. In perioada de crestere, mai ales pana la varsta de un an cainele va manca mai mult, are mai multa energie si are o dorinta de miscare crescuta.</p>
                <p>Hrana recomandata: carne (vita, pasare, peste, curcan, iepure), orez, morcov, telina, dovlecel, fructe s.a.</p>
                <p class="lead">Ce NU are voie: ciocolata, cafea, inghetata, dulciuri, varza, fasole, carne de porc, mancare condimentata, alune, alcool, oase de pasare, porc sau oaie sau organe interne crude. Nu este indicat (adica in cantitati foarte mici sau deloc) sa i se ofere mancare care poate fermenta, cum ar fi: fasole, mazare, cartofi, varza. Nu sunt indicate nici prajelile, sosurile sau pastele fainoase.</p>
                <p>Cantitatea de hrana difera de la individ la individ. Aceasta difera in functie de varsta, nutrienti, nivelul de energie, starea fizica (gestatie). Pentru a vedea cat mananca ii puneti un castron cu mancare si daca nu mananca tot la urmatoarea masa se pune mai putin si tot asa. Daca il obisnuiti cu un tip de mancare este bine sa nu il treceti imediat pe alt tip de mancare sau alta marca. Trecerea trebuie facuta in cel putin cateva zile in care mancarea cea noua se introduce treptat din ce in ce mai mult la masa.</p>
                <p class="lead">Mancarea gatita sau "boabe"?</p>
                <p>Daca nu aveti timp sa gatiti zilnic pentru companionul vostru, o puteti face mai rar. Se pot gati cantitati mai mari, portionate si depozitate in frigider. Boabele si mancarea la plic sau conservele sunt bune daca au in compozitie tot ce cainele are nevoie zilnic. Fiti atenti la ingrediente, procentajul carnii din granule si alte surse de vitamine sau minerale.</p>
                <p>Pentru a va oferi si mai multe informatii despre hrana si nutritia cainilor va asteptam la cabinetul veterinar Pet Love Vet!</p>
                <p><a class="btn btn-default allButtons" href="resources.php" role="button">&larr; Inapoi</a></p>
             </div>
         </div><!-- /.row -->
    </div><!-- /.container -->

<!--    add spaces here -->

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
