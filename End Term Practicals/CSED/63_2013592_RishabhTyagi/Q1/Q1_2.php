<?php 

$username="root";
$password="";//sometimes is default root
$database="BookStore";
$con=mysqli_connect('localhost',$username,$password,$database) or die("Connection Failed". mysqli_connect_error());//checking connection with server(localhost,127.0.0.1)

$book_name = $_REQUEST['BookN'];
$isbn_no = $_REQUEST['ISBNN'];
$publisher_name = $_REQUEST['PUBN'];
$publication_year = $_REQUEST['py'];
$no_pages =$_REQUEST['pno'];
$book_type = $_REQUEST['booktype'];
$author_name = $_REQUEST['AuthorN'];
$insert_query="INSERT into Bookstore(bookname,isbnno,publisherno,publicationyear,nopages,booktype,authorname) values('$book_name' ,'$isbn_no' , '$publisher_name' ,'$publication_year' , '$no_pages' , '$book_type', '$author_name' )";

$insert=mysqli_query($con,$insert_query);//con variable for connection

if($insert === TRUE)
	echo 'Data inserted successfully';//printing
else
 echo "Error" . $insert_query . "<br/>" . $con->error;

?>
