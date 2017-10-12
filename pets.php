<?php
session_start();

// if user is not logged in
//if( !$_SESSION['loggedInUser'] ) {

    // send them to the login page
//    header("Location: login.php");
//}

// connect to database
require_once('includes/connection.php');

// query & result
$query = "SELECT * FROM pet_info";
$result = mysqli_query( $conn, $query );

// check for query string
if( isset( $_GET['alert'] ) ) {

    // new client added
    if( $_GET['alert'] == 'success' ) {
        $alertMessage = "<div class='alert alert-success'>Datele au fost adaugate! <a class='close' data-dismiss='alert'>&times;</a></div>";

    // client updated
    } elseif( $_GET['alert'] == 'updatesuccess' ) {
        $alertMessage = "<div class='alert alert-success'>Modificarile au fost salvate! <a class='close' data-dismiss='alert'>&times;</a></div>";

    // client deleted
    } elseif( $_GET['alert'] == 'deleted' ) {
        $alertMessage = "<div class='alert alert-success'>Datele au fost sterse! <a class='close' data-dismiss='alert'>&times;</a></div>";
    }

}

mysqli_close($conn);

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gestiune Pet Love Vet</title>
        <link rel="icon" type="image/png" href="img/silhouette.png" />
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link rel="stylesheet" type="text/css" href="style/style.css">
    </head>

    <body style="padding-top: 100px;">
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">

        <div class="container-fluid">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="clients.php">Gestiune Pet Love Vet</a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse">

                <?php
                if( isset($_SESSION['loggedInUser']) ) { // if user is logged in he gets access to table
                ?>
                <ul class="nav navbar-nav">
                    <li><a href="pets.php"><i class="fa fa-paw"></i> Animale de companie</a></li>
                    <li><a href="add_pet.php"><i class="fa fa-plus"></i> Adauga pacient</a></li>
                    <li><a href="clients.php"><i class="fa fa-address-book"></i> Proprietari</a></li>
                    <li><a href="add.php"><i class="fa fa-plus"></i> Adauga proprietar</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <p class="navbar-text"><?php echo $_SESSION['loggedInUser'] ?>, Bine ai venit!</p>

                    <li><a href="logout.php">Iesi din cont <i class="fa fa-sign-out"></i></a></li>
                </ul>
                <?php
                } else {
                ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.php">Intra in cont <i class="fa fa-sign-in"></i></a></li>
                </ul>
                <?php
                }
                ?>

            </div>

        </div>
    </nav>

    <div class="container-fluid">

        <h1>Lista pacienti</h1>
        <div class="row">
            <div class="col-xs-12 col-sm-6">
                    <div class="form-group">
                        <div class="input-group">
                            <input type="text" class="form-control" name="pet_search" id="pet_search" placeholder="Cauta animal de companie...">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                        </div>
                    </div>
            </div><!-- /#pet search -->
            <div class="col-xs-12 col-sm-6">
                <a href="add_p.php" type="button" class="btn btn-warning"><span class="glyphicon glyphicon-plus"></span> Adauga pacient</a>
            </div>
        </div>

        <?php echo $alertMessage; ?>
<!--Undefined variable: alertMessage-->

        <div class="row">
            <div class="col-sm-12">
                <table class="table table-striped table-responsive table-condensed" id="pet_table">
                    <tr>
                        <th>Nume</th>
                        <th>Data nasterii</th>
                        <th>Specie</th>
                        <th>Sex</th>
                        <th>Rasa</th>
                        <th>Date microcip</th>
                        <th>Sterilizat</th>
                        <th>Carnet de sanantate</th>
                        <th>ID stapan</th>
                        <th>Observatii</th>
                        <th>Editeaza</th>
                    </tr>

                    <?php

                    if( mysqli_num_rows($result) > 0 ) {

                        while( $row = mysqli_fetch_assoc($result) ) {
                            echo "<tr>";

                            echo "<td>" . $row['pet_name'] . "</td>
                                    <td>" . $row['pet_dob'] . "</td>
                                    <td>" . $row['pet_species'] . "</td>
                                    <td>" . $row['gender'] . "</td>
                                    <td>" . $row['pet_breed'] . "</td>
                                    <td>" . $row['cip_data'] . "</td>
                                    <td>" . $row['steryl'] . "</td>
                                    <td>" . $row['pet_pass'] . "</td>
                                    <td>" . $row['id_owner'] . "</td>
                                    <td>" . $row['obs'] . "</td>";

                            echo '<td><a href="edit_p.php?id=' . $row['id'] . '" type="button" class="btn btn-warning btn-sm">
                                    <span class="glyphicon glyphicon-edit"></span>
                                    </a></td>';

                            echo "</tr>";
                        }
                    } else { // if no entries
                        echo "<div class='alert alert-warning'>Nu s-au gasit pacienti!</div>";
                    }

                    mysqli_close($conn);
            //Warning: mysqli_close(): Couldn't fetch mysqli

                    ?>

                </table>
            </div>
        </div><!-- /.row -->

    </div><!-- end .container-fluid -->

    <footer class="text-center">
        <hr>
        <small>Pet Love Vet &hearts;</small>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
