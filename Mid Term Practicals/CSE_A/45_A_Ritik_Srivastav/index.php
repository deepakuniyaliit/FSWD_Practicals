<?php 
include_once('config.php');
if(isset($_POST['submit'])){
	$user = $_POST['username'];
$email = $_POST['e-mail'];
$gender = $_POST['gender'];
$contact = $_POST['contact'];
$city = $_POST['city'];
$sql = "INSERT INTO `users` (`username`, `e-mail`, `gender`, `contact`,`city`) VALUES ('$user','$email','$gender','$contact','$city')";
		mysqli_query($conn,$sql);
};
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ques 2</title>
</head>
<body>
	<h3>Add Your Information Here:</h3><br><br> 
	<form action="index.php.php" method="POST">
		<label>UserName: </label>
		<input type="text" name="username" required="required"><br><br>
        <label>E-mail: </label>
		<input type="email" name="e-mail" required="required"><br><br>
        <label>Gender: </label>
		<input type="radio" name="gender" value="Male" required/>Male
        <input type="radio" name="gender" value="Female" required/>Female<br><br>
        <label>Contact: </label>
		<input type="text" name="contact" required="required" pattern="[0-9]{10}"><br><br>
		<label>City: </label>
        <select name="city" required>
                <option>Mumbai</option>
                <option>Delhi</option>
                <option>Jaipur</option>
                <option>Mussoorie</option>
                <option>Nanital</option>
                <option>Chennai</option>
                <option>Pune</option>
                <option>Banglore</option>
                <option>Hyderabad</option>
                <option>Lucknow</option>
            </select> <br><br>		
		<input type="submit" name="submit">
	</form>
</body>
</html>
