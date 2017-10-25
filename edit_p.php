<?php
session_start();

// if user is not logged in
if( !$_SESSION['loggedInUser'] ) {

    header("Location: login.php");
}

// get ID sent by GET collection
$petID = $_GET['id'];

include('includes/connection.php');

include('includes/functions.php');

// query the database with client ID
$query = "SELECT * FROM pet_info WHERE id='$petID'";

$result = mysqli_query( $conn, $query );

// if result is returned
if( mysqli_num_rows($result) > 0 ) {

    while( $row = mysqli_fetch_assoc($result) ) {
        $petName       = $row['pet_name'];
        $petDob        = $row['pet_dob'];
        $petSpecies    = $row['pet_species'];
        $gender        = $row['gender'];
        $petBreed      = $row['pet_breed'];
        $cipData       = $row['cip_data'];
        $steryl        = $row['steryl'];
        $passport      = $row['pet_pass'];
        $obs           = $row['obs'];
    }
} else { // no results returned
    $alertMessage = "<div class='alert alert-warning'>Nu exista pacienti. <a href='pets.php'>Mergi inapoi</a>.</div>";
}

// if update button was submitted
if( isset($_POST['update_p']) ) {

    // set variables
    $petName    = validateFormData( $_POST["petName"] );
    $petDob     = validateFormData( $_POST["petDob"] );
    $petSpecies  = validateFormData( $_POST["petSpecies"] );
    $gender      = validateFormData( $_POST["gender"] );
    $petBreed   = validateFormData( $_POST["petBreed"] );
    $cipData    = validateFormData( $_POST["cipData"] );
    $steryl     = validateFormData( $_POST["steryl"] );
    $passport   = validateFormData( $_POST["passport"] );
    $obs        = validateFormData( $_POST["obs"] );

    // new database query & result
    $query = "UPDATE pet_info
            SET pet_name = '$petName',
            pet_dob = '$petDob',
            pet_species = '$petSpecies',
            gender = '$gender',
            pet_breed = '$petBreed',
            cip_data = '$cipData',
            steryl = '$steryl',
            pet_pass = '$passport',
            obs = '$obs'
            WHERE id = '$petID'";

    $result = mysqli_query( $conn, $query );

    if( $result ) {
        header("Location: pets.php?alert=updatesuccess");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

// if delete button was submitted
if( isset($_POST['delete_p']) ) {

    $alertMessage = "<div class='alert alert-danger'>
                        <p>Sunteti sigur ca doriti sa stergeti acest pacient?</p><br>
                        <form action='". htmlspecialchars( $_SERVER["PHP_SELF"] ) ."?id=$petID' method='post'>
                            <input type='submit' class='btn btn-danger btn-sm' name='confirm-delete_p' value='Da'>
                            <a type='button' class='btn btn-default btn-sm' data-dismiss='alert'>Nu</a>
                        </form>
                    </div>";

}

// if confirm delete button was submitted
if( isset($_POST['confirm-delete_p']) ) {

    // new database query & result
    $query = "DELETE FROM pet_info WHERE id='$petID'";
    $result = mysqli_query( $conn, $query );

    if( $result ) {
        header("Location: pets.php?alert=deleted");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }

}

mysqli_close($conn);
include('header.php');
?>

    <div class="container-fluid">

        <h2 class="text-center">Editeaza date animal de companie</h2>
        <hr class="black-hr">

        <?php if(isset($alertMessage)) {echo $alertMessage;} ?>

        <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>?id=<?php echo $petID; ?>" method="post" id="edit_pet_form" class="form-horizontal">
            <div class="form-group">
                <label for="pet-name" class="col-sm-3 control-label">Nume *</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="pet-name" name="petName" value="<?php echo $petName; ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="pet-dob" class="col-sm-3 control-label">Data nasterii *</label>
                <div class="col-sm-6">
                    <input type="date" class="form-control" id="pet-dob" name="petDob" value="<?php echo $petDob; ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="pet-species" class="col-sm-3 control-label">Tip animal *</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="pet-species" name="petSpecies" value="<?php echo $petSpecies; ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Sex *</label>
                <div class="col-sm-6">
                    <label class="radio-inline"> <input type="radio" name="gender" id="masculine" value="masculin" checked> Masculin </label>
                    <label class="radio-inline"> <input type="radio" name="gender" id="feminine" value="feminin"> Feminin </label>
                </div>
            </div>
            <div class="form-group">
                <label for="pet-breed" class="col-sm-3 control-label">Rasa *</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="pet-breed" name="petBreed" value="<?php echo $petBreed; ?>" required>
                </div>
            </div>
            <div class="form-group">
                <label for="cip-data" class="col-sm-3 control-label">Date microcip</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="cip-data" name="cipData" value="<?php echo $cipData; ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-3 control-label">Sterilizat *</label>
                <div class="col-sm-6">
                    <label class="radio-inline"> <input type="radio" name="steryl" id="positive" value="da" checked> Da </label>
                    <label class="radio-inline"> <input type="radio" name="steryl" id="negative" value="nu"> Nu </label>
                </div>
            </div>
            <div class="form-group">
                <label for="passport" class="col-sm-3 control-label">Carnet de sanatate</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="passport" name="passport" value="<?php echo $passport; ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="obs" class="col-sm-3 control-label">Observatii</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="obs" name="obs" value="<?php echo $obs; ?>">
                </div>
            </div>

            <div class="col-sm-6 col-sm-offset-3">
                <button type="submit" class="btn btn-danger pull-left" name="delete_p">Sterge <i class="fa fa-trash-o"></i></button>
                <div class="pull-right">
                    <a href="pets.php" type="button" class="btn btn-default">Renunta</a>
                    <button type="submit" class="btn btn-success" name="update_p">Salveaza</button>
                </div>
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
