<?php
$hostname="localhost";
$username="root";
$password="";
$databasename="data";
$conn=mysqli_connect($hostname,$username,$password,$databasename);
if($conn)
{
  echo "Connection Succesfull......";
} 
else
{

  echo "Connection Failed...."+mysqli_connect_error();
}
?>