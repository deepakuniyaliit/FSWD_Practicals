<?php
$hostname = "localhost";
$username = "root";
$password = "";
$databasename = "BookStore";

$conn = mysqli_connect($hostname,$username,$password,$databasename);

if($conn){
    echo "Connection successful...";
} 
else{
    echo "Connection failed..." . mysqli_connect_error();
}
?>