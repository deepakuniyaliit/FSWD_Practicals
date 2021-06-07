<?php 
	include('configuration.php');
?>
<?php 
	$sql = "SELECT * FROM `users`"; 
	$result = mysqli_query($conn , $sql); 
	if($result->num_rows > 0){
?>
<html lang="en">
<head>
	<title>DATABSE RECORD</title>
</head>
<body>	
	
		<h1 align="center">Users Data</h1>
		
		
		
		
			<?php 
				while($row = $result->fetch_array()){?>

                <li>

				   <ul>ID- <?php echo $row[0]?> </ul>
                   <ul>Username- <?php echo $row[1]?></ul>
                   <ul>Email- <?php echo $row[2]?></ul>
                   <ul>Gender-<?php echo $row[3]?></ul>
                   <ul>City- <?php echo $row[4]?></ul>
			<?php } ?>	
	
	<?php } 
?>
</body>
</html>