<?php
$hostname="localhost";
$username="root";
$password="";
$database="Web";

$conn=mysqli_connect($hostname,$username,$password,$database);

if($conn)
echo"Sucessful";

else
echo"Fail"+mysqli_connect_error();