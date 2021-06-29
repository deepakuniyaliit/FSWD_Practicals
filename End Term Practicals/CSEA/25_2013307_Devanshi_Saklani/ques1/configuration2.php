<?php 

$username="root";
$password="";
$database="BookStore";
$con=mysqli_connect('localhost',$username,$password,$database) or die("Connection Failed". mysqli_connect_error());

$book_name = $_REQUEST['bookName'];
$isbn_no = $_REQUEST['isbnNumber'];
$publisher_name = $_REQUEST['publishername'];
$publication_year = $_REQUEST['publicationyear'];
$no_pages =$_REQUEST['volume'];
$book_type = $_REQUEST['bookType'];
$insert_query="INSERT into Bookstore(bookName,isbnNumber,publishername,publicationyear,volume,bookType) values('$bookName' ,'$isbnNumber' , '$publishername' ,'$publicationyear' , '$volume' , '$bookType' )";

$insert=mysqli_query($con,$insert_query);

if($insert === TRUE)
	echo '';
else
 echo "Error" . $insert_query . "<br/>" . $con->error;

?>