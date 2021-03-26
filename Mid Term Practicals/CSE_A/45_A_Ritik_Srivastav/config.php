<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "webpractical";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
	echo "Unable to connect",mysqli_connect_error;
}else{
	echo "<h5>Connected.</h5><br><br>";
}
?>