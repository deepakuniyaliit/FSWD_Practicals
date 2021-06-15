<?php
$hostname="localhost";
$username="root";
$password="";
$Databasename="BookStore";

$comm= mysqli_connect($hostname,$username,$password,$Databasename);
if($comm)
{
    echo" ";
}
else{
    echo"Connection Failed..." + mysqli_connect_error();
}
?>