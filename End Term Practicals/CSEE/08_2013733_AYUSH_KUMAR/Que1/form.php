<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br>
dgdsgsd
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database="BookStore";
$bookName=$_POST['bookName'];
$authorName=$_POST['authorName'];
$isbnNumber=$_POST['isbnNumber'];
$publisherName=$_POST['publisherName'];
$publisherYear=$_POST['publicationYear'];
$noOfPage=$_POST['noOfPage'];
$bookType=$_POST['bookType'];



// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error."<br>");
}
echo "Connected successfully <br>";

$sql= "INSERT INTO book(
bookName, authorName, isbnNumber,
publisherName, publicationYear, noOfPage, bookType
) VALUES('$bookName', '$authorName','$isbnNumber', '$publisherName','$publisherYear','$noOfPage','$bookType')";
if($conn->query($sql)===TRUE){
echo "record created <br>";
}
else{
    echo"record creation fail" .$conn->error;
}
$conn->close();

?>
</body>
</html>