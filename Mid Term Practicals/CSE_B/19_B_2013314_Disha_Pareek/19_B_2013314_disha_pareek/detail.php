<?php
include('config.php');
?>

<?php
    $sql = "SELECT * FROM `user`";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows > 0){
    ?>

    <table border="5px">
		<thead>
			<tr>
				<th>Name</th>
				<th>E-Mail</th>
                <th>Contact</th>
				<th>Gender</th>
				<th>City</th>
			</tr>
		</thead>
		<tbody>
			
            <?php
			while($row = $result->fetch_assoc()){?>
			<tr>
				<td><?php echo $row['username']?></td>
				<td><?php echo $row['email']?></td>
                <td><?php echo $row['contact']?></td>
				<td><?php echo $row['gender']?></td>
				<td><?php echo $row['city']?></td>
				
            </tr>
           <?php } ?>
		</tbody>
	</table>
<?php    }
?>
<html>
    <head>
        <title>User Details</title>
    </head>
<body>

</body>
</html>