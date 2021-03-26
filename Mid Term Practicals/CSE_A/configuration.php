<?php
	$hostname = "localhost:3300";
	$username = "root";
	$password = "";
	$databasename = "Web";

	$conn = mysqli_connect($hostname, $username, $password, $databasename);
	if(!($conn)){
		echo "Connection failed\n" + mysqli_connect_error();
	}
?>