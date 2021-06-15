<?php 
$hostname ="localhost";
$username ="root";
$password ="";
$databasename ="bookStore";

$con =mysqli_connect($hostname, $username, $password, $databasename);
if ($con) {
	echo "connection successful...";
}
else{
	echo "connection failed ...." + mysqli_connect_error();
}

 ?>