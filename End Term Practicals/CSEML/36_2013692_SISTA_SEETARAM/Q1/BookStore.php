<!DOCTYPE HTML>
<html>
<center><h2>Book Store</h2></center>
<br>

<?php
include("DBConnection.php");

$bookName=$_POST["bookName"];
$authorName=$_POST["authorName"];
$isbnNumber=$_POST["isbnNumber"];
$publisherName=$_POST["publisherName"];
$publicationYear=$_POST["publicationYear"];
$noOfPages=$_POST["noOfPages"];
$bookType=$_POST["bookType"];

$query = "insert into book_info(bookName,authorName,isbnNumber,publisherName,publicationYear,noOfPages,bookType) values('$bookName','$authorName','$isbnNumber','$publisherName','$publicationYear','$noOfPages','$bookType')"; 
$result = mysqli_query($db,$query);

?>

<h3> Book information is inserted successfully </h3>

</body>
</html>