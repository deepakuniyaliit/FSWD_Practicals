<?php
$hostname="localhost";
$username="root";
$password="";
$databasename="WebPractical";

$conn = mysqli_connect($hostname, $username, $password, $databasename);
if($conn)
{
     echo "Connection successful...";
}
else{
     echo "Connection failes.."+mysqli_connect_error();
}

?>