<?php
$user = "root";
$password = "";
$databasename = "userdata";
$servername='localhost';

$conn = mysqli_connect($servername, $user, $password, $databasename);
if($conn){
    echo "Connection Successful...";
}
else{
    echo "Connection failed..." + mysqli_connect_error();
}
?>