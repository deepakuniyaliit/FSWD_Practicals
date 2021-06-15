<?php
include('config.php');
?>
<?php

if(isset($_POST['btn'])){
    $bookId=$_POST['bookid'];
    $bookname = $_POST['bookname'];
    $author = $_POST['authorname'];
	$isbn = $_POST['isbnnumber'];
    $publisher=$_POST['publisher'];
    $publicationY=$_POST['year'];
    $pages = $_POST['noOfPages'];
    $booktype=$_POST['Type'];
	$sql =  "INSERT INTO `BookStore` (`bookname`, `author`, `isbn`,`publisher`,`publicationY`, `pages`, `booktype`) VALUES ('$bookId', '$bookname', '$author', '$isbn','$publisher','$publicationY','$pages','$booktype')";
	$a = mysqli_query($conn , $sql);

}
?>

