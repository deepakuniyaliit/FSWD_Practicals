<?php
    $host='localhost';
    $username='root';
    $password='';
    $dbname = "my_db";
    $conn=mysqli_connect($host,$username,$password,"$dbname");
    if(!$conn)
        {
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>