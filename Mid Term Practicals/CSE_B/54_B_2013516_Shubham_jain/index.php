<?php
include('config.php');
?>

<?php
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];

    $sql = "INSERT INTO `users` (`username`, `email`, `gender`, `city`) VALUES ('$username', '$email', '$gender', '$city')";
    mysqli_query($conn, $sql);
}
else{
    echo "Please click submit button to submit the data..";
}
?>
<html>
    <head>
        <title>form</title>
        
    </head>
    <body>
        <form method="POST" action="index.php" class="form">
        USERNAME 
        <input type="text" name="username" placeholder="username" > <br>
        EMAIL 
        <input type="email" name="email" placeholder="email" required> <br>
        CONTACT
        <input type="tel" name="contact" minlength="10" maxlength="10" placeholder="contact number" required> <br>
        GENDER
        MALE <input type="radio" name="gender" value="male" required>
        FEMALE <input type="radio" name="gender" value="female" required> <br>
        CITY <select name="city" >
            <option value="MUMBAI">MUMBAI</option>
            <option value="DELHI">DELHI</option>
            <option value="JAIPUR">JAIPUR</option>
            <option value="MUSSOORIE">MUSSOORIE</option> 
            <option value="NANITAL">NANITAL</option>
            <option value="CHENNAI">CHENNAI</option>
            <option value="PUNE">PUNE</option>
            <option value="BANGLORE">BANGLORE</option>
            <option value="HYDERABAD">HYDERABAD</option>
            <option value="LUCKNOW">LUCKNOW</option>
        </select> <br>
        <input type="submit" name="submit" value="submit" onclick="valname()">
    </form>
    </body>
</html>