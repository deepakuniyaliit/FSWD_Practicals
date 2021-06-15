<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$bookName=$_POST["bookName"];
$authorName=$_POST["autherName"];
$isbnNumber=$_POST["isbnNumber"];
$publisherName=$_POST["publishername"];
$publisheryear=$_POST["publisheryear"];
$noofpages=$_POST["noofpages"];
$booktype=$_POST["bookType"];
$sql = "INSERT INTO bookDetails (bookName,author,isbn,pubname,pubyear,pages,booktype) 
VALUES ($bookName,$authorName,$isbnNumber,$publisherName,$publisherYear,$noofpages,$bookType)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
