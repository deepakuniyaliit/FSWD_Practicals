<?php
include_once('config.php');
?>

<?php
if(isset($_POST['submit'])){   
    $username=$_POST['username'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $gender=$_POST['gender'];
    $city=$_POST['city'];
    $sql="INSERT INTO `users` (`username`, `email`, `contact`, `gender`, `city`) VALUES ('$username', '$email','$contact','$gender', '$city')";
    mysqli_query($conn,$sql);
    }
else{
    echo "CLICK SUBMIT";
}

?>
<html>
<head>
<title>FORM php</title>
</head>
<body>
<form method='POST' action='form.php'>
        Username <input type="text" name="username" placeholder="ENTER USERNAME" required><br>
        E-Mail <input type="email" name="email" placeholder="ENTER VALID EMAIL" required><br>
        Contact<input type="number" name="contact" placeholder="ENTER VALID CONTACT" minlength="10" maxlength="10" required><br>
        <label>Gender- </label>
    male<input type="radio" name="gender" value="male" required>
    female<input type="radio" name="gender" value="female" required><br>
        City <select name="city" class="margin">
     <option value="mumbai">Mumbai</option>
    <option value="delhi">Delhi</option>
    <option value="jaipur">Jaipur</option>
    <option value="mussorie">Mussorie</option>
    <option value="nanital">Nanital</option>
    <option value="chennai">Chennai</option>
    <option value="pune">Pune</option>
    <option value="banglore">Banglore</option>
    <option value="hyderabad">Hyderabad</option>
    <option value="lucknow">Lucknow</option>
</select><br><br>
        <input type="submit" name="submit" value="Click Here To Submit">
</form>
</body>
</html>