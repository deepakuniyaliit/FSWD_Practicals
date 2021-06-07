<?php
include('conn.php');
?>

<?php
if(isset($_POST['submit'])){
   $username= $_POST['username'];
 $email=$_POST['email'];
 $email=$_POST['contact'];
$gender=$_POST['gender'];
 $city=$_POST['city'];
 
 $sql="INSERT INTO `users` (  `username`, `email`,`contact`, `gender`, `city`) VALUES ( '$username', '$email','$contact', '$gender', '$city')";
 mysqli_query($conn, $sql);
}
else{
    echo "Please click submit button to submit....";

}
?>



<html>
    <head>
        <title>HTML Forms</title>
    </head>
<body>
<form method="POST" action="add.php">
    USERNAME <input type="text" name="username" placeholder="Type Your Username" required><br>
    E-MAIL <input type="email" name="email" placeholder="Type Your E-mail" required><br>
    CONTACT <input type="text" name="contact" placeholder="phone no." minlength="10" maxlength="10" required><br>
    GENDER Male<input type="radio" name="gender" value="male" checked>
    Female<input type="radio" name="gender" value="female" checked><br>
    Select City <select name="city">
        <option value="Mumbai">Mumbai</option>
        <option value="Delhi">Delhi</option>
        <option value="Jaipur">Jaipur</option>
        <option value="Nanital">Nanital</option>
        <option value="Banglore">Banglore</option>
        <option value="Lucknow">Lucknow</option>
        <option value="Musoorie">Musoorie</option>
        <option value="Hyderabad">Hyderabad</option>
        <option value="Pune">Pune</option>
    </select><br>
    <input type="submit" name="submit" value="Submit here">
</form>
</body>
</html>