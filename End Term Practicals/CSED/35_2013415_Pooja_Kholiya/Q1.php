<?php
include 'config.php';
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST['submit'])){
    $Bookname = $_POST['Bookname'];
    $Authorname = $_POST['Authorname']; 
    $Isbn = $_POST['Isbn'];
    $Publishername = $_POST['Publishername']; 
    $Publicationyear = $_POST['Publicationyear'];
    $Noofpages = $_POST['Noofpages']; 
    $bookType = $_POST['bookType'];
    $sql ="INSERT INTO Books (bookName,authorName,isbn,publisherName,publicationYear,noOfPages,bookType) 
    VALUES ($Bookname,$Authorname,$Isbn,$Publishername,$Publicationyear,$Noofpages,$bookType)";
    $result = mysqli_query($conn, $sql);
 }
}
