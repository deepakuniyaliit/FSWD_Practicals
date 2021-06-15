<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'BookStore';

    $db_handle = mysqli_connect($host, $username, $password, $db_name);
    if($db_handle == false){
        echo "Failed to connect with database!";
    }
?>