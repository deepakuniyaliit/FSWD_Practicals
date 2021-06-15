<?php
$user='root';
$pass='';
$db='BOOKSTORE';
$con=mysqli_connect('localhost:3307',$user,$pass,$db) or
    die("Connection failed: ".mysqli_connect_error());
echo "Connected Successfully";

$sql="CREATE TABLE Books(Book_name varchar(20),Author_name varchar(30),Isbn_number varchar(30),Publisher_name varchar(30), Publication_Year INTEGER,Number_Of_Pages INTEGER,Book_type varchar(20))";
if(mysqli_query($con,$sql))
    echo "Table login created successfully";
else
    echo "Error creating table: ".mysqli_error($con);

?>