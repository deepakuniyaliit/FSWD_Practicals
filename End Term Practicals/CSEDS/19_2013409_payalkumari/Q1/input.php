<?php 

$username="root";
$password="";
$database="BookStore";
$con=mysqli_connect('localhost',$username,$password,$database) or die("Connection Failed". mysqli_connect_error());

$book_name = $_REQUEST['bookName'];
$author_name = $_REQUEST['authorName'];
$isbn_no = $_REQUEST['isbnNumber'];
$publisher_name = $_REQUEST['publisherName'];
$publication_year = $_REQUEST['publicationYear'];
$no_pages =$_REQUEST['noOfPages'];
$book_type = $_REQUEST['bookType'];

$insert_query = "INSERT into Bookstore(book_name, author_name, isbn_no, publisher_name, publication_year, no_pages, book_type) values('$book_name', '$author_name' ,'$isbn_no' , '$publisher_name' ,'$publication_year' , '$no_pages' , '$book_type' )";

$insert=mysqli_query($con,$insert_query);

if($insert === TRUE)
    echo 'Data inserted successfully';
else
 echo "Error" . $insert_query . "<br/>" . $con->error;

?>