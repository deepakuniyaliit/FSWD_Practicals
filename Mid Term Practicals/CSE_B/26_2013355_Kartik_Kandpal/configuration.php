<?php
$hostname = "localhost";
$username = "users";
$password = "";
$databasename = "webpractical";

$conn = mysqli_connect($hostname, $username, $password, $databasename);
if($conn){
	echo "Connection Established....";
}
else{
	echo "Connection failed ";
}
?>