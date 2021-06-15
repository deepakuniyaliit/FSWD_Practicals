<?php
include('config.php');
?>
<?php
if(isset($_POST['submit']))
{
$name=$_POST['bookName'];
$author=$_POST['authorName'];
$isbn=$_POST['isbnNumber'];
$publisher=$_POST['publisherName'];
$year=$_POST['publicationYear'];
$pages=$_POST['noOfPages'];
$type=$_POST['bookType'];
$sql="INSERT INTO `book` (`Book Name`, `Author`, `ISBN`, `Publisher`,`Publication Year`,`Pages`,`Book Type`) VALUES ('$name', '$author', '$isbn', '$publisher',`$year`,`$pages`,`$type`)";
mysqli_query($conn,$sql);
echo "Inserted data into table";
}
else{
echo "click submit button first";
}
?>












