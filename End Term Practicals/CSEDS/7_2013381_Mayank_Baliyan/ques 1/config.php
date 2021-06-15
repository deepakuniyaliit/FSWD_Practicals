<?php
$hostname = "localhost";
$username = "root";
$password = "";
$databasename = "web1";

$conn = mysql_connect($hostname,$username,$password,$database);
if($conn){
echo"Connection Successful...";
}
else
{
echo "Connection failed..." + mysql_connect_error();
}
?>