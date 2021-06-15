<?php 
include './dbh.php';
if(isset($_POST['add_books'])){
    $publication_year = mysqli_real_escape_string($conn,$_POST['publication_year']);
    $book_type = mysqli_real_escape_string($conn,$_POST['book_type']);
    $bookName = mysqli_real_escape_string($conn,$_POST['bookName']);
    $authorName = mysqli_real_escape_string($conn,$_POST['authorName']);
    $isbnNumber = mysqli_real_escape_string($conn,$_POST['isbnNumber']);
    $publisherName = mysqli_real_escape_string($conn,$_POST['publisherName']);
    $noOfPages = mysqli_real_escape_string($conn,$_POST['noOfPages']);
    $id="";
    $sql = "INSERT INTO `bookstore`(`id`, `publication_year`, `book_type`, `bookName`, `authorName`, `isbnNumber`, `publisherName`, `noOfPages`) VALUES ('$id','$publication_year','$book_type','$bookName','$authorName','$isbnNumber','$publisherName','$noOfPages')";
    $res = mysqli_query($conn,$sql);
    if($res){
        header("location:./index.php?task=successfull");
    }
    
}