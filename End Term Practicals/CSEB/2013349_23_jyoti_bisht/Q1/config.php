<?php
$hostname="localhost";
$username="admin";
$password="admin";
$database="bookstore";

$conn=mysqli_connect($hostname, $username ,$password ,$database);
if($conn){
	echo "Connection Successful...";
}
else{
	echo "Connection failed..." +mysqli_connect_error();
}
?>
