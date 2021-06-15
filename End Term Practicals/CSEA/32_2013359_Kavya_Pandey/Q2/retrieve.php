<?php 
	include('config.php');
?>
<?php 
	$sql = "SELECT * FROM `bookstore`"; 
	$result = mysqli_query($conn , $sql); 
	if($result->num_rows > 0){
?>
<html lang="en">
<head>
	<title>DATABSE RECORD</title>
	<style>
        body {
            font-family: sans-serif;
        }

        table {
            border-collapse: collapse;
            width: 50%;
        }
    </style>
</head>
<body>	
	<table border = "1" align="center">
		
		<thead>
			 <tr>
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