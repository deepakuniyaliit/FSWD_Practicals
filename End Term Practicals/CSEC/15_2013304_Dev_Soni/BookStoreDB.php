<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname"my_bookstore";
    $conn=mysqli_connect($servername,$username,$password,"$dbname");
    if(!$conn){
        die('Could not able to connect MySQL server:'.mysql_error());
    }
?>