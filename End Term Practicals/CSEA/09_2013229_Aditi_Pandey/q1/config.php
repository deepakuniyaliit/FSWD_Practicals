<?php
$hostname="localhost";
$username="root";
$password="";
$databasename="web";

$conn= mysqli_connect($hostname,$username,$password,$databasename);
if($conn)
{
    echo "connection successful";
}
else{
    echo "connection failed"+mysqli_connect_error();
}

?>