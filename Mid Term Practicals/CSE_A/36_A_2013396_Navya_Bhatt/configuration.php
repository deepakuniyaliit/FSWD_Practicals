<?php
$hostname = "localhost";
$username = "root";
$password = "";
$databasename = "webpractical";

$conn = mysqli_connect($hostname,$username,$password,$databasename);
if($conn){
    echo "Connection success...";
} 
else{
    echo "Connection fail..." + mysqli_connect_error();
}
?>
