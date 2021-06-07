<?php
include('configuration.php')
?>
<?php
    if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $contact=$_POST['number'];
            $gender = $_POST['gender'];
            $city = $_POST['city'];

             $sql = "INSERT INTO `users` (`username`, `email`,'contact', `gender`, `city`) VALUES ('$username', '$email','$number', '$gender', '$city')";
             mysqli_query($conn, $sql);

        }

else{
    echo "Please click submit button to submit the data..";
}
?>
<html>
    <head>
        <title>add data</title>
    </head>
<body>
<form action="input.php" method="POST" name="form">
        <tr><td>Username</td><td colspan="2"><input type="text" name="username" id="username"></td></tr>
        <tr><td>E-Mail</td><td colspan="2"><input type="email" name="email" id="email"></td></tr>
        <tr><td>Number</td><td colspan="2"><input type="tel" name="number" id="number" pattern="[0-9]{10}"></td></tr>  
        <tr><td>Gender</td><td><input type="radio" name="gender" value="Male">Male</td><td><input type="radio" name="gender" value="Female">Female</td><td><input type="radio" name="gender" value="Other">Other</td></tr>     
        <tr><td>City</td><td colspan="2"><select  name="city" id="city">
            <option value="Mumbai">Mumbai</option>
            <option value="Delhi">Delhi</option>
            <option value="Jaipur">Jaipur</option>
            <option value="Mussoorie">Mussoorie</option>
            <option value="Nanital">Nanital</option>
            <option value="Chennai">Chennai</option>
            <option value="Pune">Pune</option>
            <option value="Bangalore">Bangalore</option>
            <option value="Hyderabad">Hyderabad</option>
            <option value="Lucknow">Lucknow</option>
                 </select></td></tr>  
            
        <tr><td></td><td colspan="2" ><input type="submit" name="submit" value="SUBMIT" onclick=" return validate()"></td></tr>
    </form>
</body>
</html>
