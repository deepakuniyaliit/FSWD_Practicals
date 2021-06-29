<?php
include_once 'connect.php';
if(isset($_POST['submit']))
{    
     $bookName = $_POST['bookName'];
     $authorName = $_POST['authorName'];
     $isbnNumber = $_POST['isbnNumber'];
     $publisherName = $_POST['publisherName'];
     $booktype = $_POST['btype'];
     $pyear = $_POST['pyear'];

     $sql = "INSERT INTO users (bookName,authorName,isbnNumber,publisherName)
     VALUES ('$bookName','$authorName','$isbnNumber', '$publisherName','$booktype', '$pyear')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>