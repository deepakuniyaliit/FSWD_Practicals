<?php
include('config.php');
?>

<?php
if(isset($_POST['submit'])){
    $bookName = $_POST['Bookname'];
    $authorName = $_POST['Authorname'];
    $isbnNuber = $_POST['isbnNum'];
    $publisherName = $_POST['publisherName'];
    $noOfPages = $_POST['Noofpages'];
    $bookType = $_POST['Booktype'];
    $publisherYear = $_POST['publisherYear'];


    $sql = "INSERT INTO `Bookstore` (`Bookname`, `Authorname`, `isbn`, `Publishername`,`Noofpages`, `Booktype`, `Publicationyear`) VALUES ('$Bookname', '$Authorname', '$isbn', '$Publishername','$Noofpages', '$Booktype', '$Publicationyear')";
    mysqli_query($conn, $sql);
}
else{
    echo "Please click submit button to submit the data..";
}
?>