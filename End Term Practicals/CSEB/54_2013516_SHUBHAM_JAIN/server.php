<?php
include("Configg.php");
if($_POST['bookstore'])
{
	$BOOKNAME = $_POST['bookName'];
	$AUTHOR = $_POST['authorName'];
	$ISBN = $_POST['isbnNumber'];
	$PUBLISHER = $_POST['publisherName'];
	$PUBLICATIONYEAR = $_POST['publicationYear'];
	$PAGES = $_POST['noOfPages'];
	$BOOKTYPE = $_POST['bookType'];



	if($BOOKNAME!="" && $AUTHOR!="" && $ISBN!="" && $PUBLISHER!="" && $PUBLICATIONYEAR!="" && $PAGES!="" && $BOOKTYPE!="")
	{
		$query = "INSERT INTO BookStore values('$BOOKNAME','$AUTHOR','$ISBN','$PUBLISHER','$PUBLICATIONYEAR','$PAGES','$BOOKTYPE')";
		$data = mysqli_query($conn,$query);

		if($data)
		{
			echo "<script> alert('Website is successfully inserted ') </script>";
		} 
	}
	else
	{
		echo "<script> alert('Failed to upload ') </script>";
	}

}

?>