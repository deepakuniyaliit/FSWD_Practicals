<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database_name = 'webpractical';
$conn = mysqli_connect($hostname, $username, $password, $database_name);
if (isset($_POST["submit"])) {
	$un = $_POST["username"];
	$e = $_POST["email"];
	$c = $_POST["phone"];
	$g = $_POST["gender"];
	$ct = $_POST["city"];
	$sql = "INSERT INTO users (`username`,`email`,`contact`,`gender`,`city`) VALUES ('$un','$e','$c', '$g','$ct')";
	mysqli_query($conn, $sql);
}
?>