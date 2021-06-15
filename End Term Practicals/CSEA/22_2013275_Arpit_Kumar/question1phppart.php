<?php
include('configuration.php');
if (isset($_POST['add'])) {
    $bookName = $_POST['bookName'];
    $author = $_POST['authorName'];
    $isbn = $_POST['isbnNumber'];
    $publisher = $_POST['publisherName'];
    $publicationYear = $_POST['publicationYear'];
    $pages = $_POST['noOfPages'];
    $bookType = $_POST['bookType'];
    $query = "INSERT INTO `books` (`bookId`, `bookName`, `author`, `isbn`, `publisher`, `publicationYear`, `pages`, `bookType`) VALUES (NULL, '$bookName', '$author', '$isbn', '$publisher', '$publicationYear', $pages, '$bookType')";
    if (mysqli_query($db_handle, $query) == true) 
 {
       echo 'Successfully Added!';
    }
}