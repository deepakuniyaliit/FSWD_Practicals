<?php
$hostName = '127.0.0.1';
$userName = 'root';
$password = '';
$databaseName = 'WebPractical'; 

$conn = mysqli_connect($hostName, $userName, $password, $databaseName);

if($conn){
}
else{
echo mysqli_error();
}

?>