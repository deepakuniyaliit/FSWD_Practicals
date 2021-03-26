<?php
include 'configuration.php';
?>

<?php
if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];

    if (empty($username)) {
        echo "Username is empty";
      }
      if (empty($email)) {
        echo "email is empty";
      }
      if (empty($contact)) {
        echo "contact is empty";
      }
      if (empty($gender)) {
        echo "gender is empty";
      }
      if (empty($city)) {
        echo "city is empty";
      }
      $length = strlen ($contact);  
      if ( $length < 10 && $length > 10) {  
        echo "Mobile must have 10 digits.";
    }

    $sql_u = "SELECT * FROM users WHERE username='$username'";
  	$res_u = mysqli_query($conn, $sql_u);
      if (mysqli_num_rows($res_u) > 0) 
      {	
  	}
      else{
        $sql = "INSERT INTO users (username, email, gender, city) VALUES ('$username', '$email', '$gender', '$city')";
        mysqli_query($conn, $sql);
  	}
}
else{
    echo "Please click submit button to submit the data..";
}
?>

<html>
    <head>
        <title>HTML Forms</title>
    </head>
<body>
<form method="POST" action="form.php">
    USERNAME <input type="text" name="username" placeholder="Type Your Username" required><br>
    E-MAIL <input type="email" name="email" placeholder="Type Your E-mail" required><br>
    CONTACT <input type="tel" name="contact" placeholder="Type Your contact" pattern="[1-9]{1}[0-9]{9}" required><br>
    GENDER<br> <input type="radio" id="male" name="gender" value="male" checked="checked">
    <label for="male">Male</label><br>
    <input type="radio" id="female" name="gender" value="female">
    <label for="female">Female</label><br>
    <input type="radio" id="other" name="gender" value="other">
    <label for="other">Other</label>
    <br>
    Select City <select name="city">
        <option value="Mumbai">Mumbai</option>
        <option value="Delhi">Delhi</option>
        <option value="Jaipur">Jaipur</option>
        <option value="Mussorie">Mussorie</option>
        <option value="Nanital">Nanital</option>
        <option value="Chennai">Chennai</option>
        <option value="Pune">Pune</option>
        <option value="Bangalore">Bangalore</option>
        <option value="Hyderabad">Hyderabad</option>
        <option value="Lucknow">Lucknow</option>
    </select><br>
    <input type="submit" name="submit" value="Click Here To Submit Your Data">
</form>
</body>
</html>

