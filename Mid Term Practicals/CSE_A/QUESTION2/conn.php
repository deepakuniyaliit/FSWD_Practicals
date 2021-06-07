<?php
$hostname = "localhost";
$username = "root";
$password = "root";
$databasename = "WebPractical";

$connection = mysqli_connect($hostname,$username,$password,$databasename);
if($connection)
{
    echo  "Connection successful";
}
else
{
    echo "Connection failed..." + mysqli_connect_error();
}