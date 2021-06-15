<?
$user='root';
$pass='';
$con=mysqli_connect('localhost:3307',$user,$pass) or
    die("Connection failed:".mysqli_connect_error());

echo "Connected Successfully";

$sql="CREATE DATABASE BOOKSTORE";
if(mysqli_query($con,$sql))
    echo "Database created successfully";
else
    echo "Error creating database: ".mysqli_error($con);
?>