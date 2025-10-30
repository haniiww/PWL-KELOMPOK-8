<?php
    $host="localhost";
    $username="root";
    $password="";
    $database="user_data";

    $connection = mysqli_connect($host, $username, $password, $database);

    if(!$connection){
        die("Database Connection Failed: " . mysqli_connect_error());
    }
?>