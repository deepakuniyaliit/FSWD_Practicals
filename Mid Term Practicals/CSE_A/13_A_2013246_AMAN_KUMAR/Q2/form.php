<?php
include('configuration.php');
if(isset($_POST["submit"])){

	$n=$_POST["name"];
	$e=$_POST["email"];
	$cn=$_POST["no"];
	$g=$_POST["gender"];
	$ct=$_POST["city"];

    $sql="INSERT INTO users (username,email,contact,gender,city) VALUES ('$n','$e',$cn,'$g','$ct')";
	mysqli_query($conn,$sql);
} 
	$sql="select * from users";
	$res=mysqli_query($conn,$sql); 
?>
<html>
<head>
	<title>FORM</title>
	<style>
		h2{
			text-align: center;
			color: purple;
		}
		body>table:last-child{
			border:3px solid green;
			border-collapse: collapse;
		}
		th{
			color: red;
		}
		#submit{
			color: white;
			background-color: skyblue;
			width: 200px
		}
	</style>
</head>
<body>
<h2>Please Enter Your Details</h2>
<form method="POST" action="form.php">
<table  align="center"  cellspacing=" 25">
	<tr>
		<th>Name*</th>
		<td><input type="text" placeholder=" Name" style="width: 395px" name="name" required></td>
	</tr>
	<tr>
		<th>E-Mail Address*</th>
		<td><input type="email" placeholder="Mail@gmail.com" style="width: 395px " name="email" required></td>
	</tr>
	<tr>
		<th>Contact No*</th>
		<td><input type="text" placeholder="Phone Number" style="width: 395px" name="no"  minlength="10" required></td>
	</tr>
	<tr>
		<th>Gender*</th>
		<td style="color: grey">
		<input type="radio" name="gender" value="Male" checked>Male
		<input type="radio" name="gender" value="Female">Female
		<input type="radio" name="gender" value="Other">Other</td>
	</tr>
	<tr>
		<th>City*</th>
		<td><select style="width: 403px" name="city">
		<option>Pune</option>
		<option>Delhi</option>
		<option>Jaipur</option>
		<option>Lucknow</option>
		<option>Mumbai</option>
		<option>Hyderabad</option>
		<option>Kolkata</option>
		<option>Chennai</option>
		<option>Banglore</option>
		<option>Mussoorie</option>
	    </select></td>
	</tr>
	<tr>
		<td></td>
		<td><input id="submit" type="submit"  value="submit" name="submit"></td>
	</tr>
</table>
</form>
<?php if( $res->num_rows >0):?>
<h2>Check Your Details</h2>

	<table  align="center" cellpadding="10" >
			<tr style="border: 3px solid green">
				<th style="border: 3px solid green">Name</th>
				<th style="border: 3px solid green">E-Mail</th>
				<th style="border: 3px solid green">Contact</th>
				<th style="border: 3px solid green">Gender</th>
				<th style="border: 3px solid green">City</th>
			</tr>
			<?php while ( $row=mysqli_fetch_array($res)): ?>
			<tr style="border: 3px solid green">
			   <td style="border: 3px solid green; color: orange"><?php echo $row['username'] ?></td>
			   <td style="border: 3px solid green; color: orange"><?php echo $row['email'] ?></td>
			   <td style="border: 3px solid green; color: orange"><?php echo $row['contact'] ?></td>
			    <td style="border: 3px solid green; color: orange"><?php echo $row['gender'] ?></td>
			   <td style="border: 3px solid green; color: orange"><?php echo $row['city'] ?></td>
			  </td>
			</tr>
		<?php endwhile;?>
	</table>
<?php endif;?>
</body>
</html>
