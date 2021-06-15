<?php
    $hostname="127.0.0.1";
    $user="root";
    $password="";
    $databasename ="bookstore";


    $conn=mysqli_connect($hostname,$user,$password,$databasename);

    if($conn)
        echo "CONNECTION SUCESSFULL....";
    else
        echo "CONNECTION ERROR";
?>