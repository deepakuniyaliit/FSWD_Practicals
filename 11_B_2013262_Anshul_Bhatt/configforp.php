<?php

$hostname="127.0.0.1";
$username="root";
$password="";
$databasename="Web";
$conn=mysqli_connect($hostname,$username,$password,$databasename);
if($conn)
{
    echo"connection successful  ";

}
else{
    echo "connection failed "+mysqli_connect_error();
}
?>