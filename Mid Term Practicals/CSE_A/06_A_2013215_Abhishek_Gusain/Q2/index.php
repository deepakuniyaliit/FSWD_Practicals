<?php 
	include('config.php');
?>

<?php
	$id  =  $_GET['id'];
	$sql = "SELECT * FROM `users` WHERE `id`=$id"; 
	$result = mysqli_query($conn , $sql); 
	$row = $result->fetch_assoc(); 
	$username = $row['username']; 
	$email = $row['email'];
	$gender = $row['gender']; 
	$city = $row['city']; 
?>

<?php
if(isset($_POST['update'])){
	$username = $_POST['username']; 
	$email = $_POST['email'];
	$gender = $_POST['gender']; 
	$city = $_POST['city']; 

	$sql = "UPDATE `users` SET username='$username', email='$email', gender='$gender',city='$city' WHERE id='$id'"; 	
	$ans = mysqli_query($conn , $sql);  
	if($ans){
		echo "Data updated successfully...";
		header("Location:details.php");  
	}
	else{
		echo "Data updation failed..."; 
	}
}

?>
<html>
<head>
	<title>DATABASE</title>
</head>
<body>
<form method="post" action = "index.php?id=<?php  echo "$id"?>">	
<table id = "frm" align = "center" border = "3" cellspacing = " 20">

	<!-- 1 -->
	<tr><td>Username <td><input type="text" placeholder="Enter Username" name = "username" value = "<?php echo $username?>" required></td></tr>

	<!-- 2 -->
	<tr><td>Email <td><input type="email" placeholder="Enter Email" name = "email" value = "<?php echo $email ?>" required></td></tr>
	
	<!-- 3 -->
	<tr><td>Gender 
		<td>
			<input type="radio" id="Male" name="gender" <?php if($gender == "Male"){echo "checked";}?> value = "Male">
			<label for="Male" >Male</label><br>
			<input type="radio" id="Female" name="gender" <?php if($gender == "Female"){echo "checked";}?> value = "Female">
			<label for="Female" >Female</label><br>
		</td>
	</td>
</tr>

	<!-- 4 -->
	<tr><td>City 
		<td><select name = "city" required>
			<option>Select City</option>
			<option value="Mumbai" <?php if($city == "Mumbai"){echo "selected";}?>>Dehradun</option>
			<option value="Delhi"    <?php if($city == "Delhi"){echo "selected";}?>>Delhi</option>
			<option value="Jaipur"   <?php if($city == "Jaipur"){echo "selected";}?>>Jaipur</option>
			<option value="Mussorie"   <?php if($city == "Mussorie"){echo "selected";}?>>Mussorie</option>
			<option value="Nainital"   <?php if($city == "Nainital"){echo "selected";}?>>Nainital</option>
			<option value="Chennai"   <?php if($city == "Chennai"){echo "selected";}?>>Chennai</option>
			<option value="Pune"   <?php if($city == "Pune"){echo "selected";}?>>Pune</option>
			<option value="Banglore"   <?php if($city == "Banglore"){echo "selected";}?>>Banglore</option>
			<option value="Hyderabad"   <?php if($city == "Hyderabad"){echo "selected";}?>>Hyderabad</option>
			<option value="Lucknow"   <?php if($city == "Lucknow"){echo "selected";}?>>Lucknow</option>
		</select>
	</td></tr>
	

	<tr><td><input type="Submit" name = "update" value = "UPDATE"></td></tr>
</div>
</form>
</body>
</html>