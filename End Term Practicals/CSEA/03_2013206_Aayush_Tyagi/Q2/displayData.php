<?php 
	include('config.php');
?>
<?php 
	$sql = "SELECT * FROM `book`"; 
	$result = mysqli_query($conn , $sql); 
	if($result->num_rows > 0){
?>
<html lang="en">
<head>
	<title>Book Store</title>
</head>
<body>	
	<table border = "1" align="center">
		
		<thead>
			 <tr>
            <td colspan="8" style="color: red;text-align:center;">
                <b>Book Store</b>
            </td>
        </tr>
			<tr>
				<td>Book ID</td>
                <td> Book Name</td>
                <td>Author</td>
                <td>ISBN</td>
                <td>Publisher</td>
                <td>Publication Year</td>
				 <td>Page</td>
                <td>Book Type</td>
			</tr>
		</thead>
		<tbody>
			<?php 
				while($row = $result->fetch_array()){?>
			<tr>
				<td><?php echo $row[0]?></td>
				<td><?php echo $row[1]?></td>
				<td><?php echo $row[2]?></td>
				<td><?php echo $row[3]?></td>
				<td><?php echo $row[4]?></td>
				<td><?php echo $row[5]?></td>
				<td><?php echo $row[6]?></td>
				<td><?php echo $row[7]?></td>
			</tr>
			<?php } ?>	
		</tbody>
	</table>
	<?php } 
?>
</body>
</html>