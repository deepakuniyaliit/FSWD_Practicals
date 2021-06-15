<?php
	include_once("config.php");
?>
<?php
	$sql = "SELECT * FROM `BookDetails`;";
	$result = mysqli_query($conn, $sql);

	if($result->num_rows > 0){
?>
		<table border = "1px">
			<thead>
				<th>BookId</th>
				<th>Book Name</th>
				<th>Author</th>
				<th>ISBN</th>
				<th>Publisher</th>
				<th>Publication Year</th>
				<th>Pages</th>
				<th>Book Type</th>
			</thead>
			<tbody>
				<?php
					while($row = $result->fetch_assoc()){ ?> 
						<tr>
							<td><?php echo $row['bookId']?></td>
							<td><?php echo $row['bookName']?></td>
							<td><?php echo $row['authorName']?></td>
							<td><?php echo $row['isbn']?></td>
							<td><?php echo $row['publisherName']?></td>
							<td><?php echo $row['publicationYear']?></td>
							<td><?php echo $row['noOfages']?></td>
							<td><?php echo $row['bookType']?></td>
						</tr>
				<?php	}
				?>
			</tbody>
		</table>
<?php }
?>
<html>
	<head>
		<title>BOOK DETAILS</title>
	</head>
	<body>
		
	</body>
</html>