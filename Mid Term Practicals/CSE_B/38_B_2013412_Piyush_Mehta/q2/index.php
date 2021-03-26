<?php
include('config.php');
?>

<?php
if(isset($_POST['submit']))
{
	
	$username=$_POST['username'];
	$email=$_POST['email'];
    $contact=$_POST['contact'];
	$gender=$_POST['gender'];
	$city=$_POST['city'];
	
	$sql="INSERT INTO `users`( `username`, `email`, `contact`,`gender`, `city`) VALUES ('$username','$contact',$email','$gender','$city')";
	mysqli_query($conn,$sql);
}
else
{
	echo "Please provide input";
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form method="post"  action="index.php">
        Username<input type="text" name="username" required><br>
        Email<input type="email"  name="email"  required><br>
        Contact<input type="text"   name="contact" required><br>
        Gender:<br>
        Male<input type="radio" id="male" name="gender" value="male" ><br>
        Female<input type="radio" id="female" name="gender" value="female"><br>
        Other<input type="radio" id="other" name="gender" value="other"><br>
        Select City<select name="city" >
            <option value="Mumbai">Mumbai</option>
            <option value="Delhi">Delhi</option>
            <option value="Jaipur">Jaipur</option>
            <option value="Mussorie">Mussorie</option>
            <option value="Nainital">Nainital</option>
            <option value="Chennai">Chennai</option>
            <option value="Pune">Pune</option>
            <option value="Banglore">Banglore</option>
            <option value="Hydrabad">Hydrabad</option>
            <option value="Lucknow">Lucknow</option>
          </select><br>
          <input type="submit"  value="Submit">

    </form>
</body>
</html>