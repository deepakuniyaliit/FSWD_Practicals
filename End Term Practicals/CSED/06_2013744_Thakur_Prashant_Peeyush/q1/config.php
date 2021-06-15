<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'bookstore';

    $conn = mysqli_connect($hostname, $username, $password, $dbname);
   
    if($conn){
        echo "Connection Successful";
    }
    else
    {
        echo "Connection Failed" + mysqli_connect_error();
    }
?>