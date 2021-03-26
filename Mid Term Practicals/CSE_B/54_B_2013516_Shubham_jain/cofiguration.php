<?php
$hostname = "127.0.0.1";
$username ="root";
$password = "";
$databasename = "web";

$conn = mysqli_connect($hostname,$username,$password,$databasename);

if($conn)
{
    echo "Connection sucessful";
}
else
{
    echo "Connection Failed "+ mysqli_connect_error();
}
?>