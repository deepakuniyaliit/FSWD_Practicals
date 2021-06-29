<?php

    //Database Connection
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = "BookStore";

    $conn = mysqli_connect($servername, $username, $password, "$dbname");
    if(!$conn){
        die('Could not connect to MySQL server :'.mysql_error());
    }
?>
