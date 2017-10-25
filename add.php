<?php
session_start();

// if user is not logged in
if( !$_SESSION['loggedInUser'] ) {

    header("Location: login.php");
}

include('includes/connection.php');

include('includes/functions.php');

// if add button was submitted
if( isset( $_POST['add'] ) ) {

    // set all variables to empty by default
    $clientName = $clientFirstName = $clientAddress = $clientPhone = $clientEmail = "";

    $clientName     = validateFormData( $_POST["clientName"] );
    $clientFirstName  = validateFormData( $_POST["clientFirstName"] );
    $clientAddress  = validateFormData( $_POST["clientAddress"] );
    $clientPhone    = validateFormData( $_POST["clientPhone"] );
    $clientEmail    = validateFormData( $_POST["clientEmail"] );

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

            echo "Error: ". $query ."<br>" . mysqli_error($conn);
        }

    }

}

mysqli_close($conn);
include('header.php');
?>

    <div class="container-fluid">

        <h2 class="text-center">Adauga proprietar</h2>
        <hr class="black-hr">

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
                    <button type="submit" class="btn btn-success pull-right" name="add">Adauga</button>
            </div>
        </form>

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
