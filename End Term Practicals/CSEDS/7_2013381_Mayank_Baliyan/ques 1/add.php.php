<?php 

$username="root";
$password="";
$database="BookStore";
$con=mysqli_connect('localhost',$username,$password,$database) or die("Connection Failed". mysqli_connect_error());

$book_name = $_REQUEST['bname'];
$isbn_no = $_REQUEST['bno'];
$publisher_name = $_REQUEST['pname'];
$publication_year = $_REQUEST['publicationyear'];
$no_pages =$_REQUEST['pages'];
$book_type = $_REQUEST['booktype'];
$insert_query="INSERT into Bookstore(bookname,bno,pname,publicationyear,pages,booktype) values('$bname' ,'$bno' , '$publisher_name' ,'$publicationyear' , '$pages' , '$book_type' )";

$insert=mysqli_query($con,$insert_query);

if($insert === TRUE)
    echo '';
else
 echo "Error" . $insert_query . "<br/>" . $con->error;

?>