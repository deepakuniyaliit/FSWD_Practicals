<?php
include_once('config.php');
?>
<?php
    if(isset($_POST['submit'])){
    $bookname = $_POST['bookName'];
    $authorname = $_POST['authorName'];
    $isbn = $_POST['isbnNumber'];
    $pubname = $_POST['publisherName'];
    $pubyear = $_POST['publicationYear'];
    $booktype = $_POST['bookType'];
    $no = $_POST['noOfPages'];

    $sql = "INSERT INTO `Books` (Book_name, Author_name, ISBN_number, Pub_name,Pub_year,Book_type,Pages)
    VALUES ('$bookname', '$authorname', '$isbn', '$pubname','$pubyear','$booktype','$no')";
        
    if(mysqli_query($conn, $sql)){
        echo 'Data inserted successfully...';
        // header("Location:details.php");
    }
        else{
            echo 'Data insertion failed...'.mysqli_error($conn) ;
        }
}
else{
    echo "Please go back to Input Page.";
}
?>