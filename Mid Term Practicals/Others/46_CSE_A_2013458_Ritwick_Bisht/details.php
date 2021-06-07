<?php 
	include('configuration.php');
 ?>
<?php 
	$sql = "SELECT * FROM `users`" ;
	$result = mysqli_query($conn,$sql);
	if($result->num_rows>0){
 ?>
<?php while($row = $result->fetch_assoc() ){ ?>
		    Details of user Id : <?php echo $row['id']?><br>
			<ul>
                <li>Username:<?php echo $row['username'] ?></li><br>
                <li>E-mail:<?php echo $row['email'] ?></li><br>
                <li>Gender:<?php echo $row['gender'] ?></li><br>
                <li>Contact:<?php echo $row['contact'] ?></li><br>
                <li>City:<?php echo $row['city'] ?></li><br>
            </ul><br>
<?php } 
    }
?>
