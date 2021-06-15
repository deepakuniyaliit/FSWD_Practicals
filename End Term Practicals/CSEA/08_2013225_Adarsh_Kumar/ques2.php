<?php
include 'config.php';

	$sql="select * from BookStore";
	$res=mysqli_query($conn,$sql); 
?>
<html>
<head>
	<title>FORM</title>
</head>
<body>
<?php if( $res->num_rows >0):?>
<h2>Check Your Details</h2>

	<table  align="center" cellpadding="10" >
			<tr style="border: 3px solid green">
				<th style="border: 3px solid green">Book ID</th>
				<th style="border: 3px solid green">Book Name</th>
				<th style="border: 3px solid green">Author</th>
				<th style="border: 3px solid green">ISBN</th>
				<th style="border: 3px solid green">Publisher</th>
				<th style="border: 3px solid green">Publication Year</th>
				<th style="border: 3px solid green">Pages</th>
				<th style="border: 3px solid green">Book Type</th>
			</tr>
			<?php while ( $row=mysqli_fetch_array($res)): ?>
			<tr style="border: 3px solid green">
			   <td style="border: 3px solid green; color: orange"><?php echo $row['bookid'] ?></td>
			   <td style="border: 3px solid green; color: orange"><?php echo $row['book'] ?></td>
			   <td style="border: 3px solid green; color: orange"><?php echo $row['author'] ?></td>
			   <td style="border: 3px solid green; color: orange"><?php echo $row['isbn'] ?></td>
               <td style="border: 3px solid green; color: orange"><?php echo $row['publisher'] ?></td>
               <td style="border: 3px solid green; color: orange"><?php echo $row['year'] ?></td>
               <td style="border: 3px solid green; color: orange"><?php echo $row['pages'] ?></td>
               <td style="border: 3px solid green; color: orange"><?php echo $row['booktype'] ?></td>
			   
			  </td>
			</tr>
		<?php endwhile;?>
	</table>
<?php endif;?>
</body>
</html>