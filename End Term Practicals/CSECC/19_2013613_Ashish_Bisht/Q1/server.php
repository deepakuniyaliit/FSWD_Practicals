<?php

$conn = mysqli_connect("127.0.0.1","root","","BookStore");
if(!$conn)
{
    die("Connection   Failed..!!");
}

$s = "CREATE TABLE IF NOT EXISTS record {BookName varchar(20),AuthName varchar(20),isbnNo int,PubName varchar(20),PubYear int,BookType varchar(20)}";
if(!mysqli_query($conn,$s))
{
  die("SQL Error");
}
else
{
    $s2="INSERT INTO record (BookName,AuthName,isbnNo,PubName,PubYear,BookType) values('$_POST["book_name"]','$_POST["auth_name"]','$_POST["isbn_no"]','$_POST["pub_name"]','$_POST["year"]','$_POST["noOfPages"]','$_POST["type"]')";
    if(!mysqli_query($conn,$s2))
    die("SQL Error");
    else
    echo "Data Inserted.";
}

?>