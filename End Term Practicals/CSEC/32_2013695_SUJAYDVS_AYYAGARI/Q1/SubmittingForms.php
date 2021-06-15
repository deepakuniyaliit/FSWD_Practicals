<!DOCTYPE HTML>
<html>
<body bgcolor="orange#ffa500">
<center><h2>End Semester Paper</h2></center>
<br>

<?php
include("DBConnection.php");

$BookName=$_POST["bookName"];
$AuthorName=$_POST["authorName"];
$ISBN=$_POST["isbnNumber"];
$PublsiherName=$_POST["publisherName"];
$PublicationYear=$_POST["publicationYear"];
$NoOfPages=$_POST["noOfPages"];
$BookType=$_POST["bookType"];

$query = "insert(BookName,AuthorName,ISBN,PublsiherName,PublicationYear,NoOfPages,BookType) values('$bookName','$authorName','$isbnNumber','$publsiherName','$PublicationYear','$noOfPages,'$bookType)"; 
$result = mysqli_query($db,$query);

?>

<h3> Book information is inserted successfully </h3>

</body>
</html>