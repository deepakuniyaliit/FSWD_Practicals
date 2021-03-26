<?php
include('config.php');
?>
<?php
if(isset($_GET['submit'])){
  $username=$_GET['username'];
  $email=$_GET['email'];
  $contact=$_GET['contact'];
  $gender=$_GET['gender'];
  $city=$_GET['city'];

  $sql="INSERT INTO users ( username, email, contact,gender,city) VALUES ( '$username', '$email', '$contact','$gender','$city')";
  mysqli_query( $conn,$sql);
} 
else
{
  echo "Please click submit to submit the data";
}
?>
<html>
<head>
  <title>Form</title>
</head>
<body>
<form  action="add.php" method="get">
  <br><br><br>USERNAME <input type="text" name="username" placeholder="Name" required=""><br><br>
  E-MAIL<input type="email" name="email" placeholder="abc@gmail.com" required=""><br><br>
  CONTACT<input type="number" name="contact" placeholder="Mobile Number" size="10" required><br><br>
  Gender - Male <input type="radio" name="gender" value="M" checked>
            Female <input type="radio" name="gender" value="F"><br><br>
            Select Your City - <select name="city">
                <option value="mumbai" selected>mumbai</option>
                <option value="Delhi">delhi</option>
                <option value="jaipur">jaipur</option>
                <option value="Mussoorie">MUSSOORIE</option>
                <option value="nanital">nanital</option>
                <option value="chennai">chennai</option>
                <option value="pune">pune</option>
                <option value="bangalore">bangalore</option>
                <option value="hyderabad">hyderabad</option>
                <option value="lucknow">lucknow</option>
            </select>
            <br><br>
  <input type="submit" name="submit">
  
</form>
</body>
</html>