<?php
    $server="BookStore";
    $username="root";
    $password="";
    $dbname="mysql_db";
    $conn=mysqli_connect($server,$username,$password,"$dbname");
    if(!$conn){
        die("Not connected to server");
    }
?>