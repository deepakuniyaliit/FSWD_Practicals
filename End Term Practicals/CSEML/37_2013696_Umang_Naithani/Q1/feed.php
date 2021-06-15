<?php
include_once "process.php";
if(isset($_POST["submit"]))
{
    $bookname=$_POST["bookName"];
    $authorname=$_POST["authorName"];
    $isbnnumber=$_POST["isbnNumber"];
    $publishername=$_POST["publisherName"];
    $publicationyear=$_POST["publicationYear"];
    $noofpages=$_POST["noOfPages"];
    $booktype=$_POST["bookType"];
    $enter="INSERT INTO BookName VALUES("$bookname","$authorname","$isbnnumber",
    "$publishername","$publicationyear","$noofpages","$booktype")";
    if(mysqli_query($conn,$sql)){
        echo "Rows added successfully !";
    }
    else{
        echo "Error" .$enter . mysqli_error($conn);
    }
    mysqli_close($conn)
}
?>