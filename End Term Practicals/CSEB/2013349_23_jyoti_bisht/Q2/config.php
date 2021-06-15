<?php
$hostname = "localhost";
$username = "admin";
$password = "admin";
$databasename = "Bookstore";

$conn = mysqli_connect($hostname, $username, $password, $databasename);
if($conn){
    echo "Connection Successful!";
}
else{
    echo "Connection failed..." + mysqli_connect_error();
}
?>
