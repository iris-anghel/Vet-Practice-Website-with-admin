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
                    <li><a href="index.php" class="active-nav">Acasa</a></li>
                    <li><a href="about.php">Despre noi</a></li>
                    <li><a href="services.php">Servicii</a></li>
                    <li><a href="resources.php">Articole</a></li>
                    <li><a href="#footer1" class="book-now">Contact</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron">
        <div class="container jumbotron-text">
            <h1>Pet Love Vet</h1>
            <p class="lead">Prietenul tau in grija noastra</p>
            <p><a class="btn btn-default allButtons" href="about.php" role="button">Mai multe &raquo;</a> <a class="btn btn-default allButtons book-now" href="#footer1" role="button">Contact</a></p>
        </div>
    </div>

    <div class="container-fluid about-excerpt">
        <div class="row">
            <div class="col-sm-6">
                <img class="center-block" src="img/010-pet-hotel-sign-with-a-dog-and-a-cat-under-a-roof-line.png" height="300">
            </div>

            <div class="col-sm-6">
                <h2>Despre noi</h2>
                <hr class="black-hr" id="home-page-about">
                <p><em>Facem diferenta la Pet Love Vet</em></p>
                <p>La Pet Love Vet credem ca fiecare posesor al unui animal de companie trebuie sa beneficieze de cele mai bune servicii. Veterinarii nostri sunt formati pentru a avea grija de orice animal de companie, de la pui la senior. Cabinetul veterinar Pet Love Vet este echipat pentru toate nevoile, de la medicina preventiva, nutritie, analize de laborator, la tratamente si interventii chirurgicale.</p>
                <p><a class="btn btn-default allButtons" href="about.php#about-us" role="button">Mai multe &raquo;</a></p>
            </div>

        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 centered-single-items">
                <h2>Serviciile noastre</h2>
                <hr class="orange-hr">
                <p><em>Animalele fericite sunt cele sanatoase</em></p>
                <p>Cabinetul veterinar Pet Love Vet ofera o gama larga de servicii medical-veterinare, printre care se numara:</p>
            </div>
        </div>

        <div class="row-eq-height home-page-row">
            <div class="col-md-3 col-sm-6 home-item">
                <img class="img-circle" src="img/007-medical-4.png" alt="stethoscope" width="140" height="140">
                <h4>Consultatii si investigatii</h4>
                <p>La Pet Love Vet, fiecare pacient este tratat cu grija. Realizam o anamneza detaliata si luam decizii bazate pe analize de laborator si dovezi stiintifice.</p>
                <p><a href="services.php#panel-consultatii">Detalii &raquo;</a></p>
            </div>
            <div class="col-md-3 col-sm-6 home-item">
                <img class="img-circle" src="img/008-medical-3.png" alt="medicine bottle" width="140" height="140">
                <h4>Tratamente si chirugie</h4>
                <p>In urma consultatiei si diagnosticului, animalelor li se va oferi cel mai bun tratament, mereu personalizat pentru caracteristicile specifice rasei si nevoilor individuale.</p>
                <p><a href="services.php#panel-tratamente">Detalii &raquo;</a></p>
            </div>
            <div class="col-md-3 col-sm-6 home-item">
                <img class="img-circle" src="img/003-medical-8.png" alt="hands holding a heart" width="140" height="140">
                <h4>Carnet de sanatate online</h4>
                <p>Pet Love Vet va ofera toate informatiile medicale ale animalului dumneavoastra de companie direct pe site-ul nostru.</p>
                <p><a href="login.php">Detalii &raquo;</a></p>
            </div>
            <div class="col-md-3 col-sm-6 home-item">
                <img class="img-circle" src="img/hairdresser.png" alt="scissors and comb" width="140" height="140">
                <h4>Toaletaj canin</h4>
                <p>Animalele sunt mai fericite si mai sanatoase atunci cand sunt curate, tunse si aranjate. De aceea, folosim produsele cele mai bune de pe piata, pentru toate tipurile de blana si piele.</p>
                <p><a href="services.php#panel-toaletaj">Detalii &raquo;</a></p>
            </div>
        </div>

        <div class="row centered-single-items">
            <div class="col-sm-12">
                <p><a class="btn btn-default align-center allButtons" href="services.php" id="services-home-button" role="button">Vezi toate serviciile &raquo;</a></p>
            </div>
        </div>

        <div class="row centered-single-items team-row">
            <div class="col-sm-12">
                <h2>Echipa noastra</h2>
                <hr class="orange-hr">
                <p id="homepage-team">Cabinetul veterinar Pet Love Vet va asteapta cu o echipa tanara de specialisti, pregatiti oricand sa va ofere un ajutor prompt si calificat. Toti membrii echipei noastre sunt deopotriva pregatiti si pasionati, cu o atitudine prietenoasa, deschisa si cu accentul pe starea de bine a animalului dumneavoastra de companie.</p>
            </div>
        </div>

        <div class="row home-page-row team-row">
            <div class="col-sm-4 home-item">
                <img class="img-circle" src="img/007-animal.png" alt="vet photo" width="140" height="140">
                <h4>Denisa Soncodi</h4>
                <hr class="orange-hr">
                <p>medic veterinar</p>
                <p><a class="footer-link" href="about.php#featurette-denisa">Detalii &raquo;</a></p>
            </div>
            <div class="col-sm-4 home-item">
                <img class="img-circle" src="img/007-animal.png" alt="vet photo" width="140" height="140">
                <h4>Paula Pop</h4>
                <hr class="orange-hr">
                <p>medic veterinar</p>
                <p><a class="footer-link" href="about.php#featurette-paula">Detalii &raquo;</a></p>
            </div>
            <div class="col-sm-4 home-item">
                <img class="img-circle" src="img/007-animal.png" alt="vet photo" width="140" height="140">
                <h4>Andreea Lup</h4>
                <hr class="orange-hr">
                <p>groomer</p>
                <p><a class="footer-link" href="about.php#featurette-andreea">Detalii &raquo;</a></p>
            </div>
        </div>

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
