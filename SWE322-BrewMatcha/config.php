<?php

    $hostip = "127.0.0.1";
    $username = "root";
    $password = "";
    $db = "coffee_db";

    $conn = mysqli_connect($hostip, $username, $password, $db);

    if(!$conn){
        echo "Connection Error";
    }
    else
    
    
?>
