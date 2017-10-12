<?php

$server     = "localhost";
$username   = "root";
$password   = "";
$db         = "petlovevet";

// create a connection
$conn = mysqli_connect( $server, $username, $password, $db );

// check connection
if( !$conn ) {
    die( "Connection failed: " . mysqli_connect_error() );
}

?>
