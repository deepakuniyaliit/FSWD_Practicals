<?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $bookName = $_POST['bname'];
     $authorName = $_POST['aname'];
     $isbnNumber = $_POST['isbnno'];
     $publisherName = $_POST['pname'];
     $publicationYear = $_POST['pyear'];
     $noOfPages = $_POST['noOfPages'];
     $bookType = $_POST['bookType'];
     $sql = "INSERT INTO BookDetails
     VALUES ( '','$bookName', '$authorName','$isbnNumber','$publisherName','$publicationYear','$noOfPages','$bookType')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>