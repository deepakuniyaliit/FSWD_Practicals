<?php

	$username="root";
	$password="";
	$database="BookStore";
	$con=mysqli_connect('localhost',$username,$password,$database) or die("Connection Failed". mysqli_connect_error());

	$book_name=$_REQUEST['bookName'];
	$publisherName=$_REQUEST['authorName'];
	$isbn_no=$_REQUEST['isbnNumber'];
	$publication_year=$_REQUEST['publicationYear'];
	$no_pages=$_REQUEST['noOfPages'];
	$book_type=$_REQUEST['bookType'];
	$insert_query="INSERT into Bookstore(bookname,isbnno,publisherno,publicationyear,nopages,booktype) values('$book_name' , '$publisher_name' ,'$isbn_no' ,'$publication_year' , '$no_pages' , '$book_type' )";

$insert=mysqli_query($con,$insert_query);

if($insert === TRUE)
	echo '';
else
 echo "Error" . $insert_query . "<br/>" . $con->error;


	?>