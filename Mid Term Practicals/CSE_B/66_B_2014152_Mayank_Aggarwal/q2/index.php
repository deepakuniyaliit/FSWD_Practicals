<?php
include('configuration.php')
?>

<?php
    if(isset($_POST['submit']))
    {
        $username =$_POST['username'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $gender = $_POST['gender'];
        $city = $_POST['city'];
        $sql = "INSERT INTO `users` (`id`, `username`, `email`, `contact`, `gender`, `city`) VALUES (NULL, '$username', '$email', '$contact', '$gender , '$city')";
        mysqli_query($conn, $sql);
       

    }
    else
    {
        echo "Please click submit button";
    }
?>
<?php
$usernameErr = $emailErr = $contactErr = $cityErr = $genderErr="";
if(isset($_POST['submit']))
{
    if (empty($_POST['username'])) {
        $usernameErr = "User Name is required";
      }
      if (empty($_POST['email'])) {
        $emailErr = "Email is required";
      }
      if (empty($_POST['contact'])) {
        $contactErr = "Contact is required";
      }
      if (empty($_POST['city'])) {
        $cityErr = "City is required";
      }
      if (empty($_POST['genderErr'])) {
        $genderErr = "Gender is required";
      }
}

?>






<html>
    <head>
        <title>
            Form
        </title>
    </head>
    <body>
        <form method="POST" action="index.php">
            Username <input type="text" name="username" placeholder="Enter Username" required><br>
           
            Email <input type="email" name="email" placeholder="Enter Email"><br>
            
            Contact <input type="number"  name="contact" min="1000000000" max="10000000000"  placeholder="Enter Contact Number"><br>
           
            Gender - <br>
            Male <input type="radio" value="M" name="gender">
            Female <input type="radio" value="F" name="gender"><br>
            
          <br>Select Your city<br>
          <select name="city">
            Mumbai, Delhi, Jaipur, Mussoorie, Nanital, Chennai,
            Pune, Bangalore, Hyderabad, Lucknow
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
            

          </select><br>
            <input type="submit" name="submit" value="click here to submit">
        </form>
    </body>
</html>