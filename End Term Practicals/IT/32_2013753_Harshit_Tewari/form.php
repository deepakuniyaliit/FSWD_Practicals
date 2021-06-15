<?php
include 'config.php';
if(isset($_POST['submit']))
{
    $bookname = $_POST['bookName'];
    $authorname = $_POST['authorName'];
    $isbn = $_POST['isbnNumber'];
    $publisher = $_POST['publisherName'];
    $year= $_POST['publicationYear'];
    $booktype= $_POST['bookType'];
    $pages= $_POST['Pages'];

    $sql = "INSERT INTO table1 (bookName, authorName, isbnNumber, publisherName, publicationYear, noOfPages, bookType) VALUES ('$bookname', '$authorname', '$isbn', '$publisher', '$year', '$pages', '$booktype')";
    mysqli_query($conn, $sql);
}
else{
    echo "Please click submit button to submit the data..";
}
?>