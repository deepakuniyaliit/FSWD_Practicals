<?php 
	include('config.php');
 ?>
<?php 
	$sql = "Select * From `users` " ;
	$result = mysqli_query($conn,$sql);
	if($result->num_rows>0){
 ?>
<?php while($row = $result->fetch_assoc()){?>
		    Details of user Id : <?php $row['id']?><br><br>
			<ul>
                <li>username: <?php $row['username']?></li><br><br>
                <li>e-mail: <?php $row['email']?></li><br><br>
                <li>gender: <?php $row['gender']?></li><br><br>
                <li>contact: <?php $row['contact']?></li><br><br>
                <li>city: <?php $row['city']?></li><br><br>
            </ul><br><br>
<?php } ?>

 