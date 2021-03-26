<?php
include('configuration.php');
?>
<?php 
	$flag = true; 
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$email = $_POST['email']; 
        $contact=$_POST['contact'];
		$gender = $_POST['gender']; 
		if($city == "Select City")
		{
			echo "Enter Valid City"; 
			$flag = false; 
		}
		else
			$city = $_POST['city'];
		
	 	if($flag == true){
			// $sql = "INSERT INTO `users` (`username`, `email`, `gender`, `city`) VALUES ('$username', '$email', '$gender', '$city')";
            $sql = "INSERT INTO `users` (`username`, `email`,'contact', `gender`, `city`) VALUES ('$username', '$email', '$contact',$gender', '$city')";
			$a = mysqli_query($conn , $sql);
		}
	}	

?>
<html lang="en">
<head>
	<title>HTML FRONT FORM</title>
</head>
<body>
<form method="post">	
<table id = "frm" align = "center" border = "3" cellspacing = " 20">
	<h1 align="center"> HTML FORM </h1>
	<tr><td>USER NAME <td><input type="text" placeholder="Enter Username" name = "username" required></td></tr>

	<tr><td>EMAIL <td><input type="email" placeholder="Enter Email" name = "email" required></td></tr>
	
	<tr><td>GENDER
		<td>
			<input type="radio" id="Male" name="gender" value = "Male" required>
			<label for="Male">Male</label><br>
			<input type="radio" id="Female" name="gender"  value = "Female">
			<label for="Female">Female</label><br>
		</td>
	</td>
</tr>

	<tr><td>CITY
		<td><select name = "city" required>
			<option>Select City</option>
		  <option value="Mumbai">Mumbai</option>
          <option value="Delhi">Delhi</option>
          <option value="Jaipur">Jaipur</option>
          <option value="Mussorie">Mussorie</option>
          <option value="Nainital">Nainital</option>
          <option value="Chennai">Chennai</option>
          <option value="Pune">Pune</option>
          <option value="Banglore">Banglore</option>
          <option value="Hyderabad">Hyderabad</option>
          <option value="Lucknow">Lucknow</option>
		</select>
	</td></tr>
	

	<tr><td><input type="Submit" name = "submit" >
</div>
</form>
</body>
</html>