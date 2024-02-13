<?php

    $host = "localhost"; 
    $user = "root"; 
    $password = ""; 

    $database = "experience"; 
    $database_personel = "experience-personel"; 

    $mysqli = new mysqli($host, $user, $password, $database);
    $mysqli_personel = new mysqli($host, $user, $password, $database_personel);

    if ($mysqli->connect_error || $mysqli_personel->connect_error ) {
        die("Connection failed");
    }

?>