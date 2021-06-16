<?php
$user='root';
$pass='';
$db='aaa';
$con=mysqli_connect('localhost:3307',$user,$pass,$db) or
    die("Connection Failed: ".mysqli_connect_error());
echo "Connected Successfully"."<br>";
?>