<?php
$hostname="localhost";
$username="root";
$password="";
$databaseName="BookStore";

$conn=mysqli_connect($hostname,$username,$password,$databaseName);
if($conn)
{
     echo "Connection Succesfull...";
}
else
{
     echo "Connection Failed..."+mysqli_connect_error();
}
?>