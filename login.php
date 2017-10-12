<?php
session_start();

include('includes/functions.php');
require_once('includes/connection.php');

// if login form was submitted
if( isset( $_POST['login'] ) ) {

    $formEmail = validateFormData( $_POST['email'] );
    $formPass = validateFormData( $_POST['password'] );

//    require_once('includes/connection.php');

    $query = "SELECT username, password FROM vets WHERE email='$formEmail'";

    $result = mysqli_query( $conn, $query );

    //$rowcount=mysqli_num_rows($result);
    var_dump($rowcount);

    //if($rowcount > 0 ) {
    if(true ) {

        // store basic user data in variables
        while( $row = mysqli_fetch_assoc($result) ) {
            $name       = $row['username'];
            $hashedPass = $row['password'];
        }

        // verify hashed password with submitted password
        if( password_verify( $formPass, $hashedPass ) ) {

            // correct login details - store data in SESSION variables
            $_SESSION['loggedInUser'] = $name;

            // redirect user to clients page
            header( "Location: clients.php" );
        } else { // hashed password didn't verify

            // error message
            $loginError = "<div class='alert alert-danger'>Username sau parola gresita</div>";
        }

    } else { // there are no results in database

        $loginError = "<div class='alert alert-danger'>Utilizatorul nu exista. <a class='close' data-dismiss='alert'>&times;</a></div>";
    }

}
// var_dump($conn); // is NULL

mysqli_close($conn);
// Undefined variable: conn
//mysqli_close() expects parameter 1 to be mysqli, null given

//$password = password_hash("denisa", PASSWORD_DEFAULT);
//echo $password;

//$password = password_hash("paula", PASSWORD_DEFAULT);
//echo $password;

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pet Love Vet</title>
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

    <body>

<!--        css          -->

        <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" id="pet-love-logo" href="index.html">
                    <img src="#" height="80" alt="logo">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.html" >Acasa</a></li>
                    <li><a href="services.html">Servicii</a></li>
                    <li><a href="resources.html">Articole</a></li>
                    <li><a href="#footer1">Contact</a></li>
                    <li><a href="login.php" class="active-nav">Login <i class="fa fa-sign-in"></i></a></li>
                </ul>
            </div>
        </div>
    </nav><!--   end nav  -->

<!--
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
//                if( $_SESSION['loggedInUser'] ) {
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
//                } else {
                ?>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="login.php">Intra in cont <i class="fa fa-sign-in"></i></a></li>
                </ul>
                <?php
//                }
                ?>

            </div>

        </div>

    </nav>
-->

    <div class="container-fluid">

        <h1>Gestiune Pet Love Vet</h1>
        <?php if(isset($loginError)) {echo $loginError;} ?>
        <div class="row">
            <div class="col-md-6" id="sign-in-form-wrapper">

                <div id="sign-in-form">
                    <form class="form " action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-user-circle-o"></i></span>
                            <label for="login-email" class="sr-only">Email</label>
                            <input type="text" class="form-control" name="email" id="login-email" placeholder="Email" required>
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <label for="login-password" class="sr-only">Parola</label>
                            <input type="password" class="form-control" name="password" id="login-password" placeholder="Parola" required>
                        </div>

                        <button type="submit" class="btn btn-block btn-warning" name="login" id="login">Intra in cont</button>
                    </form>

                </div>
            </div>
        </div>

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
