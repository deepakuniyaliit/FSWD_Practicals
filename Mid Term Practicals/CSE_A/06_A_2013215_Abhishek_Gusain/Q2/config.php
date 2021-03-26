<?php
	$hostname = "localhost"; 
	$user = "root";
	$password = ""; 
	$databasename = "web";

	$conn = mysqli_connect($hostname , $user , $password , $databasename); 

	if(!$conn){
		echo "Connection Aborted...." + mysqli_connect_error(); 
	}
?>