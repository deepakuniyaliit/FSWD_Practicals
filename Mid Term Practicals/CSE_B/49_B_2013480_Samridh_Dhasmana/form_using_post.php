<?php
include('configuration.php');
?>
<?php
if(isset($_POST['submit']))
{
$username=$_POST['username'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$gender=$_POST['gender'];
$city=$_POST['city'];
$sql="INSERT INTO `users` (`username`, `email`,`contact`, `gender`, `city`) VALUES ('$username', '$email','$contact', '$gender', '$city')";
mysqli_query($conn,$sql);
}
else{
echo "click submit button first";
}
?>
<html>
    <head>
        <title>FORM</title>
    </head>
    <body>
    <form method="POST" action="form_using_post.php" >
       Username <input type="text" name="username" value="" placeholder="Enter username" required/><br>
      Email <input type="email" name="email" value="" placeholder="sam@gmail.com" required/><br>
      Contact <input type="text" name="contact" value="" placeholder="Enter phone no" maxlength="10" required/><br>
       Gender-
       <input type="radio" name="gender" value="Male">Male 
       <input type="radio" name="gender" value="Female">Female 
       <br>
       Select City  <select name="city"> 
       <option value="Mumbai">Mumbai</option>
       <option value="Delhi">Delhi</option>
       <option value="Jaipur">Jaipur</option>
       <option value="Mussorie">Mussorie</option>
       <option value="Nanital">Nanital</option>
       <option value="Chennai">Chennai</option>
       <option value="Pune">Pune</option>
       <option value="Banglore">Banglore</option>
       <option value="Hyderabad">Hyderabad</option>
       <option value="Lucknow">Lucknow</option>
      </select><br>
      <input type="submit" name="submit">
    </form>
    </body>
</html>