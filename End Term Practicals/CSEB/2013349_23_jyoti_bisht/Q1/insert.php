<?php
include_once 'bookstore.php';
if(isset($_POST['submit']))
{    
     $bookName = $_POST['bookName'];
     $authorName = $_POST['authorName'];
     $isbnNumber = $_POST['isbnNumber'];
     $publisherName = $_POST['publisherName'];
     $booktype = $_POST['booktype'];
     $pyear = $_POST['pyear'];
     $nop = $_POST['noofPages'];

     $sql = "INSERT INTO users (bookName,authorName,isbnNumber,publisherName)
     VALUES ('$bookName','$authorName','$isbnNumber', '$publisherName','$booktype', '$pyear','$nop')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
