<?php
$hostname="localhost";
$username="root";
$password="";
$database="Webpratical";

$conn=mysqli_connect($hostname, $username ,$password ,$database);
if($conn){
	echo "Connection Successful...";
}
else{
	echo "Connection failed..." +mysqli_connect_error();
}
?>
