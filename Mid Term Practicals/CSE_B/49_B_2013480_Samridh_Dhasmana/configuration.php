<?php
$hostname="localhost";
$username="root";
$password="";
$databaseName="webpractical";

$conn=mysqli_connect($hostname,$username,$password,$databaseName);
if($conn){
 echo "Connection Sucessful..";
}
else{
    echo "Connection Failed"+ mysqli_connect_error();
}
?>