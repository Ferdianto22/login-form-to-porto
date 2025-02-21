<?php

    $host = "localhost";
    $user = "root";
    $pass ="";
    $db = "loginForm";
    $conn = new mysqli($host, $user, $pass, $db);
    if($conn -> connect_error){
        echo "Failed connect to database".$conn->connect_error;
    }
?>