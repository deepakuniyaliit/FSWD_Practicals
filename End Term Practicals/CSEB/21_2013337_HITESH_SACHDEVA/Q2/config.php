<?php
$hostname = "localhost";
$username = "root";
$password = "";
$databasename = "bookstore";

$conn = mysqli_connect($hostname, $username, $password, $databasename);
if($conn){
	echo "Connection Successfully Established....";
}
else{
	echo "Connection failed ";
}
?>