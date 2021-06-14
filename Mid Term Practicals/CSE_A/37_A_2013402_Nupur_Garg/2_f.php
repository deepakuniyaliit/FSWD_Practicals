<?php 
	include('configuration.php');
?>
<?php

    if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $contact=$_POST['contact'];
    $gender = $_POST['gender'];
	$city = $_POST['city'];
	$sql =  "INSERT INTO `users` (`username`, `email`, `contact`, `gender`, `city`) VALUES ('$username', '$email', ' $contact', '$gender', '$city')";
	$a = mysqli_query($conn , $sql);
}
unset($_POST);
?>

<html lang="en">
<head>
    
    <title>HTML FORMS</title>
</head>
<body>
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        USERNAME <input type="text" name="username" placeholder="Type Your Username" required> <br><br>

        E-MAIL <input type="email" name="email" placeholder="Type Your E-mail" required> <br><br>
        Contact* <input type="text" name="contact" placeholder="+91 0000000000" required> <br><br>
        Gender <br> Male <input type="radio" name="gender" value="Male"> <br>
        Female <input type="radio" name="gender" value="Female"> <br>
        Other <input type="radio" name="gender" value="Other"> <br><br>
        City <select name="city" required>
            <option>Select City</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Delhi">Delhi</option>
            <option value="Jaipur">Jaipur</option>
            <option value="Mussoorie">Mussoorie</option>
            <option value="Nainital">Nainital</option>
            <option value="Chennai">Chennai</option>
            <option value="Pune">Pune</option>
            <option value="Banglore">Banglore</option>
            <option value="Hyderabad">Hyderabad</option>
            <option value="Lucknow">Lucknow</option>
        </select> <br> <br>
        <input type="Submit" value="Cilck Here to Submit Your Data" name="submit">
    </form>
</body>
</html>