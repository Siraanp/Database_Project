<?php 
    $con=mysqli_connect ("localhost", 'root', '','hoshihoteldb');

    if(!$con) {
        die("Could not connect: ".mysqli_connect_error());
    }

?>