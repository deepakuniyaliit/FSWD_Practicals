<?php
$databaseHost = 'localhost';
$databaseName = 'Q1';
$databaseUserName = 'root';
$databasePassword = '';

//OOP style programming to connect to database
$mysqli = new mysqli($databaseHost, $databaseUserName, $databasePassword, $databaseName); 
if($mysqli->connect_error){
	die('Connection Failed - ' . $mysqli->connect_error);
}
//Above connection can be made in procedural way as well.
?>