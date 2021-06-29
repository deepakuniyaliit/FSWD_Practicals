<?php
include_once('config2.php');
if(isset($_POST['submit'])){
    $bookname = $_POST['bookname'];
    $authorname = $_POST['authorname'];
    $isbnnumber = $_POST['isbnnumber'];
    $publishername = $_POST['publishername'];
    $publicationyear = $_POST['Year'];
    $noofpages = $_POST['noofpages'];
    $booktype = $_POST['booktype'];

    $sql = "INSERT INTO `books` (`id`, 'bookName', 'authorName', 'isbnNumber',
    'publisherName', 'publicationYear', 'noOfPages', 'bookType') VALUES (NULL, '$bookname', '$authorname', '$isbnnumber', '$publishername','$publicationyear',
    '$noofpages','$booktype')";
    mysqli_query($conn,$sql);
}
else{
    echo "please click the submit button available there";
}

?>