<?php
$hostname="localhost";
$username="root";
$password=" ";
$db="WebPractical";

$conn=new mysqli($hostname,$username,$password,$db);

if($conn->connect_error){
echo "Connection Failed.....";
}
echo "Connected Success....";
?>