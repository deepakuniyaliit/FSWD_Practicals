<?php
include('configuration.php')
?>

<?php
	$sql = "SELECT * FROM `users`";
	$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Display info</title>
</head>
<body>
	
	<table border="2px" >
					<tr>
						<th>Book Name</th>
						<th>Author</th>
						<th>ISBN</th>
						<th>Publisher</th>
						<th>Publication Year</th>
						<th>Book Type</th>
						<th>Pages</th>
					</tr>
	<?php
		if($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {  ?>
					<tr>
						<td><?php echo $row['bookname']; ?></td>
						<td><?php echo $row['author']; ?></td>
						<td><?php echo $row['isbn']; ?></td>
						<td><?php echo $row['publisher']; ?></td>
						<td><?php echo $row['year']; ?></td>
						<td><?php echo $row['type']; ?></td>
						<td><?php echo $row['pages']; ?></td>
					</tr>
		<?php	}
		}
		else{
			echo "0 Rows";
		}
	?>
	</table><br><br>


</body>
</html>