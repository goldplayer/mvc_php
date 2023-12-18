<?php

    $host = '127.0.0.1';
    $db_name = '';
    $username = '';
    $password = '';


    $conn = new mysqli($host, $username, $password, $db_name);
    if($conn->connect_error){
        die('Connection failed: ' . $conn->connect_error);
    }else{
        echo 'Connected to database successfully';  
    }

    $conn->close();


?>