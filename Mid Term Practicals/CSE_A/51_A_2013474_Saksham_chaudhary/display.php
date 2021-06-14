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
	<div>
		<h2>Users Data</h2>
	
	<?php
		if($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {  ?>
				<ul>
		<li>Details of user with user id: <?php echo $row['id']; ?>
		<ul>
			<li>Username: <?php echo $row['username']; ?></li>
			<li>Email:<?php echo $row['email']; ?> </li>
			<li>Phone: <?php echo $row['contact']; ?></li>
			<li>Gender: <?php echo $row['gender']; ?></li>
			<li>City: <?php echo $row['city']; ?></li>
		</ul>
		</li>
	</ul>
					
		<?php	}
		}
		else{
			echo "0 Rows";
		}
	?>
	<br><br>
	
</body>
</html>
