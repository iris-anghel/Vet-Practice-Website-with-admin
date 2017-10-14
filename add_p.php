<?php
session_start();

// if user is not logged in
if( !$_SESSION['loggedInUser'] ) {

    header("Location: login.php");
}

include('includes/connection.php');

include('includes/functions.php');

// if add button was submitted
if( isset( $_POST['add_p'] ) ) {

    // set all variables to empty by default
    $petName = $petDob = $petSpecies = $gender = $petBreed = $cipData = $steryl = $passport = $obs = "";

    $petName    = validateFormData( $_POST["petName"] );
    $petDob     = validateFormData( $_POST["petDob"] );
    $petSpecies  = validateFormData( $_POST["petSpecies"] );
    $gender     = validateFormData( $_POST["gender"] );
    $petBreed   = validateFormData( $_POST["petBreed"] );
    $cipData    = validateFormData( $_POST["cipData"] );
    $steryl     = validateFormData( $_POST["steryl"] );
    $passport    = validateFormData( $_POST["passport"] );
    $obs        = validateFormData( $_POST["obs"] );

    // if required fields have data
    if( $petName && $petDob && $petSpecies && $gender && $petBreed && $cipData && $steryl && $passport ) {

        // create query
        $query = "INSERT INTO pet_info (id, pet_name, pet_dob, pet_species, gender, pet_breed, cip_data, steryl, pet_pass, obs) VALUES (NULL, '$petName', '$petDob', '$petSpecies', '$gender', '$petBreed', '$cipData', '$steryl', '$passport', '$obs')";
//  how to insert owner id????

        $result = mysqli_query( $conn, $query );

        if( $result ) {
            header( "Location: pets.php?alert=success" );
        } else {
            echo "Error: ". $query ."<br>" . mysqli_error($conn);
        }
    }
}

mysqli_close($conn);
include('header.php');
?>

    <div class="container-fluid">

        <h2 class="text-center">Adauga animal de companie</h2>
        <hr class="black-hr">

        <form action="<?php echo htmlspecialchars( $_SERVER['PHP_SELF'] ); ?>" method="post" id="add_pet_form" class="form-horizontal">
            <div class="form-group">
                <label for="pet-name" class="col-sm-3 control-label">Nume *</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="pet-name" name="petName" value="" required>
                </div>
            </div>
            <div class="form-group">
                <label for="pet-dob" class="col-sm-3 control-label">Data nasterii *</label>
                <div class="col-sm-6">
                    <input type="date" class="form-control" id="pet-dob" name="petDob" value="" required>
                </div>
            </div>
            <div class="form-group">
                <label for="pet-species" class="col-sm-3 control-label">Tip animal *</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="pet-species" name="petSpecies" value="" required>
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
                    <input type="text" class="form-control" id="pet-breed" name="petBreed" value="" required>
                </div>
            </div>
            <div class="form-group">
                <label for="cip-data" class="col-sm-3 control-label">Date microcip *</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="cip-data" name="cipData" value="" required>
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
                <label for="passport" class="col-sm-3 control-label">Carnet de sanatate *</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="passport" name="passport" value="" required>
                </div>
            </div>
            <div class="form-group">
                <label for="obs" class="col-sm-3 control-label">Observatii</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="obs" name="obs" value="">
                </div>
            </div>

            <div class="col-sm-6 col-sm-offset-3">
                    <a href="pets.php" type="button" class="btn btn-default">Renunta</a>
                    <button type="submit" class="btn btn-success pull-right" name="add_p">Adauga</button>
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
