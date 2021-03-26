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
	<div align="center">
		<h2>Users Info</h2>
	<table border="2px" >
					<tr>
						<th>Username</th>
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
	<div align="center">
		<h2>Users Info</h2>
	<table border="2px" >
					<tr>
						<th>Username</th>
						<th>Email</th>
						<th>Contact</th>
						<th>Gender</th>
						<th>City</th>
					</tr>
	<?php
		if($result->num_rows > 0) {
			while ($row = $result->fetch_assoc()) {  ?>
					<tr>
						<td><?php echo $row['username']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['contact']; ?></td>
						<td><?php echo $row['gender']; ?></td>
						<td><?php echo $row['city']; ?></td>
					</tr>
		<?php	}
		}
		else{
			echo "0 Rows";
		}
	?>
