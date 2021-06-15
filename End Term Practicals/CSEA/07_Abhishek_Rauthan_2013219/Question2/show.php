<?php
include 'config.php';
	$sql="select * from bookstore";
	$res=mysqli_query($conn,$sql); 
?>
<html>
<head>
	<title>FORM</title>
</head>
<body>
<?php if( $res->num_rows >0):?>
<h2>Check Your Details</h2>
	<table>
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
			<?php while ( $row=mysqli_fetch_array($res)): ?>
			<tr>
			   <td><?php echo $row['bookid'] ?></td>
			   <td><?php echo $row['book'] ?></td>
			   <td ><?php echo $row['author'] ?></td>
			   <td><?php echo $row['isbn'] ?></td>
			   <td ><?php echo $row['publisher'] ?></td>
			   <td ><?php echo $row['year'] ?></td>
			   <td ><?php echo $row['pages'] ?></td>
			   <td ><?php echo $row['type'] ?></td>
			  </td>
			</tr>
		<?php endwhile;?>
	</table>
<?php endif;?>
</body>
</html>