<?php
include('config.php');
?>

<?php
    $sql = "SELECT * FROM `users`";
    $result = mysqli_query($conn, $sql);

    if($result->num_rows > 0){
    ?>

    <table border="1px">
		<thead>
			<tr>
				<th>ID</th>
				<th>USERNAME</th>
				<th>E-MAIL</th>
                <th>GENDER</th>
				<th>CONTACT</th>
                <th>CITY</th>
			</tr>
		</thead>
		<tbody>
			
            <?php
			while($row = $result->fetch_assoc()){?>
			<tr>
                <td><?php echo $row['id']?></td>
				<td><?php echo $row['username']?></td>
				<td><?php echo $row['email']?></td>
				<td><?php echo $row['gender']?></td>
                <td><?php echo $row['contact']?></td>
				<td><?php echo $row['city']?></td>
				<td><a href="add.php?id=<?php echo $row['id']?>">
				<input type="button" value="add"></a></td>
            </tr>
           <?php } ?>
		</tbody>
	</table>
<?php    }
?>
<html>
    <head>
        <title>Details</title>
    </head>
<body>

</body>
</html>