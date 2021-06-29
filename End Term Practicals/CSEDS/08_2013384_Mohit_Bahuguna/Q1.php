<?php 

$username="root";
$password="";
$database="BookStore";
$con=mysqli_connect('localhost',$username,$password,$database) or die("Connection Failed". mysqli_connect_error());

$book_name = $_REQUEST['b_name'];
$isbn_no = $_REQUEST['isbn_no'];
$publisher_name = $_REQUEST['p_name'];
$publication_year = $_REQUEST['p_year'];
$no_pages =$_REQUEST['p_no'];
$book_type = $_REQUEST['booktype'];
$insert_query="INSERT into Bookstore(bookname,isbnno,publisherno,publicationyear,nopages,booktype) values('$book_name' ,'$isbn_no' , '$publisher_name' ,'$publication_year' , '$no_pages' , '$book_type' )";

$insert=mysqli_query($con,$insert_query);

if($insert === TRUE)
	echo '';
else
 echo "Error" . $insert_query . "<br/>" . $con->error;

?>