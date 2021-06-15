<?php
$hostname="localhost";
$username="root";
$password="";
$databasename="Q1";
$conn=mysqli_connect($hostname,$username,$password,$databasename);


if($conn){
    echo "Connection sucessful..";

}
else{
    echo "Connection Failed...".mysqli_connect_error();
}
?>