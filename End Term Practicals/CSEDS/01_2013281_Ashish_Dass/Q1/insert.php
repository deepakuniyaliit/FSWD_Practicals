<?php

    $con = mysqli_connect("localhost", "root", "");
    //Check connection
    if(!$con)
    {
        echo "Connection Failed<br>";
    }
    else
    {
        echo "Connection Successful<br>";
    }

    if(!mysqli_select_db($con , "book store"))
    {
        echo "Connection to database Failed<br>";
    }
    $book_name = $_REQUEST['bookName'];
    $author_name = $_REQUEST['authorName'];
    $isbn_no = $_REQUEST['isbnNumber'];
    $publisher_name = $_REQUEST['publisherName'];
    $publication_year = $_REQUEST['publicationYear'];
    $no_pages =$_REQUEST['noOfPages'];
    $book_type = $_REQUEST['bookType'];

    $insert_query = "INSERT into book detail(book_name, author_name, isbn_no, publisher_name, publication_year, no_pages, book_type) 
    values('','$book_name', '$author_name' ,'$isbn_no' , '$publisher_name' ,'$publication_year' , '$no_pages' , '$book_type' )";

    if(!mysqli_query($con, $sql))
    {
        echo "Insertion into database Failed<br>";
    }
    else
    {
        echo "Insertion into database Successful<br>";
    }

    header("refresh: 3 ;url : index.html");
?>