<?php
$hostname = "127.0.0.1";
$username = "root";
$password = "";
$databasename = "BookStore";

$conn = mysqli_connect($hostname, $username, $password, $databasename);
if($conn){
    echo "Connection Successful...";
}
else{
    echo "Connection failed..." + mysqli_connect_error();
}
?>