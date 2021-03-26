<?php 
	include('configuration.php');
 ?>
<?php 
	$sql = "select * from `users` " ;
	$result = mysqli_query($conn,$sql);
	if($result->num_rows>0){
 ?>
<?php while($row = $result->fetch_assoc()){?>
		    Details of user Id : <?php $row['id']?><br><br>
			<ul>
                <li>Username:<?php $row['username']?></li><br>
                <li>E-mail:<?php $row['email']?></li><br>
                <li>Gender:<?php $row['gender']?></li><br>
                <li>Contact:<?php $row['contact']?></li><br>
                <li>City:<?php $row['city']?></li><br>
            </ul><br>
<?php } ?>
