<?php
$hostname="localhost";
$username="root";
$password="";
$databasename="WebPractical";

$conn=mysqli_connect($hostname,$username,$password,$databasename);
if($conn){
	echo "Database connection successful";
else{
	echo"Database connection unsuccessful" +mysqli_connect_error();
}
?>
