<?php
    $databaseName = "BookStore";
    $databasehost = "localhost";
    $username="root";
    $password="";

    $mysql = new mysqli($databasehost,$username,$password,$databaseName);

    if($mysql->connect_errno)
    {
        die("mysql not connected " . $mysql->connect_error);
    }
    else{
        echo "Succesfully connected";
    }
?>