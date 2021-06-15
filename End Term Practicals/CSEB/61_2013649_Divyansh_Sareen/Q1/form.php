<?php
include 'config.php';
if(isset($_POST['submit']))
{
    $bookname = $_POST['bName'];
    $authorname = $_POST['aName'];
    $isbn = $_POST['isbn'];
    $publisher = $_POST['pName'];
    $year= $_POST['pYear'];
    $booktype= $_POST['bookType'];
    $pages= $_POST['pages'];

    $sql = "INSERT INTO table1 (bookName, authorName, isbnNumber, publisherName, publicationYear, noOfPages, bookType) VALUES ('$bookname', '$authorname', '$isbn', '$publisher', '$year', '$pages', '$booktype')";
    mysqli_query($conn, $sql);
}
else{
    echo "Please click submit button to submit the data..";
}
?>