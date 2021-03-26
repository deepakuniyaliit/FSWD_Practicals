<?php
$hostname = "localhost";
$username = "root";
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