<?php
$bookName = $_POST['bookName'];
$authorName = $_POST['authorName'];
$isbnNumber = $_POST['isbnNumber'];
$publisherName = $_POST['publisherName'];
$publicationYear = $_POST['publicationYear'];
$noOfPages = $_POST['noOfPages'];
$bookt = $_POST['bookt'];

$conn = mysqli_connect('localhost','root');
mysqli_select_db($conn, 'bookstore');
$v = "insert into books (bookname,authorname,isbnnumber, publishername, publicationyear, noofpages, booktype) values ('$bookName','$authorName','$isbnNumber','$publisherName','$publicationYear','$noOfPages','$bookt','$author');";
$status = mysqli_query($conn, $v);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Insertion Form</title>
</head>
<body>
<div>
    <h1 id="headings" style="color:red;"><strong>Insertion Log</strong></h1> 
</div>
<h2 style="color: green;"><?php
if($status==1)
		echo "Record Inserted Successfully";
else
	echo "Insertion Failed";
?></h2>


</body>
</html>