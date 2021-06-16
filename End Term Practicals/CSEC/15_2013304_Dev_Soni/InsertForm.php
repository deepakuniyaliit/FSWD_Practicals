<?php
    include_once 'BookStoreDB.php';
    if(isset($_POST['submit']))
    {
        $bookName=$_POST['bookName'];
        $authorName=$_POST['authorName'];
        $isbnNumber=$_POST['isbnNumber'];
        $publisherName=$_POST['publisherName'];
        $publicationYear=$_POST['publicationYear'];
        $noOfPages=$_POST['noOfPages'];
        $bookType=$_POST['bookType'];
        $sql= "INSERT INTO BookStore (bookName, authorName, isbnNumber, publisherName, publicationYear,
        noOfPages, bookType) VALUES ('$bookName','$authorName','$isbnNumber','$publisherName','$publicationYear',
        '$noOfPages','$bookType');
        if (mysqli_query($conn, $sql))
        {
            echo "New record has been added;
        }else       
        {
            echo "Error:" .$sql . ":-" . mysqli_error($conn);
        }
    mysqli_close($conn);
    }
?>