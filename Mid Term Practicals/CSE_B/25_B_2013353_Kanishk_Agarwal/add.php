<?php 
include('config.php');
 ?>

 <?php
 if(isset($_POST['submit'])){
 	$username=$_POST['username'];
	$contact=$_POST['contact']
 	$email=$_POST['email'];
 	$gender=$_POST['gender'];
 	$city=$_POST['city'];

 	$sql="INSERT INTO `users` (`id`, `username`, `contact`, `email`, `gender`, `city`) VALUES (NULL, '$username','$contact' ,'$email', '$gender', '$city')";
 	mysqli_query($conn,$sql);
 } 
 else{
 	echo "Please Click Submit Button to submit the data";
 }
 ?>



<!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<form method="post" action="add.php">
        Username <input type="text" name="username" required><br>
        Email <input type="Email" name="email" required><br>
        Gender<select name="gender" required>
        	<option selected="selected" disabled>None</option>
        	<option >Male</option>
        	<option >Female</option>
        </select><br>
        City<select name="city" required>
        	<option selected="selected" disabled>None</option>
        	<option >Dehradun</option>
        	<option >Delhi</option>
        	<option >Mumbai</option>
        	<option >Mohali</option>
        	<option >Kolkata</option>
        	<option >Roorkee</option>
        	<option >Haridwar</option>
        	<option >Hyderabad</option>
        	<option >Jaipur</option>
        	<option>Chennai</option>
        </select><br>
        <input type="submit" name="submit" ><br>
    </form>
 
 </body>
 </html>