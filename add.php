<?php
session_start();

// if user is not logged in
//if( !$_SESSION['loggedInUser'] ) {

    // send them to the login page
//    header("Location: login.php");
//}

// connect to database
include('includes/connection.php');

// include functions file
include('includes/functions.php');

// if add button was submitted
if( isset( $_POST['add'] ) ) {

    // set all variables to empty by default
    $clientName = $clientFirstName = $clientAddress = $clientPhone = $clientEmail = "";

    // check to see if inputs are empty
    // create variables with form data
    // wrap the data with our function

    $clientName = validateFormData( $_POST["clientName"] );
    $clientFirstName  = validateFormData( $_POST["clientFirstName"] );
    $clientAddress  = validateFormData( $_POST["clientAddress"] );
    $clientPhone    = validateFormData( $_POST["clientPhone"] );
    $clientEmail = validateFormData( $_POST["clientEmail"] );

    // if required fields have data
    if( $clientName && $clientFirstName && $clientAddress && $clientPhone && $clientEmail) {

        // create query
        $query = "INSERT INTO owner_info (id, owner_last_name, owner_first_name, owner_address, owner_phone, owner_email) VALUES (NULL, '$clientName', '$clientFirstName', '$clientAddress', '$clientPhone', '$clientEmail')";

        $result = mysqli_query( $conn, $query );

        // if query was successful
        if( $result ) {

            // refresh page with query string
            header( "Location: clients.php?alert=success" );
        } else {

            // something went wrong
            echo "Error: ". $query ."<br>" . mysqli_error($conn);
        }

    }

}

// close the mysql connection
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
                if( $_SESSION['loggedInUser'] ) { // if user is logged in
                ?>
                <ul class="nav navbar-nav">
                    <li><a href="pets.php"><i class="fa fa-paw"></i> Animale de companie</a></li>
                    <li><a href="add_pet.php"><i class="fa fa-plus"></i> Adauga pacient</a></li>
                    <li><a href="clients.php"><i class="fa fa-address-book"></i> Proprietari</a></li>
                    <li><a href="add.php"><i class="fa fa-plus"></i> Adauga proprietar</a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <p class="navbar-text">Bine ai venit!</p>

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

        <h1>Adauga proprietar</h1>

        <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post" class="form-horizontal">
            <div class="form-group">
                <label for="client-name" class="col-sm-3 control-label">Nume *</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="client-name" name="clientName" value="" required>
                </div>
            </div>
            <div class="form-group">
                <label for="client-firstName" class="col-sm-3 control-label">Prenume *</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="client-firstName" name="clientFirstName" value="" required>
                </div>
            </div>
            <div class="form-group">
                <label for="client-address" class="col-sm-3 control-label">Adresa *</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="client-address" name="clientAddress" value="" required>
                </div>
            </div>
            <div class="form-group">
                <label for="client-phone" class="col-sm-3 control-label">Telefon *</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="client-phone" name="clientPhone" value="" required>
                </div>
            </div>
            <div class="form-group">
                <label for="client-email" class="col-sm-3 control-label">Email *</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="client-email" name="clientEmail" value="" required>
                </div>
            </div>
            <div class="col-sm-6 col-sm-offset-3">
                    <a href="clients.php" type="button" class="btn btn-default">Renunta</a>
                    <button type="submit" class="btn btn-success pull-right" name="add">Adauga proprietar</button>
            </div>
        </form>

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
