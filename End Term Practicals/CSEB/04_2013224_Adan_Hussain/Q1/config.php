<?php
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$databasename = "BookStore";

$conn = mysqli_connect($hostname,$username);
mysqli_select_db($con,$databasename);
if($conn){
    echo "Connection success...";
} 
else{
    echo "Connection fail..." . mysqli_connect_error();
}
?>