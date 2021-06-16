<?php  
	
	require "connection.php";	

	$connect = mysqli_connect('localhost', 'root', '', 'BookStore');

	if( isset($_POST['addToBase'])) {
		$book_name = mysqli_real_escape_string($connect, $_POST['bookName']);
		$author_name = mysqli_real_escape_string($connect, $_POST['authorName']);
		$isbn = mysqli_real_escape_string($connect, $_POST['isbnNumber']);
		$publisher_name = mysqli_real_escape_string($connect, $_POST['publisherName']);
		$year = mysqli_real_escape_string($connect, $_POST['publicationYear']);
		$book_type = mysqli_real_escape_string($connect, $_POST['bookType']);
		$pages = mysqli_real_escape_string($connect, $_POST['volume']);

			$query = "INSERT INTO BookStore VALUES ('$book_name', '$author_name', '$isbn', '$publisher_name', '$year', '$pages', '$book_type')";

			$reg = mysqli_query($connect, $query);

			if ($reg) {
				?>
				<script>
					alert("Problem Registered");
				</script>
				<?php
			} else {
				?>
				<script>
					alert("Try Again");
				</script>
				<?php
			}
	}

?>