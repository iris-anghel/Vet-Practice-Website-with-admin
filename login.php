<?php
session_start();

include('includes/functions.php');
include('includes/connection.php');

// if login form was submitted
if( isset( $_POST['login'] ) ) {

    $formUsername = validateFormData( $_POST['username'] );
    $formPass = validateFormData( $_POST['password'] );

    $query = "SELECT username, password FROM vets WHERE username='$formUsername'";

    $result = mysqli_query( $conn, $query );

    $rowcount = mysqli_num_rows($result);

    if($rowcount > 0 ) {

        // store basic user data in variables
        while( $row = mysqli_fetch_assoc($result) ) {
            $name       = $row['username'];
            $hashedPass = $row['password'];
        }

        // verify hashed password with submitted password
        if( password_verify( $formPass, $hashedPass ) ) {

            // correct login details - store data in SESSION variables
            $_SESSION['loggedInUser'] = $name;

            header( "Location: clients.php" );
        } else {

            $loginError = "<div class='alert alert-danger'>Utilizator sau parola gresita</div>";
        }

    } else { // there are no results in database

        $loginError = "<div class='alert alert-danger'>Utilizatorul nu exista. <a class='close' data-dismiss='alert'>&times;</a></div>";
    }

}

mysqli_close($conn);

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
                    <li><a href="services.php">Servicii</a></li>
                    <li><a href="resources.php">Articole</a></li>
                    <li><a href="login.php" class="active-nav">Login</a></li>
                </ul>
            </div>
        </div>
    </nav><!--   /.nav  -->

    <div class="container-fluid">

        <h1 class="centered-single-items">Gestiune <strong>Pet Love Vet</strong></h1>
        <?php if(isset($loginError)) {echo $loginError;} ?>
        <div class="row">
            <div class="col-md-8 col-md-offset-2" id="sign-in-form-wrapper">

                <div id="sign-in-form">
                    <form class="form " action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-user-circle-o"></i></span>
                            <label for="login-username" class="sr-only">Nume utilizator</label>
                            <input type="text" class="form-control" name="username" id="login-username" placeholder="Utilizator" required>
                        </div>
                        <div class="form-group input-group">
                            <span class="input-group-addon"><i class="fa fa-key"></i></span>
                            <label for="login-password" class="sr-only">Parola</label>
                            <input type="password" class="form-control" name="password" id="login-password" placeholder="Parola" required>
                        </div>

                        <button type="submit" class="btn btn-block management-button" name="login" id="login">Intra in cont</button>
                    </form>

                </div>
            </div>
        </div>

    </div><!-- /.container-fluid -->

    <footer class="text-center">
        <hr>
        <small>Pet Love Vet &hearts;</small>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
