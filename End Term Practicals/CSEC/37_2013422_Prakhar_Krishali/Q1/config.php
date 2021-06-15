<?php
$username="root";
$database="Bookstore";
$con=mysqli-connect('localhost',$username,$password,$database)or
die("Connection Failed".mysqli_connect_error());
$book_name=$_REQUEST['bname'];
$isbn_no=$_REQUEST['isbn'];
$publisher_name=$_REQUEST['pname'];
$publication_year=$_REQUEST['pyear'];
$no_pages=$_REQUEST['bno'];
$book_type=$_REQUEST['btype'];
$insert_query="INSERT into Bookstore(bookname,isbnno,publishername,publicationyear,nopages,booktype)
values('$book_name','$isbn_no','$publisher_name','$publication_year','$no_pages','$book_type')";
$insert=mysqli_query($con,$insert_query);
if($insert===TRUE)
echo;
else
echo"Error".$insert_querry."<br/>".$co->error;
?>