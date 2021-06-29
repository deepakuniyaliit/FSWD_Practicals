<?php

$user ='BookStore';
$pass ='';
$db='tanmayrauthan' ;
//create connection
$con =  mysqli_connect('localhost', $user, $pass,$db) or
    die("Connection failed: " . mysqli_connect_error());

echo "Connected successfully";


?>