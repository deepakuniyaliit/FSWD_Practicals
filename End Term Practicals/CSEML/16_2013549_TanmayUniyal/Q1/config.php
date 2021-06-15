<?php

    //Database Connection
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = "database1";

    $conn = mysqli_connect($servername, $username, $password, "$dbname");
    if(!$conn){
        die('could not connect to Mysql server :'.mysql_error());
    }
?>