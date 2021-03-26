<?php
	$hostname = "localhost:3300";
	$username = "root";
	$password = "";
	$databasename = "WebPractical";

	$conn = mysqli_connect($hostname, $username, $password, $databasename);
	if(!($conn)){
		echo "Connection failed\n" + mysqli_connect_error();
	}
?>