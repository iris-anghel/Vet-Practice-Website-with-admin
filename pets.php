<?php
session_start();

// if user is not logged in
if( !$_SESSION['loggedInUser'] ) {

    header("Location: login.php");
}

include('includes/connection.php');

// query & result
                            // PROBLEM????
        //is the problem here??? if the foreign key works, selecting * from pet_info is supposed to list the owner ID
        //do I have to join the owner_info table???????

//which one?
$query = "SELECT * FROM pet_info";
$query = "SELECT * FROM pet_info JOIN owner_info WHERE pet_info.id_owner = owner_info.id";


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
include('header.php');
?>

    <div class="container-fluid">

        <h2>Lista pacienti</h2>
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
                <a href="add_p.php" type="button" class="btn management-button"><span class="glyphicon glyphicon-plus"></span> Adauga pacient</a>
            </div>
        </div>

        <?php if(isset($alertMessage)) {echo $alertMessage;} ?>

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

                            echo '<td><a href="edit_p.php?id=' . $row['id'] . '" type="button" class="btn btn-sm">
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
