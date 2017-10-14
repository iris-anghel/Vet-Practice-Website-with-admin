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
                    <li><a href="services.php" class="active-nav">Servicii</a></li>
                    <li><a href="resources.php">Articole</a></li>
                    <li><a href="#footer1" class="book-now">Contact</a></li>
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav><!--  end nav  -->

    <div class="container">

        <div id="services-page-text">
            <h1 class="centered-single-items">Servicii</h1>
            <hr class="orange-hr">
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div id="accordion"><!--  services panel  -->

                    <div class="panel panel-default" id="panel-consultatii">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><span class="icons"><img src="img/016-stethoscope.png"></span>Consultatii</a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>In cadrul cabinetului Pet Love Vet, animalutele dumneavoastra vor beneficia de cele mai bune servicii. Cabinetul este dotat cu un analizor sange biochimie uscata, cu un ecograf si cu multiple teste rapide, toate contribuind la stabilirea unor diagnostice cat mai corecte. La Pet Love Vet, prescriem tratamente doar in urma consultatiilor complete.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><span class="icons"><img src="img/004-animal-1.png"></span>Microcipare si inregistrare</a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>La Pet Love Vet, realizam implanturi de microcipuri, inregistrare in RECS, eliberari de carnete de sanatate si de pasapoarte pentru animale.</p>
                                <p>Microciparea este un procedeu modern, permanent și neinvaziv de implantare subcutanată a unui microcip, în regiunea dorsală interscapulară a animalului dumneavoastră de companie.</p>
                                <p>Microciparea reprezintă una dintre condițiile obligatorii pentru a putea călători în străinătate cu animalul dumneavoastră (este necesară și eliberarea unui pașaport internațional), dar este utilă și în cazul în care animalul de companie se pierde. Astfel, microciparea oferă o șansă în plus ca animalul dumneavoastră să se reîntoarcă acasă.</p>
                                <p>Va reamintim ca microciparea câinilor este obligatorie în România începând cu data de 15 martie 2014.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><span class="icons"><img src="img/015-medical-history.png"></span>Carnet de sanatate online</a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Cabinetul veterinar Pet Love Vet ofera un serviciu inovator in Romania, si anume carnetul de sanatate online. Pacientii cabinetului vor primi un numar unic de inregistrare, cu care proprietarii se pot loga pe siteul nostru si vedea online toate datele medicale ale animalului de companie.</p>
                                <p><a class="footer-link" href="login.php">Acceseaza carnetul de sanatate</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><span class="icons"><img src="img/microscope.png"></span>Analize de laborator</a>
                            </h4>
                        </div>
                        <div id="collapse4" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>La Pet Love Vet, realizam examene de laborator in scop de diagnostic, printre care se numara analizele biochimice, microbiologice si imunologice.</p>
                                <ul>
                                    <li>analize biochimice ale sangelui</li>
                                    <li>analize de urina (teste rapide)</li>
                                    <li>examen coproparazitologic</li>
                                    <li>examen raclat de piele</li>
                                    <li>insamantari pe medii de cultura pentru diagnosticul precis al micozelor cutanate superficiale</li>
                                    <li>teste rapide boli infectioase/parazitare</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default" id="panel-tratamente">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse5"><span class="icons"><img src="img/017-veterinary.png"></span>Tratamente</a>
                            </h4>
                        </div>
                        <div id="collapse5" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Cabinetul veterinar Pet Love Vet trateaza o gama larga de afectiuni ale animalelor. Gama noastra de tratamente include:</p>
                                <ul>
                                    <li>terapie intensiva</li>
                                    <li>imunoterapii</li>
                                    <li>tratamente hormonale</li>
                                    <li>chimioterapii</li>
                                    <li>antibioterapii</li>
                                    <li>tratamente antiinflamatoare</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse6"><span class="icons"><img src="img/013-syringe.png"></span>Vaccinari si deparazitari</a>
                            </h4>
                        </div>
                        <div id="collapse6" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Deparazitarea reprezinta modalitatea de inlaturare a parazitilor externi si interni, fiind absolut necesara pentru viata sanatoasa a unui patruped.</p>
                                <p><em>Cum se procedeaza in cazul deparazitarii cainilor?</em></p>
                                <p>Deparazitarea interna la caini presupune combaterea parazitilor regasiti la nivel intestinal, pulmonar, cardiac sau in alte organe. Aceasta se face inca din primele doua saptamani de viata si nu este deloc dureroasa. </p>
                                <p>Varsaturile, abdomenul balonat, mancarimile in zona anala, diareea, pierderea in greutate si incetarea cresterii sunt semne ale infectarii cu viermi intestinali.</p>
                                <p>Deparazitarea externa a cateilor trebuie facuta o data pe luna in lunile de vara. Astfel, infestarea cu capuse, paduchi sau purici poate fi combatuta prin aplicarea a diferite solutii, cu ajutorul pipetelor sau a zgarzilor in 6-9 saptamani, in functie de produsele ce urmeaza a fi aplicate.</p>
                                <p><em>Cum se procedeaza in cazul deparazitarii pisicilor?</em></p>
                                <p>Existenta parazitilor se constata in urma unui examen facut de medicul veterinar. Uneori, acestia se observa numai microscopic.</p>
                                <p>Deparazitarea externa pentru pisici se realizeaza cu produse specifice, in functie de greutate si varsta. Ciupiturile puricilor ii pot cauza unei pisicute o reactie alergica, ba chiar si anemie. De asemenea, capusele pot afecta atat patrupedul, cat si omul, iar acestea sunt active si iarna, si vara.</p>
                                <p>Pentru deparazitare caini si pisici, va asteptam la Pet Love Vet!</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse7"><span class="icons"><img src="img/011-cat.png"></span>Interventii chirurgicale</a>
                            </h4>
                        </div>
                        <div id="collapse7" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Interventiile chirurgicale se impun in afectiuni care nu pot fi tratate prin intermediul preventiei si al tratamentelor medicamentoase.</p>
                                <p>Interventiile chirugicale cele mai comune sunt ovariohisterectomia (sterilizarea) si orhidectomia (castrarea).</p>
                                <p>Pe langa acestea, echipa Pet Love Vet este mereu pregatita pentru a realiza interventii chirurgicale pe ochi si anexele globului ocular (entropion, ektropion, blefarorafie, marsupializarea glandei ploapa a III-a - Cherry Eye), sau pentru a trata plagile cutanate (plagi accidentale, hematoame, abcese, chisturi), hernii (ombilicale, ingvino-scrotale, diafragmatice si perineale).</p>
                            <a class="footer-link" href="blogpost1.php">Vezi articol</a></div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse8"><span class="icons"><img src="img/001-medical-1.png"></span>Stomatologie veterinara</a>
                            </h4>
                        </div>
                        <div id="collapse8" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Asemenea oamenilor, si animalele de companie sufera de afectiuni stomatologice si au nevoie de o ingrijire pe masura. Pentru ca ne dorim ca fiecare animalut sa scape de suferinta provocata de durerile dentare, va punem la dispozitie serviciul de stomatologie veterinara.</p>
                                <p>Printre cele mai frecvente afectiuni dentare la animalute se numara:</p>
                                <ul>
                                    <li>tartrul dentar - pe care il tratam cu ultrasunete</li>
                                    <li>respiratia urat mirositoare</li>
                                    <li>durere/dificultate la masticatie</li>
                                    <li>sangerarea gingiilor</li>
                                    <li>apetitul redus</li>
                                    <li>pierderea dintilor</li>
                                </ul>
                                <p>Principala metoda de preventie a afectiunilor dentare este periajul. Inca din primul an de viata, animalele de companie trebuie obisnuite cu periajul. Astfel, este important sa acordati timp si atentie ingrijirii danturii lor, pentru a evita ca animalutele sa aiba probleme dentare.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse9"><span class="icons"><img src="img/014-dog-food.png"></span>Hrana si nutritie</a>
                            </h4>
                        </div>
                        <div id="collapse9" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Chiar daca avem tendinta de a considera ca un animal pufos este mai dragalas decat unul slab, e bine de stiut ca o greutate mai mare decat cea normala este o problema si pentru animale, la fel cum este si pentru oameni. Kilogramele in plus aduc dupa ele boli ale inimii, ficatului si rinichilor, iar asta scade calitatea vietii.</p><p> Pentru a reduce riscurile in cazul patrupedelor supraponderale sau obeze, se pot face schite personalizate de dieta, in functie de nevoile nutritionale ale fiecarui animal in parte, pentru obtinerea greutatii optime.</p>
                                <p>De asemenea, oferim consiliere cu privire la alimentatia sanatoasa adaptata rasei, taliei, varstei, temperaturii exterioare, nivelului de activitate si femelelor in gestatie sau lactatie.</p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default" id="panel-toaletaj">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapse10"><span class="icons"><img src="img/008-scissors.png"></span>Toaletaj canin</a>
                            </h4>
                        </div>
                        <div id="collapse10" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>Ingrijirea aspectului exterior al cainilor este o parte esentiala a ingrijirii lor generale, la fel cum sunt si nutritia sau ingrijirea sanatatii. Perierea si spalarea animalelor mentin pielea si blana viguroase si cu aspect placut.</p>
                                <p>Pentru unele rase de caini, ingrijirea profesionala este o necesitate, in vreme ce pentru altii, o baie lunara si o sedinta de periaj pe saptamana sunt suficiente.</p>
                                <p>Pet Love Vet vine in intampinarea dumneavoastra si a animalutului preferat cu salonul de frizerie canina care asigura o ingrijire totala a aspectului catelului, ce presupune o tunsoare estetica, imbaiere, uscare, tratamente pentru piele si blana.</p>
                                <p>Salonul Certovet ofera servicii de tuns, trimat, coafat, taiat unghii, curatat ochi si urechi, vidat glande, tratament si parfumpentru blanita. </p>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default" id="panel-petshop">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse11"><span class="icons"><img src="img/005-dog.png"></span>Pet shop</a>
                            </h4>
                        </div>
                        <div id="collapse11" class="panel-collapse collapse">
                            <div class="panel-body">
                                <p>O vizita la medicul veterinar merita incheiata cu o recompensa.</p>
                                <p>La Pet Love Vet, va oferim hrana uscata si umeda, recompense, precum si accesorii pentru animalele dumneavoastra de companie.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /col-sm-12 -->
        </div><!--    / services panel row  -->
    </div><!--  end container -->

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
