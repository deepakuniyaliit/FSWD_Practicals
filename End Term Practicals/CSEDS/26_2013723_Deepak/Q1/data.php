<?php 

$username="root";
$password="";
$database="BookStore";
$con=mysqli_connect('localhost',$username,$password,$database) or die("Connection Failed". mysqli_connect_error());

$book_name = $_REQUEST['bookname'];
$isbn_no = $_REQUEST['isbnNumber'];
$publisher_name = $_REQUEST['publisherName'];
$publication_year = $_REQUEST['year'];
$no_pages =$_REQUEST['pno'];
$book_type = $_REQUEST['booktype'];
$author_name = $_REQUEST['authorName'];
$insert_query="INSERT into Bookstore(bookname,isbnNumber,publisherno,publicationyear,nopages,booktype,authorname) values('$book_name' ,'$isbn_no' , '$publisher_name' ,'$publication_year' , '$no_pages' , '$book_type', '$author_name' )";

$insert=mysqli_query($con,$insert_query);

if($insert === TRUE)
	echo 'Data inserted successfully';
else
 echo "Error" . $insert_query . "<br/>" . $con->error;

?>