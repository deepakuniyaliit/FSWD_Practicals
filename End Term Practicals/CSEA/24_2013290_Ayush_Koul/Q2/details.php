<?php
include_once('config.php');

$result = mysqli_query($conn, "SELECT * FROM `books`");
if(!$result){echo "Data Retriving Failed";exit();}
?>

<html>

<head>
	<title>Book Details</title>
	<style>
		table,
		td,
		th {
			border-collapse: collapse;
			border: solid black 2px;
			padding: 10px;
		}
	</style>
</head>

<body>
	<?php if ($result->num_rows > 0) { ?>
		<table>
			<thead>
				<tr>
					<th>Book ID</th>
					<th>Book Name</th>
					<th>Author</th>
					<th>ISBN</th>
					<th>Publisher</th>
					<th>Publication Year</th>
					<th>Pages</th>
					<th>Book Type</th>
				</tr>
			</thead>
			<tbody>
				<?php while ($row = $result->fetch_assoc()) : ?>
					<tr>
						<td><?php echo $row['id'] ?></td>
						<td><?php echo $row['BookName'] ?></td>
						<td><?php echo $row['Author'] ?></td>
						<td><?php echo $row['ISBN'] ?></td>
						<td><?php echo $row['Publisher'] ?></td>
						<td><?php echo $row['PublicationYear'] ?></td>
						<td><?php echo $row['Pages'] ?></td>
						<td><?php echo $row['BookType'] ?></td>
					</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
	<?php } else echo "Database is Empty."; ?>

</body>

</html>