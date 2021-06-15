<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "BookStore";
$conn = new mysqli($servername, $username, $password,$db);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $bookname = $_POST['bookname'];
    $author = $_POST['authorname'];
    $isbn = $_POST['isbn'];
    $pubname = $_POST['pubname'];
    $pubyear = $_POST['pubyear'];
    $numpages = $_POST['pages'];
    $type = $_POST['booktype'];
        $sql = "INSERT INTO books (Bookname, Authorname, ISBN, Publishername, 	PublicationYear,Pages,Booktype) VALUES ('${bookname}', '${author}', '${isbn}','${pubname}', '${pubyear}','${numpages}','${type}')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
}
?>

