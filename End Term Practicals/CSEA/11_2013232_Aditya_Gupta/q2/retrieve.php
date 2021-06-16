<?php
include 'config.php';

	$sql="select * from BookStore";
	$res=mysqli_query($comm,$sql); 
?>
<html>
<head>
	<title> Retrieved Form </title>
</head>
<body>
<?php if( $res->num_rows >0):?>
<h2>DETAILS</h2>

	<table  align="center" cellpadding="10" >
			<tr>
				<th>Book ID</th>
				<th>Book Name</th>
				<th>Author Name</th>
				<th>ISBN Number</th>
				<th>Publisher</th>
				<th>Publication Year</th>
				<th>Pages</th>
				<th>Book Type</th>
			</tr>
			<?php while ( $row=mysqli_fetch_array($res)): ?>
			<tr>
			   <td><?php echo $row['Bookid'] ?></td>
			   <td><?php echo $row['BookName'] ?></td>
			   <td><?php echo $row['AuthorName'] ?></td>
			   <td><?php echo $row['ISBNnumber'] ?></td>
			   <td><?php echo $row['PublisherName'] ?></td>
			   <td><?php echo $row['PublicationYear'] ?></td>
			   <td><?php echo $row['numberofpages'] ?></td>
			   <td><?php echo $row['booktype'] ?></td>
			  </td>
			</tr>
		<?php endwhile;?>
	</table>
<?php endif;?>
</body>
</html>