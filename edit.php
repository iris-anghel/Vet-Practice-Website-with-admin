<?php
session_start();

// if user is not logged in
if( !$_SESSION['loggedInUser'] ) {

    header("Location: login.php");
}

// get ID sent by GET collection
$clientID = $_GET['id'];

include('includes/connection.php');

include('includes/functions.php');

// query the database with client ID
$query = "SELECT * FROM owner_info WHERE id='$clientID'";
$result = mysqli_query( $conn, $query );

// if result is returned
if( mysqli_num_rows($result) > 0 ) {

    while( $row = mysqli_fetch_assoc($result) ) {
        $clientName     = $row['owner_last_name'];
        $clientFirstName = $row['owner_first_name'];
        $clientAddress  = $row['owner_address'];
        $clientPhone    = $row['owner_phone'];
        $clientEmail    = $row['owner_email'];
    }
} else { // no results returned
    $alertMessage = "<div class='alert alert-warning'>Nothing to see here. <a href='clients.php'>Head back</a>.</div>";
}

if( isset($_POST['update']) ) {

    $clientName       = validateFormData( $_POST["clientName"] );
    $clientFirstName  = validateFormData( $_POST["clientFirstName"] );
    $clientAddress    = validateFormData( $_POST["clientAddress"] );
    $clientPhone      = validateFormData( $_POST["clientPhone"] );
    $clientEmail      = validateFormData( $_POST["clientEmail"] );

    // new database query & result
    $query = "UPDATE owner_info
            SET owner_last_name='$clientName',
            owner_first_name='$clientFirstName',
            owner_address='$clientAddress',
            owner_phone='$clientPhone',
            owner_email='$clientEmail'
            WHERE id='$clientID'";

    $result = mysqli_query( $conn, $query );

    if( $result ) {
        header("Location: clients.php?alert=updatesuccess");

    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

// if delete button was submitted
if( isset($_POST['delete']) ) {

    $alertMessage = "<div class='alert alert-danger'>
                        <p>Sunteti sigur ca doriti sa stergeti acest client?</p><br>
                        <form action='". htmlspecialchars( $_SERVER["PHP_SELF"] ) ."?id=$clientID' method='post'>
                            <input type='submit' class='btn btn-danger btn-sm' name='confirm-delete' value='Da'>
                            <a type='button' class='btn btn-default btn-sm' data-dismiss='alert'>Nu</a>
                        </form>
                    </div>";

}

// if confirm delete button was submitted
if( isset($_POST['confirm-delete']) ) {

    // new database query & result
    $query = "DELETE FROM owner_info WHERE id='$clientID'";
    $result = mysqli_query( $conn, $query );

    if( $result ) {
        header("Location: clients.php?alert=deleted");

    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

}

mysqli_close($conn);
include('header.php');
?>

    <div class="container-fluid">

        <h2 class="text-center">Editeaza proprietar</h2>
        <hr class="black-hr">

        <?php if(isset($alertMessage)) {echo $alertMessage;} ?>

        <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>?id=<?php echo $clientID; ?>" method="post" class="form-horizontal">
            <div class="form-group">
                <label for="client-name" class="col-sm-3 control-label">Nume *</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="client-name" name="clientName" value="<?php echo $clientName; ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="client-firstName" class="col-sm-3 control-label">Prenume *</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="client-firstName" name="clientFirstName" value="<?php echo $clientFirstName; ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="client-address" class="col-sm-3 control-label">Adresa *</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="client-address" name="clientAddress" value="<?php echo $clientAddress; ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="client-phone" class="col-sm-3 control-label">Telefon *</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="client-phone" name="clientPhone" value="<?php echo $clientPhone; ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="client-email" class="col-sm-3 control-label">Email *</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="client-email" name="clientEmail" value="<?php echo $clientEmail; ?>" required>
                </div>
            </div>
            <div class="col-sm-6 col-sm-offset-3">
                <button type="submit" class="btn btn-danger pull-left" name="delete">Sterge <i class="fa fa-trash-o"></i></button>
                <div class="pull-right">
                    <a href="clients.php" type="button" class="btn btn-default">Renunta</a>
                    <button type="submit" class="btn btn-success" name="update">Salveaza</button>
                </div>
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
