<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
		<?php
		$conn = mysqli_connect("localhost", "dhruv", "abcd1234", "BookStore");
		
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		$bookName=$_REQUEST['bookName'];
		$authorName=$_REQUEST['authorName'];
		$isbnNumber=$_REQUEST['isbnNumber'];
		$publisherName = $_REQUEST['publisherName'];
		$publicationYear = $_REQUEST['publicationYear'];
		$noOfPages = $_REQUEST['noOfPages'];
		$bookType = $_REQUEST['bookType'];

		$sql = "INSERT INTO store VALUES ('$bookName',
			'$authorName','$isbnNumber','$publisherName','$publicationYear','$noOfPages','$bookType')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>Success</h3>";
		} else{
			echo "Error";
		}
		mysqli_close($conn);
		?>
</body>

</html>
