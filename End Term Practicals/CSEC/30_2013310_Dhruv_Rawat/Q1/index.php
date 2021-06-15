<!DOCTYPE html>
<html>

<head>

</head>

<body>
		<?php
		$conn = mysqli_connect("localhost", "dhruv", "abcd1234", "BookStore");
		
		if($conn === false){
			die("ERROR");
		}
		
        $sqla = "CREATE DATABASE BookStore";
        if ($conn->query($sqla) === TRUE) {
          echo "Database created successfully";
        } else {
          echo "Error";
        }

        $sqlb = "CREATE TABLE store (
            bookName VARCHAR(30) NOT NULL,
            authorName VARCHAR(30) NOT NULL,
            isbnNumber VARCHAR(30) NOT NULL PRIMARY KEY,
            publisherName VARCHAR(30) NOT NULL,
            publicationYear VARCHAR(4) NOT NULL,
            noOfPages VARCHAR(3) NOT NULL,
            bookType VARCHAR(20) NOT NULL,  
            )";
            
            if ($conn->query($sqlb) === TRUE) {
              echo "Table store created successfully";
            } else {
              echo "Error";
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
